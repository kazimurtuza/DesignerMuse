<script src="{{asset('assets/frontend')}}/js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/frontend')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/slick.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/index.js"></script>
<script src="{{asset('assets/adminPanel')}}/plugins/toastr/toastr.min.js"></script>
<script src="https://kit.fontawesome.com/29ad4efa11.js" crossorigin="anonymous"></script>


{{--socket--}}
<script src="https://cdn.socket.io/4.6.0/socket.io.min.js"
        integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+"
        crossorigin="anonymous"></script>


<script>
    {{--socket--}}
    var socket;
    $(function () {
        let ip_address = 'https://chat-whjg.onrender.com';
        socket = io(ip_address, {transports: ['websocket']});

        @if(Auth::guard('designer')->user()||Auth::user())
        socket.on('sendChatToClient', (message) => {
            let is_client = message.is_sender_client;
            let id = is_client ? message.seller_id : message.customer_id;
            let meeting_id = message.meeting_id;
            let sound=1;
            let user_type = is_client?'designer':'generalUser';
            unseenMessage(user_type, id, 0,sound)
        });
        @endif
    });
    @if(Auth::guard('designer')->user())
    let designer_id = {{Auth::guard('designer')->user()->id}};
    let user_type = "{{Auth::guard('designer')->user()->user_type}}";
    let sound=0;
    unseenMessage(user_type,designer_id, 0,sound);
    @endif
    @if(Auth::user())
    var user_id = {{Auth::user()->id}};
    let user_type = "{{Auth::user()->user_type}}";
    let sound=0;
    unseenMessage(user_type,user_id,0,sound);
    @endif
    var soundData = document.getElementById("tune");

    function unseenMessage(user_type, id, meeting_id,sound) {
        $.ajax({
            url: "{{route('get.unseen.message')}}",
            type: "get",
            data: {
                user_type: user_type,
                id: id,
                meeting_id: meeting_id,
            },
            success: function (response) {
                console.log(response);
                $('.cat-item').html(response.totalUnseen);
                if(sound){
                    soundData.play();
                }

            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }





    {{--socket--}}



    function language() {
        $('#language').click();
    }

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
    // startFCM();

    function startFCM() {
        messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function (response) {
                // alert(response);
                console.log(response)
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
