@extends('Templates.Users.user-base')
@section('content')
    <!-- About Start -->
    <div class="container-fluid mb-5 p-0">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="main-body">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb" class="main-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                    <!-- /Breadcrumb -->

                    <div class="row gutters-sm" id="profile_div">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset(Storage::url($user->profile_pic)) }}" alt="Profile Pic" class="rounded-circle" height="150" width="150">
                                        <div class="mt-3">
                                            <h4>{{ $user->username }}</h4>
                                            <p class="text-muted font-size-sm">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card mt-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                        <span class="text-secondary">https://bootdey.com</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                                        <span class="text-secondary">bootdey</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                        <span class="text-secondary">@bootdey</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                        <span class="text-secondary">bootdey</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                        <span class="text-secondary">bootdey</span>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>

                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">User Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->username }}
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->first_name }} {{ $user->last_name }}
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Gender</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->gender }}
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->phone_no }}
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->address }}-{{ $user->pincode }},{{ $user->city }},{{ $user->state }},{{ $user->country }}
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn btn-info" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#editProdileModal">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row gutters-sm">
                                <div class="col-sm-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                            <small>Web Design</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Website Markup</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>One Page</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Mobile Template</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Backend API</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                            <small>Web Design</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Website Markup</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>One Page</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Mobile Template</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Backend API</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Modal -->
                            <div class="modal fade" id="editProdileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                            <button type="button" class="btn-close" id="edit_profile_close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="main-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <form id="user_profile_update_form" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <input type="hidden" class="form-control" name="id" value="{{ $user->id }}">
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">User Name</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                                                                            </div>
                                                                        </div>
                                                                            <div id="error-username" class="alert alert-danger d-none"></div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">First Name</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
                                                                            </div>
                                                                        </div>
                                                                            <div id="error-first_name" class="alert alert-danger d-none"></div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">Last Name</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
                                                                            </div>
                                                                        </div>
                                                                            <div id="error-last_name" class="alert alert-danger d-none"></div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">Gender</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <select class="form-control" name="gender">
                                                                                    <option value="Male" {{ $user->gender == 'Male' ? 'selected'  : '' }}>Male</option>
                                                                                    <option value="Female" {{ $user->gender == 'Female' ? 'selected'  : '' }}>Female</option>
                                                                                    <option value="Other" {{ $user->gender == 'Other' ? 'selected'  : '' }}>Other</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">Email</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">Phone</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <input type="text" class="form-control" name="phone_no" value="{{ $user->phone_no }}">
                                                                            </div>
                                                                        </div>
                                                                            <div id="error-phone_no" class="alert alert-danger d-none"></div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">Address</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <textarea class="form-control" name="address" cols="30" rows="3">{{ $user->address }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                            <div id="error-address" class="alert alert-danger d-none"></div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">Pincode</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <input type="text" class="form-control" name="pincode" value="{{ $user->pincode }}">
                                                                            </div>
                                                                        </div>
                                                                            <div id="error-pincode" class="alert alert-danger d-none"></div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">City</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <input type="text" class="form-control" name="city" value="{{ $user->city }}">
                                                                            </div>
                                                                        </div>
                                                                            <div id="error-city" class="alert alert-danger d-none"></div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">State</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <input type="text" class="form-control" name="state" value="{{ $user->state }}">
                                                                            </div>
                                                                        </div>
                                                                            <div id="error-state" class="alert alert-danger d-none"></div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">Country</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <input type="text" class="form-control" name="country" value="{{ $user->country }}">
                                                                            </div>
                                                                        </div>
                                                                            <div id="error-country" class="alert alert-danger d-none"></div>

                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">Profile</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <input type="file" class="form-control" name="profile_pic">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-3"></div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                <button type="button" data-url="{{ route('user.profile_update') }}" class="btn btn-primary px-4" id="update_profile">Save Changes</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
