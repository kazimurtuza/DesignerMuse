<!DOCTYPE html>
<html lang="en">
@include('admin.partials._head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
{{--    <div class="preloader flex-column justify-content-center align-items-center">--}}
{{--        <img class="animation__shake" src="{{asset('assets/adminPanel')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo"--}}
{{--             height="60" width="60">--}}
{{--    </div>--}}
    <!-- Navbar -->
    @include('admin.partials._header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
{{--        <a href="index3.html" class="brand-link">--}}
{{--            <img src="{{asset('assets/adminPanel')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
{{--            <span class="brand-text font-weight-light">Admin Panel</span>--}}
{{--        </a>--}}

        @include('admin.partials._sidebar')

    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Content Header (Page header) -->
        {{--        <div class="content-header">--}}
        {{--            <div class="container-fluid">--}}
        {{--                <div class="row mb-2">--}}
        {{--                    <div class="col-sm-6">--}}
        {{--                        <h1 class="m-0">Dashboard</h1>--}}
        {{--                    </div><!-- /.col -->--}}
        {{--                    <div class="col-sm-6">--}}
        {{--                        <ol class="breadcrumb float-sm-right">--}}
        {{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
        {{--                            <li class="breadcrumb-item active">Dashboard v1</li>--}}
        {{--                        </ol>--}}
        {{--                    </div><!-- /.col -->--}}
        {{--                </div><!-- /.row -->--}}
        {{--            </div><!-- /.container-fluid -->--}}
        {{--        </div>--}}
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <input type="hidden" id="successmsg" value="{{Session::get('success')}}">
            <input type="hidden" id="errormsg" value="{{Session::get('error')}}">


            <div class="container-fluid">

                @yield('main_content')

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.partials._footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.partials._scripts')
</body>
</html>










