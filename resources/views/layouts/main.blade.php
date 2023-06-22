<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kroz Objektiv</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar overlay-bottom">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="{{route('home')}}" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">Kroz Objektiv</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{route('home')}}" class="nav-item nav-link">Pоčetna</a>
                    <a href="{{route('courses')}}" class="nav-item nav-link">Kursevi</a>
                    <a href="{{route('registration-input-form')}}" class="nav-item nav-link">Rezervacija</a>
                    <a href="{{route('contact-input-form')}}" class="nav-item nav-link">Kontakt</a>
                    <a href="{{route('courses-all')}}" class="nav-item nav-link">Kursevi-admin</a>
                    <a href="{{route('course-input-form')}}" class="nav-item nav-link">Novi kurs-admin</a>
                    <a href="{{route('registrations-all')}}" class="nav-item nav-link">Rezervacije-admin</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    
    @yield('content')
    

    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top" style="background-image: url(img/footer.jpg); padding:0 !important">
        <div style="background: rgba(0, 0, 0, 0.6);">
            <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
                <div class="col-lg-2 col-md-6 mb-5">

                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">POsetite nas</h4>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Trg Republike 5, Beograd</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>011/675-676</p>
                    <p class="m-0"><i class="fa fa-envelope mr-2"></i>krozobjektiv@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Zapratite nas</h4>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Radno vreme</h4>
                    <div>
                        <h6 class="text-white text-uppercase">Ponedeljak - Petak</h6>
                        <p>08:00 - 18:00</p>
                        <h6 class="text-white text-uppercase">Subota - Nedekja</h6>
                        <p>10:00 - 16:00</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>