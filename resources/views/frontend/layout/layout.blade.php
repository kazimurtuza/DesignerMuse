<!doctype html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Mar 2023 08:45:44 GMT -->
@include('frontend.partials._head')
<body>
<!--wrapper-->
<div class="wrapper">
    <!--start header -->
    @include('frontend.partials._header')

    <!--end header -->
    <!--start page wrapper -->
    <input type="hidden" id="successmsg" value="{{Session::get('success')}}">
    <input type="hidden" id="errormsg" value="{{Session::get('error')}}">
    <div class="page-wrapper">
        @yield('main_content')
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button-->

    @include('frontend.partials._footer')
</div>
@include('frontend.partials._scripts')
</body>

</html>
