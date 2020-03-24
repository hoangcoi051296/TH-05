
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Space Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="{{asset("css/login_style.css")}}" rel="stylesheet" type="text/css" media="all" />
    <!-- css files -->

    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- //Online-fonts -->

</head>
<body>
<!-- main -->
<div class="main">
    <div class="main-w3l">
        <h1 class="logo-w3">Login</h1>
        <div class="w3layouts-main">
            <h2><span>Login now</span></h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert"style="color: white">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert"style="color: white">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember" style="color: white">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <h6>  <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a></h6>
                        @endif
            </form>
        </div>
        <div class="footer-w3l">
            <p>&copy; 2020 Space Login Form. All rights reserved </p>
        </div>

    </div>
</div>

</body>
</html>

