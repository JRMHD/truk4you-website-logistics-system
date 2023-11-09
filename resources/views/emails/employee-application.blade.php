<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Employee Application</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f7f7f7;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
        }

        p {
            margin-bottom: 10px;
            line-height: 1.6;
            color: #333333;
        }

        strong {
            color: #007bff;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>New Employee Application</h2>

        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>License:</strong> {{ $data['license'] }}</p>
        <p><strong>License Expiration:</strong> {{ $data['expiration'] }}</p>
        <p><strong>Endorsements/Restrictions:</strong> {{ $data['endorsements'] }}</p>
        <p><strong>Background Check:</strong> {{ $data['backgroundCheck'] }}</p>
        <p><strong>Work Schedule/Type:</strong> {{ $data['workSchedule'] }}</p>
        <p><strong>Address:</strong> {{ $data['address'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Experience/References:</strong> {{ $data['experience'] }}</p>

        {{-- @if(isset($data['resume']))
            <p><strong>Uploaded Resume:</strong> <a href="https://truk4you.com/storage/{{ $data['resume'] }}">Download Resume</a></p>
        @endif --}}

        <p>Thank you.</p>
    </div>
    <div class="footer">
        &copy; 2023 Truk4You. All rights reserved.
    </div>
</body>

</html>
