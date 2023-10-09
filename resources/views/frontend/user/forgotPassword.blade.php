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
    <title>Forget Password</title>

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
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 17.53">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #e28c71;
                            }
                        </style>
                    </defs>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <path
                                class="cls-1"
                                d="M10.46,7.88c.3-.41.75-1,.91-1.29A4.3,4.3,0,0,0,10.27,1L10,.79A4.61,4.61,0,0,0,6.73,0a4.68,4.68,0,0,0-3,1.6C3.54,2,2.81,3,2.64,3.28l1.59,1,.11-.15a5.5,5.5,0,0,1,1.85-2,2.7,2.7,0,0,1,2.56.11l.08.05A2.43,2.43,0,0,1,10,4.56,4.28,4.28,0,0,1,9,6.72,6.1,6.1,0,0,0,6,6a5.9,5.9,0,0,0-6,5.78,5.9,5.9,0,0,0,6,5.78,5.9,5.9,0,0,0,6-5.78A5.67,5.67,0,0,0,10.46,7.88ZM6.1,13.59a1.27,1.27,0,0,1-1.28-1.27,1.31,1.31,0,0,1,.54-1.05.89.89,0,0,1-.16-.52.9.9,0,1,1,1.63.52,1.28,1.28,0,0,1-.73,2.32Z"
                            />
                        </g>
                    </g>
                </svg>
            </div>
            <p>Forget Password</p>
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
        <form action="{{route('frontend.reset.password.mail.send')}}" method="get">
            <div class="input">
                <label for="email">Select Type</label>
            <select class="select-style" name="user_type" id="" required>
                <option value="">Select User Type</option>
                <option value="1">General User</option>
                <option value="2">Designer</option>
                <option value="2">Interior Design Company</option>
                <option value="3">Shop Keeper</option>
            </select>
            </div>
            <div class="input">
                <label for="email">Enter your email</label>
                <input type="email" name="email" placeholder="Email" id="email" required />
            </div>
            <input type="submit" value="Send Code" />
        </form>
    </div>
</section>
</body>
</html>
