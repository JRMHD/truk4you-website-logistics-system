<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailed  Freight Quote Request</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        h2 {
            color: #007bff;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <h2> Detailed Freight Quote Request</h2>

        <p><strong>Pickup Location:</strong> {{ $data['pickupLocation'] }}</p>
        <p><strong>Pickup Date/Time:</strong> {{ $data['pickupDateTime'] }}</p>
        <p><strong>Delivery Location:</strong> {{ $data['deliveryLocation'] }}</p>
        <p><strong>Delivery Date/Time:</strong> {{ $data['deliveryDateTime'] }}</p>
        <p><strong>Equipment Needed:</strong> {{ $data['equipmentType'] }}</p>
        <p><strong>Partial or Full Load:</strong> {{ $data['loadType'] }}</p>
        <p><strong>Load Dimensions:</strong> {{ $data['loadDimensions'] }}</p>
        <p><strong>Commodity/Load Description:</strong> {{ $data['commodityDescription'] }}</p>
        <p><strong>Contact Name:</strong> {{ $data['contactName'] }}</p>
        <p><strong>Phone Number:</strong> {{ $data['contactPhone'] }}</p>
        <p><strong>Email:</strong> {{ $data['contactEmail'] }}</p>
    </div>
</body>

</html>
