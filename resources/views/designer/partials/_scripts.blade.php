<script src="{{asset('assets/frontend')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/slick.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/index.js"></script>
<script src="{{asset('assets/adminPanel')}}/plugins/toastr/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}

<script>
    @if (Session::has('success'))
    toastr.success($('#successmsg').val())
    @endif

    @if (Session::has('error'))
    toastr.error($('#errormsg').val())
    @endif

    // swal("My title", "My description", "success");

</script>

@yield('js_plugins')
@yield('js')
