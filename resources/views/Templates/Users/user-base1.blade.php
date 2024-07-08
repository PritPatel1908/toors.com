<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TOORS.COM - Tours And Travels</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="csrf_token" content="{{ csrf_token() }}" />
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="{{ asset('assets/Users/img/Toors.png', https) }}" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        {{-- <link href="{{ asset('cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->

        <link href="{{ asset('assets/Users/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/Users/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/Users/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets/Users/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/Users/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            <!-- Header Start -->
            <div class="container-fluid bg-dark px-0 fixed-top shadow">
                <div class="row gx-0 shadow">
                    <div class="col-lg-3 bg-dark d-none d-lg-block">
                        <a href="{{ route('user.index') }}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                            <h1 class="m-0 text-primary text-uppercase">TOORS.COM</h1>
                        </a>
                    </div>
                    <div class="col-lg-9">
                        <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                            <a href="{{ route('user.index') }}" class="navbar-brand d-block d-lg-none">
                                <h1 class="m-0 text-primary text-uppercase">TOORS.COM</h1>
                            </a>
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav mr-auto py-0">
                                    <a href="index.html" class="nav-item nav-link active">Home</a>
                                    <a href="about.html" class="nav-item nav-link">About</a>
                                    <a href="service.html" class="nav-item nav-link">Services</a>
                                    <a href="room.html" class="nav-item nav-link">Rooms</a>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                        <div class="dropdown-menu rounded-0 m-0">
                                            <a href="booking.html" class="dropdown-item">Booking</a>
                                            <a href="team.html" class="dropdown-item">Our Team</a>
                                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                        </div>
                                    </div>
                                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    @if (!Auth::user())
                                        <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-md-5 d-lg-block">Login / Signup<i class="fa fa-arrow-right ms-3"></i></a>
                                    @else
                                        <div class="div d-flex">
                                            @if(url()->current() == 'http://127.0.0.1:8000/Users/Profile')
                                                <a href="javascript:history.back()" class="nav-item nav-link"><i class="fas fa-regular fa-arrow-left"></i> Back To Home</a>
                                                <a href="{{ route('users.logout') }}" class="nav-item nav-link"><i class="fas fa-sign-out" aria-hidden="true"></i> Log Out</a>
                                            @elseif (url()->current() == 'https://toors-com.vercel.app/Users/Profile')
                                                <a href="javascript:history.back()" class="nav-item nav-link"><i class="fas fa-regular fa-arrow-left"></i> Back To Home</a>
                                                <a href="{{ route('users.logout') }}" class="nav-item nav-link"><i class="fas fa-sign-out" aria-hidden="true"></i> Log Out</a>
                                            @else
                                                <a href="{{ route('user.profile') }}" class="nav-item nav-link"><i class="far fa-user"></i> {{ $user->username }}</a>
                                                <a href="{{ route('users.logout') }}" class="nav-item nav-link"><i class="fas fa-sign-out" aria-hidden="true"></i> Log Out</a>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            @yield('content')

            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
                <div class="container pb-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-4">
                            <div class="bg-primary rounded p-4">
                                <a href="{{ route('user.index') }}"><h1 class="text-white text-uppercase">TOORS.COM</h1></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ahmedabad</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9510862562</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@toors.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                    <a class="btn btn-link" href="">About Us</a>
                                    <a class="btn btn-link" href="">Contact Us</a>
                                    <a class="btn btn-link" href="">Privacy Policy</a>
                                    <a class="btn btn-link" href="">Terms & Condition</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                    <a class="btn btn-link" href="">Food & Restaurant</a>
                                    <a class="btn btn-link" href="">Spa & Fitness</a>
                                    <a class="btn btn-link" href="">Sports & Gaming</a>
                                    <a class="btn btn-link" href="">Event & Party</a>
                                    <a class="btn btn-link" href="">GYM & Yoga</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="{{ route('user.index') }}">TOORS.COM</a>, All Right Reserved.

                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">Prit Patel</a>
                                <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">Prit Patel</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="">Home</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Header End -->
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script data-cfasync="false" src="{{ asset('assets/Users/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/Users/code.jquery.com/jquery-3.4.1.min.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script> --}}
        <script src="{{ asset('assets/Users/cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>
        <script src="{{ asset('assets/Users/lib/wow/wow.min.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>
        <script src="{{ asset('assets/Users/lib/rating/rating.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>
        <script src="{{ asset('assets/Users/lib/easing/easing.min.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>
        <script src="{{ asset('assets/Users/lib/waypoints/waypoints.min.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>
        <script src="{{ asset('assets/Users/lib/counterup/counterup.min.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>
        <script src="{{ asset('assets/Users/lib/owlcarousel/owl.carousel.min.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>
        <script src="{{ asset('assets/Users/lib/tempusdominus/js/moment.min.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>
        <script src="{{ asset('assets/Users/lib/tempusdominus/js/moment-timezone.min.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>
        <script src="{{ asset('assets/Users/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>

        <script src="{{ asset('assets/Users/js/main.js') }}" type="efed0310432fc24334ae7da8-text/javascript"></script>
        <script src="{{ asset('assets/Users/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="efed0310432fc24334ae7da8-|49" defer></script>

        <script src="{{ asset('assets/Users/js/ajax.js') }}"></script>
    </body>
</html>
