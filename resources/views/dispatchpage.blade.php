<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="/img/T4U.ico">

    <!-- Or for PNG format -->
    <link rel="icon" type="image/png" href="/favicon.png">
    <title>Broker/Dispatch Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Set viewport meta tag for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom CSS for styling -->
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .btn-pro {
            background-color: #007BFF;
            color: white;
            border: none;
        }

        .btn-pro:hover {
            background-color: #0056b3;
        }

        .btn-info {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center">Broker/Dispatch Page</h1>

        <!-- Log In Dropdown -->
        <div class="d-flex justify-content-center mt-4">
            <div class="btn-group">
                <button class="btn btn-primary btn-pro" data-toggle="collapse" data-target="#loginForm">Log In</button>
                <button class="btn btn-primary dropdown-toggle btn-pro" data-toggle="dropdown"></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Option 1</a>
                    <a class="dropdown-item" href="#">Option 2</a>
                    <a class="dropdown-item" href="#">Option 3</a>
                </div>
            </div>
        </div>

        <!-- Create Account Dropdown -->
        <div class="d-flex justify-content-center mt-4">
            <div class="btn-group">
                <button class="btn btn-success btn-pro" data-toggle="collapse" data-target="#createAccountForm">
                    Create Account
                </button>
                <button class="btn btn-success dropdown-toggle btn-pro" data-toggle="dropdown"></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Option 1</a>
                    <a class="dropdown-item" href="#">Option 2</a>
                    <a class a="dropdown-item" href="#">Option 3</a>
                </div>
            </div>
        </div>

        <!-- Create Account Form (initially hidden) -->
        <div id="createAccountForm" class="collapse mt-3">
            <form action="signup.php" method="post" class="mb-3">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="company">Company Name:</label>
                    <input type="text" class="form-control" id="company" name="company" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <button type="submit" class="btn btn-success btn-pro btn-block">Create Account</button>
            </form>
        </div>

        <!-- Log In Form (initially hidden) -->
        <div id="loginForm" class="collapse mt-3">
            <form action="login.php" method="post" class="mb-3">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-pro btn-block">Log In</button>
            </form>
        </div>

        <!-- Request Insurance Certificate Form -->
        <form action="request_certificate.php" method="post" class="mt-4">
            <!-- (The rest of your form content remains the same) -->
        </form>
    </div>

    <!-- Home Button (Top Right) -->
    <a href="{{ url('/') }}" class="btn btn-info btn-pro">Back To Home</a>

    @include('footer')
    <!-- Add your JavaScript functions and AJAX calls here -->
    <script src="your-javascript-file.js"></script>
    <!-- Load JavaScript and jQuery before Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
