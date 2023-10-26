<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic"
        rel="stylesheet"
        type="text/css"
    />
    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/bootstrap.grid.css" />
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/style.css" />
    <title>Log In</title>
</head>
<body>
<!-- Log In -->
<section class="log-in-area">
    <div class="container-alt set-bg">
        <div class="brand-logo">
            <a href="/"><img src="{{asset('assets/frontend')}}/img/logo.png" alt="logo" /></a>
        </div>
        <div class="login-text">
            <h2 class="wlcm-text">Welcome Back</h2>
            <h3 class="login-title">Log In Now</h3>
            <p>Please login to continue using our app </p>
        </div>


        <form action="{{route('admin.user.login')}}" method="post" style="margin-top: -39px;">
            @if(Session::has('error'))
                <h4 class="loginerror">{{ Session::get('error')}}</h4>
            @endif
            @csrf
            <select class="select-style" name="user_type" id="" required>
                <option value="">Select User Type</option>
                <option value="general_user">General User</option>
                <option value="designer">Designer</option>
                <option value="shopkeeper">Shop</option>
            </select>
            <input type="email" name="email" placeholder="Email" value="{{old('email')}}" />
            <input type="password" name="password" placeholder="Password" value="{{old('password')}}" />
            <input type="hidden" name="device_token" value="1"  id="dvtoken" />
            <div class="forgot-link">
                <a href="{{route('frontend.user.forgot.pass')}}">Forgot Password</a>
            </div>
            <input type="submit" value="Log In" />
        </form>
        <div class="login-text">
            <p class="sign-up-text">
                Don't have an account? <a href="{{route('frontend.user.registration')}}">Sign Up</a>
            </p>
        </div>
    </div>
</section>

<script src="{{asset('assets/frontend')}}/js/jquery-3.3.1.min.js"></script>

</body>
</html>
