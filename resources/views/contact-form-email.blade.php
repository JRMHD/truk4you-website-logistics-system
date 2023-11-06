<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin: 0;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
        }

        .highlight {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CONTACT</h1>
        <p><span class="highlight">Name:</span> {{ $data['name'] }}</p>
        <p><span class="highlight">Email:</span> {{ $data['email'] }}</p>
        <p><span class="highlight">Subject:</span> {{ $data['subject'] }}</p>
        <p><span class="highlight">Message:</span> {{ $data['message'] }}</p>
    </div>
</body>
</html>
