<!DOCTYPE html>
<html>

<head>
    <title>Broker/Dispatch Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Set viewport meta tag for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center">Broker/Dispatch Page</h1>

        <!-- Login/Sign Up Buttons (on the same line) -->
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-primary" data-toggle="collapse" data-target="#loginForm">Log In</button>
            <button class="btn btn-success ml-3" data-toggle="collapse" data-target="#signUpForm">Sign Up</button>
        </div>

        <!-- Login Form -->
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

                <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </form>
        </div>

        <!-- Sign Up Form -->
        <div id="signUpForm" class="collapse mt-3">
            <form action="signup.php" method="post" class="mb-3">
                <!-- Include fields for creating an account (e.g., name, email, password, etc.) -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <!-- Additional sign-up fields can be added here -->

                <button type="submit" class="btn btn-success btn-block">Create Account</button>
            </form>

            <!-- Sign Up with Google -->
            <a href="google_signup.php" class="btn btn-danger btn-block">Sign Up with Google</a>
        </div>

        <!-- Request Insurance Certificate Form -->
        <form action="request_certificate.php" method="post" class="mt-4">
            <!-- (The rest of your form content remains the same) -->
        </form>

        <!-- Home Button -->
        <div class="mt-4 text-center">
            <a href="{{ url('/') }}" class="btn btn-info">Home</a>
        </div>
    </div>
    @include('footer')
    <!-- Add your JavaScript functions and AJAX calls here -->
    <script src="your-javascript-file.js"></script>
    <!-- Load JavaScript and jQuery before Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
