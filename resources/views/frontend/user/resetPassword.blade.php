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
    <title>New Password</title>

    <style>
        .success-mail{
            color: #05d505;
            background: #68ffe433;
            font-size: 16px;
            padding: 18px 99px
        }

        .error-mail{
            color: #d52405;
            background: #ff687c33;
            font-size: 16px;
            padding: 18px 99px;
        }

    </style>
</head>
<body>
<!-- Sign Up -->
<section class="sign-up-area forget-pass">
    <div class="container-alt set-bg spacing">
        <div class="brand-logo">
            <a href="/"><img src="{{asset('assets/frontend')}}/img/logo.png" alt="logo" /></a>
        </div>
        <div class="password-text">
            <p>New Password</p>
        </div>
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li class="success-mail">{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('error'))
            <div class="alert alert-success">
                <ul>
                    <li class="error-mail">{!! \Session::get('error') !!}</li>
                </ul>
            </div>
        @endif
        <form action="{{route('frontend.update.user.password')}}" method="post">
            @csrf
            <input type="hidden" name="type" value="{{$userType}}" />
            <input type="hidden" name="id" value="{{$userId}}" />
            <input type="text" name="password" minlength="6" placeholder="Enter New Password" />
            <input type="text" name="confirm_password" minlength="6" placeholder="Confirm New Password" />
            <input type="submit" value="Save" />
        </form>
    </div>
</section>
</body>
</html>
