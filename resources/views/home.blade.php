<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 0 15px;
            /* Added padding for mobile responsiveness */
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 7px 7px 0 0;
            padding: 15px;
            text-align: center;
            font-size: 1.5rem;
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 16px;
            /* Reduced padding for smaller buttons */
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            /* Display as block to be on its own line */
            width: 100%;
            /* Full width */
            margin-top: 10px;
            /* Adjusted margin for better spacing */
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .mt-3 {
            margin-top: 1rem;
            /* Adjusted margin for mobile responsiveness */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @auth
                    <p>Welcome, {{ Auth::user()->name }}!</p>
                @else
                    <p>You are logged in!</p>
                @endauth
            </div>
        </div>

        <div class="container text-center mt-3">
            @auth
                <a href="{{ route('download.file1') }}" class="btn btn-primary">Download W9</a>
                <a href="{{ route('download.file2') }}" class="btn btn-primary mt-3">Download Operating Authority MC
                    Number</a>
                <a href="{{ url('/') }}" class="btn btn-primary mt-3">Go Back Home</a>
            @else
                <p>Please <a href="{{ route('login') }}">log in</a> to download paperwork.</p>
            @endauth
        </div>
    </div>
</body>

</html>
