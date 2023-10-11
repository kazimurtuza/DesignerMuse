@extends('frontend.layout.layout')
@section('main_content')
    <!-- Offcanvas -->
    <div class="mobile-offcanvas">
        <div class="mobile-offcanvas__close">&times;</div>
        <div class="mobile-offcanvas-inner">
            <div class="offcanvas-logo">
                <a href="#"><img src="img/logo.png" alt="" /></a>
            </div>
{{--            <nav class="offcanvas-nav">--}}
{{--                <ul class="offcanvas-nav-parent">--}}
{{--                    <li class="active"><a href="#">How it Work</a></li>--}}
{{--                    <li><a href="#">Freelancers</a></li>--}}
{{--                    <li><a href="#">Shop</a></li>--}}
{{--                    <li><a href="#">About</a></li>--}}
{{--                    <li><a href="#">Log in</a></li>--}}
{{--                    <li><a href="#">Sign Up</a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
        </div>
    </div>
    <!-- Offcanvas End -->

    <!-- Header -->

    <div class="page-terms">
        <div class="container p-2">
            {!!  $data['terms'] !!}
        </div>
    </div>


@endsection


