<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="/img/T4U.ico">

    <!-- Or for PNG format -->
    <link rel="icon" type="image/png" href="/favicon.png">
    <title>Employee Application Form</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Set viewport meta tag for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4">Employee Application Form</h1>

        <form action="submit.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-6">
                    <label for="license">Current License Type, State, and Number:</label>
                    <input type="text" class="form-control" id="license" name="license" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="expiration">License Expiration Date:</label>
                    <input type="date" class="form-control" id="expiration" name="expiration" required>
                </div>
                <div class="col-md-6">
                    <label for="endorsements">Endorsements/Restrictions:</label>
                    <input type="text" class="form-control" id="endorsements" name="endorsements">
                </div>
            </div>

            <div class="mb-3">
                <label for="backgroundCheck">Permission to run background and credit check:</label>
                <select class="form-control" id="backgroundCheck" name="backgroundCheck">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="workSchedule">Preferred Work Schedule/Type:</label>
                <textarea class="form-control" id="workSchedule" name="workSchedule" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="experience">Experience/History/References (3 or more):</label>
                <textarea class="form-control" id="experience" name="experience" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label for="resume">Upload Resume Documents:</label>
                <input type="file" class="form-control-file" id="resume" name="resume"
                    accept=".pdf, .doc, .docx">
            </div>

            <div class="mb-3">
                <label>Owner Operator vs. Driver App?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operatorType" id="ownerOperator"
                        value="ownerOperator">
                    <label class="form-check-label" for="ownerOperator">Owner Operator</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operatorType" id="driver" value="driver">
                    <label class="form-check-label" for="driver">Driver</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            <!-- Add a button to go back to the home page -->
            <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@include('footer')

</html>
