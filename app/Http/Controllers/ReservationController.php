<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Support\Facades\Storage;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Create or find user
            $user = User::firstOrCreate(
                ['email' => $request->email],
                [
                    'name' => $request->name,
                    'phone' => $request->phone
                ]
            );

            // Create reservation
            $reservation = Reservation::create([
                'user_id' => $user->id,
                'reservation_date' => $request->reservation_date,
                'reservation_time' => $request->reservation_time,
                'qr_code' => uniqid()
            ]);

            // Create QR Code
            $qrCode = new QrCode($reservation->qr_code);
            $writer = new PngWriter();
            $result = $writer->write($qrCode);

            // Ensure storage directory exists
            if (!Storage::exists('public/qrcodes')) {
                Storage::makeDirectory('public/qrcodes');
            }
            
            // Save QR code
            $result->saveToFile(storage_path('app/public/qrcodes/' . $reservation->qr_code . '.png'));

            return response()->json([
                'success' => true,
                'qr_code' => asset('storage/qrcodes/' . $reservation->qr_code . '.png'),
                'message' => 'Reservation created successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating reservation: ' . $e->getMessage()
            ], 500);
        }
    }

    public function index()
    {
        $reservations = Reservation::with('user')->get();
        return response()->json([
            'success' => true,
            'reservations' => $reservations
        ]);
    }

    public function validateQrCode($qrCode)
    {
        $reservation = Reservation::where('qr_code', $qrCode)->first();
        
        if (!$reservation) {
            return response()->json([
                'status' => 'Invalid QR Code'
            ], 400);
        }

        return response()->json([
            'status' => 'Valid QR Code',
            'reservation' => $reservation
        ]);
        
    }
    public function update(Request $request, $id)
    {
        try {
            $reservation = Reservation::findOrFail($id);
            
            // Check if time slot is available
            $existingReservation = Reservation::where('reservation_date', $request->reservation_date)
                ->where('reservation_time', $request->reservation_time)
                ->where('id', '!=', $id)
                ->first();
                
            if ($existingReservation) {
                return response()->json([
                    'success' => false,
                    'message' => 'This time slot is already booked'
                ], 400);
            }

            $reservation->update([
                'reservation_date' => $request->reservation_date,
                'reservation_time' => $request->reservation_time
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Reservation updated successfully',
                'reservation' => $reservation
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating reservation: ' . $e->getMessage()
            ], 500);
        }
    }
    public function destroy($id)
    {
        try {
            $reservation = Reservation::findOrFail($id);
            $reservation->delete();

            return response()->json([
                'success' => true,
                'message' => 'Reservation cancelled successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error cancelling reservation: ' . $e->getMessage()
            ], 500);
        }
    }
    public function checkAvailability(Request $request)
    {
        try {
            $existingReservation = Reservation::where('reservation_date', $request->date)
                ->where('reservation_time', $request->time)
                ->first();

            return response()->json([
                'success' => true,
                'available' => !$existingReservation
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error checking availability: ' . $e->getMessage()
            ], 500);
        }
    }

    
}