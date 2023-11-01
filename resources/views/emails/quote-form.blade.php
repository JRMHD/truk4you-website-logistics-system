<!DOCTYPE html>
<html>
<head>
    <title>Quote Form Submission</title>
</head>
<body>
    <h2>Quote Form Submission</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Mobile:</strong> {{ $data['mobile'] }}</p>
    <p><strong>Equipment Needed:</strong> {{ $data['equipment'] }}</p>
    <p><strong>Originating City State:</strong> {{ $data['originatingCityState'] }}</p>
    <p><strong>Destination City State:</strong> {{ $data['destinationCityState'] }}</p>
     <p><strong>shipByDate:</strong> {{ $data['shipByDate'] }}</p>
    <p><strong>Additional Notes:</strong> {{ $data['notes'] }}</p>
</body>
</html>
