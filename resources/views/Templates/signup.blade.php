<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TOORS.COM - Tours And Travels</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="{{ asset('assets/Users/img/Toors.png') }}" rel="icon">
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
        <link href="{{ asset('assets/login-signup.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                    <div class="panel border bg-white">
                        <div class="panel-heading">
                            <h3 class="pt-3 font-weight-bold">Signup</h3>
                        </div>
                        <div class="panel-body p-3">
                            <form action="{{ route('users.signup') }}" method="POST">
                                @csrf
                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <input type="text" class="@error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}"/>
                                    </div>
                                </div>
                                @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <input type="text" class="@error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="First Name" value="{{ old('first_name') }}"/>
                                    </div>
                                </div>
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <input type="text" class="@error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="Last Name" value="{{ old('last_name') }}"/>
                                    </div>
                                </div>
                                @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}"/>
                                    </div>
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <select name="gender" id="gender" required>
                                            <option selected disabled>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <textarea name="address" class="@error('address') is-invalid @enderror" id="address" cols="30" rows="3" placeholder="Address">{{ old('address') }}</textarea>
                                    </div>
                                </div>
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <input type="text" class="@error('pincode') is-invalid @enderror" name="pincode" id="pincode" placeholder="PinCode" value="{{ old('pincode') }}">
                                    </div>
                                </div>
                                @error('pincode')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <input type="text" class="@error('city') is-invalid @enderror" name="city" id="city" placeholder="City" value="{{ old('city') }}">
                                    </div>
                                </div>
                                @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <input type="text" class="@error('state') is-invalid @enderror" name="state" id="state" placeholder="State" value="{{ old('state') }}">
                                    </div>
                                </div>
                                @error('state')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <input type="text" class="@error('country') is-invalid @enderror" name="country" id="country" placeholder="Country" value="{{ old('country') }}">
                                    </div>
                                </div>
                                @error('country')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group py-1 pb-2">
                                    <div class="input-field">
                                        <input type="password" class="@error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" />
                                        <button class="btn bg-white text-muted">
                                            <span class="far fa-eye-slash"></span>
                                        </button>
                                    </div>
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-inline"> <input type="checkbox" name="remember" id="remember"> <label for="remember" class="text-muted">Remember me</label> <a href="#" id="forgot" class="font-weight-bold">Forgot password?</a> </div>
                                <button class="btn btn-primary btn-block mt-3" type="submit">Sign Up</button>
                                <div class="text-center pt-4 text-muted">Have an account? <a href="{{ route('login') }}">Login</a> </div>
                            </form>
                        </div>
                        <div class="mx-3 my-2 py-2 bordert">
                            <div class="text-center py-3"> <a href="https://wwww.facebook.com" target="_blank" class="px-2"> <img src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg" alt=""> </a> <a href="https://www.google.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt=""> </a> <a href="https://www.github.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" alt=""> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
        <script src="{{ asset('assets/login-signup.js') }}"></script>
    </body>
</html>
