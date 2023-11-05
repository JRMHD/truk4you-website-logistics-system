<!DOCTYPE html>
<html>
<head>
    <title>Quote Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h2 {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 10px 0;
        }

        strong {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Quote Form Submission</h2>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Mobile:</strong> {{ $data['mobile'] }}</p>
        <p><strong>Equipment Needed:</strong> {{ $data['equipment'] }}</p>
        <p><strong>Originating City State:</strong> {{ $data['originatingCityState'] }}</p>
        <p><strong>Destination City State:</strong> {{ $data['destinationCityState'] }}</p>
        <p><strong>Ship By Date:</strong> {{ $data['shipByDate'] }}</p>
        <p><strong>Additional Notes:</strong> {{ $data['notes'] }}</p>
    </div>
</body>
</html>
