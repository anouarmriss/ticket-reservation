<!DOCTYPE html>
<html>
<head>
    <title>Reservation Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reservation Confirmation</h1>
        
        <p>Dear {{ $reservation->user->name }},</p>
        
        <p>Your reservation has been confirmed. Here are your details:</p>
        
        <div class="details">
            <p><strong>Date:</strong> {{ $reservation->reservation_date }}</p>
            <p><strong>Time:</strong> {{ $reservation->reservation_time }}</p>
            <p><strong>Reference:</strong> {{ $reservation->qr_code }}</p>
        </div>

        <p>Please show the attached QR code when you arrive.</p>
        
        <div class="footer">
            <p>Thank you for your reservation!</p>
            <p>If you have any questions, please don't hesitate to contact us.</p>
        </div>
    </div>
</body>
</html>