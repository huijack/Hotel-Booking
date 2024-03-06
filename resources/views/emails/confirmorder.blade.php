<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>
    <p>Dear {{ $booking->first_name }} {{ $booking->last_name }}</p>
    <p>Your booking has been confirmed. Here are the details:</p>
    <ul>
        <li>Name: {{ $booking->first_name }} {{ $booking->last_name }}</li>
        <li>Company Name: {{ $booking->company_name }}</li>
        <li>Country: {{ $booking->country }}</li>
        <li>Address: {{ $booking->street_address }} {{ $booking->street_address2 }}</li>
        <li>Postcode: {{ $booking->postcode }}</li>
        <li>Province: {{ $booking->province }}</li>
        <li>Phone Number: {{ $booking->phone_number }}</li>
        <li>Email: {{ $booking->email }}</li>
        <li>Room Type: {{ $booking->room_type }}</li>
        <li>Check-In Date: {{ $booking->date_check_in }}</li>
        <li>Check-Out Date: {{ $booking->date_check_out }}</li>
        <li>Room Quantity: {{ $booking->room_quantity }}</li>
        <li>Additional Notes: {{ $booking->order_notes }}</li>
        <li>Adults: {{ $booking->adults }}</li>
        <li>Children: {{ $booking->children }}</li>
        <li>Total Price: {{ $booking->price }}</li>
    </ul>

    <p>Thank you for choosing Sierra hotel. We look forward to welcoming you.</p>
</body>
</html>
