<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Employee Application</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; margin: 20px;">
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

        @if(isset($data['resume']))
            <p><strong>Uploaded Resume:</strong> <a href="https://truk4you.com/storage/{{ $data['resume'] }}">Download Resume</a></p>
        @endif

        <p>Thank you.</p>
    </div>
</body>
</html>
