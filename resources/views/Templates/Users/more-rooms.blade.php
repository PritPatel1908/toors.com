@extends('Templates.Users.user-base')
@section('content')
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url('{{ asset('assets/Users/img/carousel-1.jpg') }}');">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Hotel List</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Hotels</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Hotel List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="bg-white shadow" style="padding: 35px;">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Check out" data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Adult</option>
                                    <option value="1">Adult 1</option>
                                    <option value="2">Adult 2</option>
                                    <option value="3">Adult 3</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Child</option>
                                    <option value="1">Child 1</option>
                                    <option value="2">Child 2</option>
                                    <option value="3">Child 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Hotel's</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Hotel</span></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="row room-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100" src="{{ asset('assets/Users/img/room-1.jpg') }}" alt
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <small class="bg-primary text-white rounded py-1 px-3">$100/Night</small>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <h5 class="mb-3">Junior Suite</h5>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3
                                        Bed</small>
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                    lorem sed diam stet diam sed stet.</p>
                            </div>
                            <div class="d-flex justify-content-between border-top mt-auto p-4">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('user.hotel_detail') }}">View Detail</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href>Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="row room-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100" src="{{ asset('assets/Users/img/room-2.jpg') }}" alt
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <small class="bg-primary text-white rounded py-1 px-3">$100/Night</small>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <h5 class="mb-3">Junior Suite</h5>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3
                                        Bed</small>
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                    lorem sed diam stet diam sed stet.</p>
                            </div>
                            <div class="d-flex justify-content-between border-top mt-auto p-4">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('user.hotel_detail') }}">View Detail</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href>Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="row room-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100" src="{{ asset('assets/Users/img/room-3.jpg') }}" alt
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <small class="bg-primary text-white rounded py-1 px-3">$100/Night</small>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <h5 class="mb-3">Junior Suite</h5>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3
                                        Bed</small>
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                    lorem sed diam stet diam sed stet.</p>
                            </div>
                            <div class="d-flex justify-content-between border-top mt-auto p-4">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('user.hotel_detail') }}">View Detail</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href>Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="row room-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100" src="{{ asset('assets/Users/img/room-1.jpg') }}" alt
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <small class="bg-primary text-white rounded py-1 px-3">$100/Night</small>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <h5 class="mb-3">Junior Suite</h5>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3
                                        Bed</small>
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                    lorem sed diam stet diam sed stet.</p>
                            </div>
                            <div class="d-flex justify-content-between border-top mt-auto p-4">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('user.hotel_detail') }}">View Detail</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href>Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="row room-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100" src="{{ asset('assets/Users/img/room-2.jpg') }}" alt
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <small class="bg-primary text-white rounded py-1 px-3">$100/Night</small>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <h5 class="mb-3">Junior Suite</h5>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3
                                        Bed</small>
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                    lorem sed diam stet diam sed stet.</p>
                            </div>
                            <div class="d-flex justify-content-between border-top mt-auto p-4">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('user.hotel_detail') }}">View Detail</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href>Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link rounded-0" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link rounded-0" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">

                    <div class="bg-light mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="border-bottom text-center text-dark p-3 pt-4 mb-3">
                            <span class="align-top fs-4 lh-base">$</span>
                            <span class="align-middle fs-1 lh-sm fw-bold">49.00</span>
                            <span class="align-bottom fs-6 lh-lg">/ Night</span>
                        </div>
                        <div class="row g-3 p-4 pt-2">
                            <div class="col-12">
                                <div class="date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Check in" data-target="#date3" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="date" id="date4" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Check out" data-target="#date4" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected>Adult</option>
                                    <option value="1">Adult 1</option>
                                    <option value="2">Adult 2</option>
                                    <option value="3">Adult 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected>Child</option>
                                    <option value="1">Child 1</option>
                                    <option value="2">Child 2</option>
                                    <option value="3">Child 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected>Night</option>
                                    <option value="1">Night 1</option>
                                    <option value="2">Night 2</option>
                                    <option value="3">Night 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 w-100">Book Now</button>
                            </div>
                        </div>
                    </div>


                    <div class="bg-light p-4 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="mb-4">Category</h4>
                        <a class="d-block position-relative mb-3" href>
                            <img class="img-fluid" src="{{ asset('assets/Users/img/cat-1.jpg') }}" alt>
                            <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3"
                                style="background: rgba(0,0,0,.3);">
                                <h5 class="text-white m-0 mt-auto">luxury Room</h5>
                            </div>
                        </a>
                        <a class="d-block position-relative mb-3" href>
                            <img class="img-fluid" src="{{ asset('assets/Users/img/cat-2.jpg') }}" alt>
                            <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3"
                                style="background: rgba(0,0,0,.3);">
                                <h5 class="text-white m-0 mt-auto">Couple Room</h5>
                            </div>
                        </a>
                        <a class="d-block position-relative" href>
                            <img class="img-fluid" src="{{ asset('assets/Users/img/cat-3.jpg') }}" alt>
                            <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3"
                                style="background: rgba(0,0,0,.3);">
                                <h5 class="text-white m-0 mt-auto">Single Room</h5>
                            </div>
                        </a>
                    </div>


                    <div class="border p-1 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="border p-4">
                            <h4 class="mb-4">Help & Support</h4>
                            <p>Lorem sed erat elitr magna magna labore duo elitr ipsum duo. Et sed duo rebum lorem
                                sed stet sed</p>
                            <div class="bg-primary text-center p-3">
                                <h4 class="text-white m-0">+012 345 67890</h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row justify-content-center">
            <div class="col-lg-10 border rounded p-1">
                <div class="border rounded text-center p-1">
                    <div class="bg-white rounded text-center p-5">
                        <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span>
                        </h4>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Enter your email">
                            <button type="button"
                                class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="bg-primary rounded p-4">
                        <a href="index.html">
                            <h1 class="text-white text-uppercase mb-3">Hotelier</h1>
                        </a>
                        <p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                            Aliqu diam amet diam et eos. Clita erat ipsum</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a
                            href="https://demo.htmlcodex.com/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="3f565159507f5a475e524f535a115c5052">[email&#160;protected]</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="row gy-5 g-4">
                        <div class="col-md-6">
                            <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                            <a class="btn btn-link" href>About Us</a>
                            <a class="btn btn-link" href>Contact Us</a>
                            <a class="btn btn-link" href>Privacy Policy</a>
                            <a class="btn btn-link" href>Terms & Condition</a>
                            <a class="btn btn-link" href>Support</a>
                        </div>
                        <div class="col-md-6">
                            <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                            <a class="btn btn-link" href>Food & Restaurant</a>
                            <a class="btn btn-link" href>Spa & Fitness</a>
                            <a class="btn btn-link" href>Sports & Gaming</a>
                            <a class="btn btn-link" href>Event & Party</a>
                            <a class="btn btn-link" href>GYM & Yoga</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. Designed By
                        <a class="border-bottom" href="https://htmlcodex.com/">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href>Home</a>
                            <a href>Cookies</a>
                            <a href>Help</a>
                            <a href>FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
