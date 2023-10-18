<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="/img/T4U.ico">

    <!-- Or for PNG format -->
    <link rel="icon" type="image/png" href="/favicon.png">
    <title>Freight Hauling Quote Request</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container mt-5">
       
            <div class="container mt-5">
                <h1>Freight Quote Request</h1>
                <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
            </div>

            <form action="{{ route('submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="pickupLocation">Pickup Location:</label>
                    <input type="text" class="form-control" id="pickupLocation" name="pickupLocation" required>
                </div>

                <div class="form-group">
                    <label for="pickupDateTime">Pickup Date/Time:</label>
                    <input type="datetime-local" class="form-control" id="pickupDateTime" name="pickupDateTime" required
                        min="YYYY-MM-DDT08:00" max="YYYY-MM-DDT14:00">
                </div>


                <div class="form-group">
                    <label for="deliveryLocation">Delivery Location:</label>
                    <input type="text" class="form-control" id="deliveryLocation" name="deliveryLocation" required>
                </div>

                <div class="form-group">
                    <label for="deliveryDateTime">Delivery Date/Time:</label>
                    <input type="datetime-local" class="form-control" id="deliveryDateTime" name="deliveryDateTime"
                        required>
                </div>

                <div class="form-group">
                    <label for="equipmentType">Equipment Needed:</label>
                    <select class="form-control" id="equipmentType" name="equipmentType">
                        <option value="Power Only">Power Only</option>
                        <option value="53’ Dry Van">53’ Dry Van</option>
                        <option value="Flatbed">Flatbed</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="loadType">Partial or Full Load:</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="partialLoad" name="loadType"
                            value="Partial Load">
                        <label class="form-check-label" for="partialLoad">Partial Load</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="fullLoad" name="loadType" value="Full Load">
                        <label class="form-check-label" for="fullLoad">Full Load</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="loadDimensions">Load Dimensions (feet and weight):</label>
                    <input type="text" class="form-control" id="loadDimensions" name="loadDimensions" required>
                </div>

                <div class="form-group">
                    <label for="commodityDescription">Commodity/Load Description:</label>
                    <textarea class="form-control" id="commodityDescription" name="commodityDescription" required></textarea>
                </div>

                <div class="form-group">
                    <label for="contactName">Contact Name:</label>
                    <input type="text" class="form-control" id="contactName" name="contactName" required>
                </div>

                <div class="form-group">
                    <label for="contactPhone">Phone Number:</label>
                    <input type="tel" class="form-control" id="contactPhone" name="contactPhone" required>
                </div>

                <div class="form-group">
                    <label for="contactEmail">Email:</label>
                    <input type="email" class="form-control" id="contactEmail" name="contactEmail" required>
                </div>

                <div class="form-group">
                    <label for="loadDoc">Upload Load Doc (PDF):</label>
                    <input type="file" class="form-control-file" id="loadDoc" name="loadDoc">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
   

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@include('footer')

</html>
