<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Subscriber Alert</title>
    <style>
        /* Add your styles here for a professional look */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #007bff;
        }

        p {
            color: #333333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Subscriber Alert!</h1>
        <p>A new subscriber has joined. Here are the details:</p>
        <p>Email: {{ $subscription->email }}</p>
        {{-- Add other subscriber details if needed --}}
    </div>
</body>
</html>
