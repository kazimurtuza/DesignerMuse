<!-- jQuery -->
<script src="{{asset('assets/adminPanel')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/adminPanel')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/adminPanel')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('assets/adminPanel')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('assets/adminPanel')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('assets/adminPanel')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('assets/adminPanel')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/adminPanel')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/adminPanel')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('assets/adminPanel')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/adminPanel')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('assets/adminPanel')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/adminPanel')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/adminPanel')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/adminPanel')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/adminPanel')}}/dist/js/pages/dashboard.js"></script>
<script src="{{asset('assets/adminPanel')}}/plugins/toastr/toastr.min.js"></script>
<script src="https://kit.fontawesome.com/29ad4efa11.js" crossorigin="anonymous"></script>

<script>
    @if (Session::has('success'))
    toastr.success($('#successmsg').val())
    @endif

    @if (Session::has('error'))
    toastr.error($('#errormsg').val())
    @endif
</script>

@yield('js_plugins')
@yield('js')
