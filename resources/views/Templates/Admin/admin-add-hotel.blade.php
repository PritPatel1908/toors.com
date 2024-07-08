@extends('Templates.Admin.admin-base')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Hotels / Add Hotel</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add Hotel Detail's</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3 needs-validation" id="add_hotel_form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <label for="hotel_name" class="form-label">Hotel name</label>
                                    <input type="text" class="form-control @error('hotel_name') is-invalid @enderror" id="hotel_name" name="hotel_name" value="{{ old('hotel_name') }}" >
                                </div>
                                @error('hotel_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-12">
                                    <label for="hotel_descriptions" class="form-label">Hotel Description</label>
                                    <textarea class="form-control @error('hotel_descriptions') is-invalid @enderror" id="hotel_descriptions" name="hotel_descriptions" cols="30" rows="5">{{ old('hotel_descriptions') }}</textarea>
                                </div>
                                @error('hotel_descriptions')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-4">
                                    <label for="hotel_nightly_price" class="form-label">Hotel Nightly Price</label>
                                    <input type="number" class="form-control @error('hotel_nightly_price') is-invalid @enderror" id="hotel_nightly_price" name="hotel_nightly_price" value="{{ old('hotel_nightly_price') }}" >
                                </div>
                                @error('hotel_nightly_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-4">
                                    <label for="hotel_weekly_price" class="form-label">Hotel Weekly Price</label>
                                    <input type="number" class="form-control @error('hotel_weekly_price') is-invalid @enderror" id="hotel_weekly_price" name="hotel_weekly_price" value="{{ old('hotel_weekly_price') }}" >
                                </div>
                                @error('hotel_weekly_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-4">
                                    <label for="hotel_monthly_price" class="form-label">Hotel Monthly Price</label>
                                    <input type="number" class="form-control @error('hotel_monthly_price') is-invalid @enderror" id="hotel_monthly_price" name="hotel_monthly_price" value="{{ old('hotel_monthly_price') }}" >
                                </div>
                                @error('hotel_monthly_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-4">
                                    <label for="hotel_weekends_price" class="form-label">Hotel Weekends Price</label>
                                    <input type="number" class="form-control @error('hotel_weekends_price') is-invalid @enderror" id="hotel_weekends_price" name="hotel_weekends_price" value="{{ old('hotel_weekends_price') }}" >
                                </div>
                                @error('hotel_weekends_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-4">
                                    <label for="hotel_additional_guest_price" class="form-label">Hotel Additional Guest Price</label>
                                    <input type="number" class="form-control @error('hotel_additional_guest_price') is-invalid @enderror" id="hotel_additional_guest_price" name="hotel_additional_guest_price" value="{{ old('hotel_additional_guest_price') }}" >
                                </div>
                                @error('hotel_additional_guest_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-4">
                                    <label for="hotel_security_deposit_price" class="form-label">Hotel Security Deposit Price</label>
                                    <input type="number" class="form-control @error('hotel_security_deposit_price') is-invalid @enderror" id="hotel_security_deposit_price" name="hotel_security_deposit_price" value="{{ old('hotel_security_deposit_price') }}" >
                                </div>
                                @error('hotel_security_deposit_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-12">
                                    <label for="hotel_location" class="form-label">Hotel Location</label>
                                    <input type="text" class="form-control @error('hotel_location') is-invalid @enderror" id="hotel_location" name="hotel_location" value="{{ old('hotel_location') }}" >
                                </div>
                                @error('hotel_location')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-6">
                                    <label for="hotel_contact_number" class="form-label">Hotel Contact Number</label>
                                    <input type="number" class="form-control @error('hotel_contact_number') is-invalid @enderror" id="hotel_contact_number" name="hotel_contact_number" value="{{ old('hotel_contact_number') }}" >
                                </div>
                                @error('hotel_contact_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-6">
                                    <label for="hotel_email" class="form-label">Hotel Email</label>
                                    <input type="email" class="form-control @error('hotel_email') is-invalid @enderror" id="hotel_email" name="hotel_email" value="{{ old('hotel_email') }}" >
                                </div>
                                @error('hotel_email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_bed_service') is-invalid @enderror" id="hotel_bed_service" name="hotel_bed_service" value="{{ old('hotel_bed_service') }}">&nbsp; Hotel Bed Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_bed_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_bath_service') is-invalid @enderror" id="hotel_bath_service" name="hotel_bath_service" value="{{ old('hotel_bath_service') }}">&nbsp; Hotel Bath Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_bath_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_wifi_service') is-invalid @enderror" id="hotel_wifi_service" name="hotel_wifi_service" value="{{ old('hotel_wifi_service') }}">&nbsp; Hotel Wifi Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_wifi_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_tv_service') is-invalid @enderror" id="hotel_tv_service" name="hotel_tv_service" value="{{ old('hotel_tv_service') }}">&nbsp; Hotel Tv Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_tv_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_ac_service') is-invalid @enderror" id="hotel_ac_service" name="hotel_ac_service" value="{{ old('hotel_ac_service') }}">&nbsp; Hotel Ac Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_ac_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_laundry_service') is-invalid @enderror" id="hotel_laundry_service" name="hotel_laundry_service" value="{{ old('hotel_laundry_service') }}">&nbsp; Hotel Laundry Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_laundry_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_food_service') is-invalid @enderror" id="hotel_food_service" name="hotel_food_service" value="{{ old('hotel_food_service') }}">&nbsp; Hotel Food Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_food_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_doctor_service') is-invalid @enderror" id="hotel_doctor_service" name="hotel_doctor_service" value="{{ old('hotel_doctor_service') }}">&nbsp; Hotel Doctor Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_doctor_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_room_service') is-invalid @enderror" id="hotel_room_service" name="hotel_room_service" value="{{ old('hotel_room_service') }}">&nbsp; Hotel Room Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_room_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_gym_service') is-invalid @enderror" id="hotel_gym_service" name="hotel_gym_service" value="{{ old('hotel_gym_service') }}">&nbsp; Hotel Gym Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_gym_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-3">
                                    <div class="mb-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="@error('hotel_swimmining_pool_service') is-invalid @enderror" id="hotel_swimmining_pool_service" name="hotel_swimmining_pool_service" value="{{ old('hotel_swimmining_pool_service') }}">&nbsp; Hotel Swimmining Pool Service
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('hotel_swimmining_pool_service')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-4">
                                    <label for="child_allow" class="form-label">Child Allow</label>
                                    <input type="number" class="form-control @error('child_allow') is-invalid @enderror" id="child_allow" name="child_allow" value="{{ old('child_allow') }}" >
                                </div>
                                @error('child_allow')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-4">
                                    <label for="adult_allow" class="form-label">Adult Allow</label>
                                    <input type="number" class="form-control @error('adult_allow') is-invalid @enderror" id="adult_allow" name="adult_allow" value="{{ old('adult_allow') }}" >
                                </div>
                                @error('adult_allow')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-4">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select class="form-select" id="category_id">
                                        <option selected disabled value="">Select Category</option>
                                        <option value="1">Select Category</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <dic class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="hotel_images" class="form-label">Hotel Images</label>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <span class="btn btn-primary" id="add-more">Add more</span>
                                        </div>
                                    </dic>
                                    <input type="file" class="form-control mb-2" id="hotel_image" name="hotel_image">
                                    <div id="image-inputs"></div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="button" data-url="{{ route('user.add_hotel') }}" id="addhotel">Add Hotel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
