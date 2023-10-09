<!DOCTYPE html>
<html lang="en">
@include('shopkeeper.partials._head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('assets/adminPanel')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <!-- Navbar -->
    @include('shopkeeper.partials._header')
    <!-- /.navbar -->
    @include('shopkeeper.partials._sidebar')

    <div class="content-wrapper">
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
    @include('shopkeeper.partials._footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('shopkeeper.partials._scripts')
</body>
</html>










