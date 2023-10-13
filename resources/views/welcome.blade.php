<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="/img/T4U.ico">

    <!-- Or for PNG format -->
    <link rel="icon" type="image/png" href="/favicon.png">

    <meta charset="utf-8">
    <title>Truk4You Homepage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <img src="img/truk4you logo.jpeg" alt="TRUK4YOU Logo" width="200" height="76">
            {{-- <h2 class="mb-2 text-white">TRUK4YOU</h2> --}}
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                {{-- <a href="service.html" class="nav-item nav-link">Services</a> --}}
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block">
                <i class=" text-primary me-3 small" style="display: inline-block; vertical-align: middle;"></i>
                <a href="https://safer.fmcsa.dot.gov/CompanySnapshot.aspx"
                    style="display: inline-block; vertical-align: middle;">MC: 930197</a>
                <span style="display: inline-block; vertical-align: middle; margin-left: 10px;"><a
                        href="https://safer.fmcsa.dot.gov/CompanySnapshot.aspx">DOT: 2789415</a></span>
            </h4>





        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/truk 1.png" alt="">

                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">

                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics
                                    Simplified</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Solution For Your <span
                                        class="text-primary">Logistics Needs</span></h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Experience a new level of efficiency and
                                    reliability in transportation. Our dedicated team ensures a seamless experience from
                                    start to finish. Contact us today to get started.</p>
                                <div class="d-flex flex-column flex-md-row">
                                    <a href="{{ route('quote') }}"
                                        class="btn btn-primary py-2 px-4 me-3 animated slideInLeft mb-2 mb-md-0">Submit
                                        Quote Request</a>
                                    <a href="{{ route('employeeApplication') }}"
                                        class="btn btn-secondary py-2 px-4 me-3 animated slideInLeft mb-2 mb-md-0">Submit
                                        Application</a>
                                    <a href="{{ route('dispatchpage') }}"
                                        class="btn btn-success py-2 px-4 me-3 animated slideInLeft mb-2 mb-md-0">Dispatch
                                        Page</a>
                                    <a href="{{ route('Adminlogin') }}"
                                        class="btn btn-danger py-2 px-4 me-3 animated slideInLeft mb-2 mb-md-0">Admin
                                        Login</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/truk 2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics
                                    Simplified</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Solution For Your <span
                                        class="text-primary">Logistics Needs</span></h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Experience a new level of efficiency and
                                    reliability in transportation. Our dedicated team ensures a seamless experience from
                                    start to finish. Contact us today to get started.</p>
                                <div class="d-flex flex-column flex-md-row">
                                    <a href="{{ route('quote') }}"
                                        class="btn btn-primary py-2 px-4 me-3 animated slideInLeft mb-2 mb-md-0">Submit
                                        Quote Request</a>
                                    <a href="{{ route('employeeApplication') }}"
                                        class="btn btn-secondary py-2 px-4 me-3 animated slideInLeft mb-2 mb-md-0">Submit
                                        Application</a>
                                    <a href="{{ route('dispatchpage') }}"
                                        class="btn btn-success py-2 px-4 me-3 animated slideInLeft mb-2 mb-md-0">Dispatch
                                        Page</a>
                                    <a href="{{ route('Adminlogin') }}"
                                        class="btn btn-danger py-2 px-4 me-3 animated slideInLeft mb-2 mb-md-0">Admin
                                        Login</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="container-fluid overflow-hidden py-5 px-lg-0">
            <div class="container about py-5 px-lg-0">
                <div class="row g-5 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg"
                                style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                        <h1 class="mb-5">Quick Transport and Logistics Solutions</h1>
                        <p class="mb-5">Experience a new level of efficiency and reliability in transportation. Our
                            dedicated team ensures a seamless experience from start to finish. Contact us today to get
                            started.</p>
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                                <h5>Global Coverage</h5>
                                <p class="m-0">We provide global coverage to meet your logistics needs.</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                                <h5>On Time Delivery</h5>
                                <p class="m-0">We pride ourselves on delivering your goods on time, every time.</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary py-3 px-5">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->











        <!-- Quote Start -->
        <div class="container-xxl py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                        <h1 class="mb-5">Request A Free Quote!</h1>
                        <p class="mb-5">Need a freight quote or have questions? Reach out to us, and we'll provide
                            you with a quick and hassle-free quote.</p>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                            <div class="ps-4">
                                <h6>Contact us for inquiries!</h6>
                                <h3 class="text-primary m-0">+1 303-944-7371</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Name"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control border-0" placeholder="Your Email"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Mobile"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select border-0" style="height: 55px;">
                                            <option selected>Select Freight Type</option>
                                            <option value="1">Air Freight</option>
                                            <option value="2">Ocean Freight</option>
                                            <option value="3">Road Freight</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-0" placeholder="Additional Notes"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->


        @include('footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
                class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>
