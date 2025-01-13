<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reservation Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }
        .details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .detail-item {
            margin: 10px 0;
        }
        .qr-note {
            background-color: #e8f4f8;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Reservation Confirmation</h1>
    </div>

    <p>Dear {{ $reservation->user->name }},</p>

    <p>Thank you for your reservation! We're excited to confirm your visit. Below are your reservation details:</p>

    <div class="details">
        <div class="detail-item">
            <strong>Reservation ID:</strong> {{ $reservation->id }}
        </div>
        <div class="detail-item">
            <strong>Date:</strong> {{ \Carbon\Carbon::parse($reservation->reservation_date)->format('l, F j, Y') }}
        </div>
        <div class="detail-item">
            <strong>Time:</strong> {{ \Carbon\Carbon::parse($reservation->reservation_time)->format('g:i A') }}
        </div>
        <div class="detail-item">
            <strong>Name:</strong> {{ $reservation->user->name }}
        </div>
        <div class="detail-item">
            <strong>Email:</strong> {{ $reservation->user->email }}
        </div>
    </div>

    <div class="qr-note">
        <p><strong>Important:</strong></p>
        <ul>
            <li>Your QR code is attached to this email</li>
            <li>Please present this QR code at the entrance</li>
            <li>Arrive 10 minutes before your scheduled time</li>
            <li>This reservation is valid only for the date and time mentioned above</li>
        </ul>
    </div>

    <p>If you need to modify or cancel your reservation, please contact our support team.</p>

    <div class="footer">
        <p>Thank you for choosing our service!</p>
        <p>If you have any questions, please don't hesitate to contact us.</p>
        <p>© {{ date('Y') }} E-Ticket System. All rights reserved.</p>
    </div>
</body>
</html>