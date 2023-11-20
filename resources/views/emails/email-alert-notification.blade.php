<!-- resources/views/emails/email-alert-notification.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Alert</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #3498db;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .company-name {
            font-weight: bold;
            color: #3498db;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        {{-- <h2>We Are Reminding You</h2> --}}
        <h2>{{ $reminderMessage }}</h2>
        <p>{{ $emailMessage }}</p>
        <p class="company-name"><a href="{{ $companyLink }}" style="text-decoration: none; color: #3498db;">TRUK4YOU</a>
        </p>
    </div>

</body>

</html>
