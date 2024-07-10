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
        {{-- <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
        <link href="{{ asset('assets/login-signup.css') }}" rel="stylesheet">
    </head>
    <body class="login_body" onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="noBack();">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                    @include('Templates.alerts')
                    <div class="panel border bg-white">
                        <div class="panel-heading">
                            <h3 class="pt-3 font-weight-bold">Login</h3>
                        </div>
                        <div class="panel-body p-3">
                            <form action="{{ route('users.login') }}" method="POST">
                                @csrf
                                <div class="form-group py-2">
                                    <div class="input-field">
                                        <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" {{ old('email') }}/>
                                    </div>
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group py-1 pb-2">
                                    <div class="input-field">
                                        <input type="password" class="@error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" />
                                        <button type="button" class="btn bg-white text-muted" id="view_pass">
                                            <span class="far fa-eye-slash" id="pass_eyes"></span>
                                        </button>
                                    </div>
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-inline"> <input type="checkbox" name="remember" id="remember"> <label for="remember" class="text-muted">Remember me</label> <a href="#" id="forgot" class="font-weight-bold">Forgot password?</a> </div>
                                <button class="btn btn-primary btn-block mt-3" type="submit">Login</button>
                                <div class="text-center pt-4 text-muted">Don't have an account? <a href="{{ route('signup') }}">Sign up</a> </div>
                            </form>
                        </div>
                        <div class="mx-3 my-2 py-2 bordert">
                            <div class="text-center py-3"> <a href="https://wwww.facebook.com" target="_blank" class="px-2"> <img src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg" alt=""> </a> <a href="https://www.google.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt=""> </a> <a href="https://www.github.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" alt=""> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="{{ route('signup') }}" method="POST">
                    @csrf
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span>

                    <input type="text" class="@error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" {{ old('username') }}/>
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" class="@error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="First Name" {{ old('first_name') }}/>
                    @error('first_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" class="@error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="Last Name" {{ old('last_name') }}/>
                    @error('last_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" {{ old('email') }}/>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <select name="gender" id="gender" required {{ old('gender') }}>
                        <option selected disabled>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>

                    <input type="password" class="@error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" />
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <footer>
            <p>
                Created with <i class="fa fa-heart"></i> by
                <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
                - Read how I created this and how you can join the challenge
                <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
            </p>
        </footer> --}}
        <script src="{{ asset('assets/login-signup.js') }}"></script>
    </body>
</html>
