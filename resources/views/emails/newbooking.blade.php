<!DOCTYPE html>
<html>
<head>
    <title>Service Booking Confirmation</title>
</head>
<body>
    <h1>Service Booking Confirmation</h1>
    <p>Dear {{ $mailData['serviceprovider_name'] }},</p>
    
    <p>Your service booking details:</p>

    <ul>
        <li><strong>Service:</strong> {{ $mailData['service_name'] }}</li>
        <li><strong>Price Plan:</strong> {{ $mailData['price_plan'] }}</li>
        <li><strong>name:</strong> {{ $mailData['name'] }}</li>
        <li><strong>email:</strong> {{ $mailData['email'] }}</li>
        <li><strong>phone:</strong> {{ $mailData['phone'] }}</li>
        <li><strong>date:</strong> {{ $mailData['date'] }}</li>
    </ul>

    <p>For More Details check Your Protal</p>

    <p>Thank you for booking with us!</p>
</body>
</html>
