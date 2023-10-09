<script src="{{asset('assets/frontend')}}/js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset('assets/frontend')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/slick.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/index.js"></script>
<script src="{{asset('assets/adminPanel')}}/plugins/toastr/toastr.min.js"></script>
<script src="https://kit.fontawesome.com/29ad4efa11.js" crossorigin="anonymous"></script>


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



<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script>
    var firebaseConfig = {
        apiKey: "AIzaSyBqU_lOmKGScd5v7PjMmtLuQlN7i2DpLsM",
        authDomain: "designer-muse.firebaseapp.com",
        projectId: "designer-muse",
        storageBucket: "designer-muse.appspot.com",
        messagingSenderId: "789382647348",
        appId: "1:789382647348:web:a67a47be57a37dc0648461",
        measurementId: "G-02Y8JCVDCQ"
    };
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
    function startFCM() {
        messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function (response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route("store.token") }}',
                    type: 'POST',
                    data: {
                        token: response
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        alert(response);
                        // alert('Token stored.');
                    },
                    error: function (error) {
                        alert(error);
                    },
                });
            }).catch(function (error) {
            alert(error);
        });
    }
    messaging.onMessage(function (payload) {
      console.log(payload.data)
        const title = payload.notification.title;
        const options = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(title, options);
    });
</script>

@yield('js_plugins')
@yield('js')
