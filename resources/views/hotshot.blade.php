<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="/img/T4U.ico">
    <meta charset="utf-8">
    <title>Hotshot Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add your custom CSS for professional styling here */
        body {
            background-color: #f0f0f0;
        }

        .container {
            padding: 20px;
        }

        .go-back-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>

<body>
    <a href="{{ url('/') }}" class="btn btn-primary go-back-button">Go Back Home</a>

    <div class="container mt-5">
        <h1 class="text-center">Hotshot Services</h1>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/hotshot pic.webp" class="card-img-top" alt="Hotshot Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Express Delivery</h5>
                        <p class="card-text">Rapid transportation of time-sensitive cargo. On-time delivery with a
                            dedicated team and reliable vehicles. Small packages or critical cargo.
                            <a class="contact-email" href="mailto:letsroll@truk4you.com">Contact Us</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/hotshotimage.jpg" class="card-img-top" alt="Hotshot Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Specialized Cargo</h5>
                        <p class="card-text">Delivery of oversized or specialized cargo. Powerful fleet for heavy and
                            bulky loads. Personalized service to meet your requirements.
                            <a class="contact-email" href="mailto:letsroll@truk4you.com">Contact Us</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/hotshot1.webp" class="card-img-top" alt="Hotshot Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Last-Mile Delivery</h5>
                        <p class="card-text">Swift delivery to homes and businesses. Convenience and reliability. Your
                            satisfaction is our priority.
                            <a class="contact-email" href="mailto:letsroll@truk4you.com">Contact Us</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
