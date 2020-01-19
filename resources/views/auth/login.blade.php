<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('public/admin_assets/img/favicon.ico') }}">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/admin_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/admin_assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/admin_assets/css/style.css') }}">
    <!--[if lt IE 9]>
		<script src="{{ URL::asset('public/admin_assets/js/html5shiv.min.js') }}"></script>
		<script src="{{ URL::asset('public/admin_assets/js/respond.min.js') }}"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                   
                    <form method="POST" action="{{ route('login') }}"class="form-signin">
                    @csrf
                    <div class="account-logo">
                            <a href="index-2.html"><img src="public/admin_assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="email"  name= "email" autofocus="" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       
                          
                               
                          
                      
                        <div class="form-group text-right">
                        <div class="form-check text-left">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                       
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="{{ URL::asset('public/admin_assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ URL::asset('public/admin_assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin_assets/js/app.js') }}"></script>
</body>


<!-- login23:12-->
</html>