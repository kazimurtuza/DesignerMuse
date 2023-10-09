@extends('frontend.layout.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/chat.css"/>
@endsection
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section>
        <audio style="display:none" class="my_audio" controls preload="none">
            <source src="{{asset('public/sound')}}/tune.mp3" type="audio/mpeg">
        </audio>
        <div class="page-chat">
            <div class="container">
                <div class="content-chat mt-20">
                    <div
                        class="content-chat-message-user"
                        data-username="Maria Dennis"
                    >
                        <div class="head-chat-message-user">
                            <img
                                src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt=""
                            />
                            <div class="message-user-profile">
                                <p class="mt-0 mb-0 text-white">
                                    <strong>{{$designerName}}</strong>
                                    &nbsp; <strong>ID-{{$meetingNo}}</strong>
                                </p>
                                <small class="text-white"
                                ><p class="offline mt-0 mb-0"></p>
                                    Offline</small
                                >
                            </div>
                        </div>
                        <div class="body-chat-message-user" id="chatField">

                            @if($chatList)
                                @foreach($chatList as $chat)
                                    @if(!$chat->is_sender_client)
                                        <div class="message-user-left">

                                            <div class="message-user-left-text">
                                                <p>{!! $chat->message !!}</p>
                                                <div
                                                    class="time">{{ date('d-m-Y h:i:s a', strtotime($chat->created_at))}}</div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="message-user-right">
                                            <div class="message-user-right-text">
                                                <p>{!! $chat->message !!}</p>
                                                <div
                                                    class="time">{{ date('d-m-Y h:i:s a', strtotime($chat->created_at))}}</div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif

                        </div>
                        <div class="footer-chat-message-user">
                            <div class="message-user-send">
                                <input type="text" id="chatInput" placeholder="Aa"/>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{route('add.project.file')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <input type="hidden" name="project_id" id="projectId">
                    <input type="hidden" name="user_type" value="1" id="projectId">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add File</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">File</label>
                            <input type="file" class="form-control" name="project_file" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
@section('js_plugins')
    {{--    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>--}}
    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js"
            integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+"
            crossorigin="anonymous"></script>
@endsection
@section('js')
    <script>
        var socket;
        $(function () {
            // let ip_address = '127.0.0.1';
            // let socket_port = '3000';
            // let socket = io(ip_address + ':' + socket_port);
            //

            let ip_address = 'https://chat-whjg.onrender.com';
            socket = io(ip_address, { transports: ['websocket'] });

            let chatInput = $('#chatInput');

            chatInput.keypress(function (e) {
                let message = $(this).val();
                // let  tokenId=$('#activeToken').val();
                let tokenId = 1;
                if (!tokenId) {
                    alert('Select Token First');
                    return false;
                }
                // console.log(message);
                if (e.which === 13 && !e.shiftKey) {

                    {{--let client_id={{$clientId}};--}}
                    let client_id = 'sdf';

                    var info = {
                        is_sender_client: 1,
                        customer_id: {{$userId}},
                        seller_id: {{$designerId}},
                        meeting_id: {{$meetingId}},
                        message: message,
                        type: 0,
                        time: (new Date()).toLocaleString()
                    }
                    socket.emit('sendChatToServer', info);
                    chatInput.html('');

                    $.ajax({
                        url: "{{route('frontend.meeting.project.chat.store')}}",
                        type: "get",
                        data: info,
                        success: function (response) {
                            console.log(response);
                            $('#chatField').append(`<div class="message-user-right">
                                <div class="message-user-right-text">
                                    <p>${message}</p>
                                    <div class="time">${(new Date()).toLocaleString()}</div>
                                </div>
                            </div>`);
                        },
                        error: function (xhr) {
                            //Do Something to handle error
                        }
                    });
                    $(this).val('');
                    return false;
                }
            });


            socket.on('sendChatToClient', (message) => {

                let meetingId = {{$meetingId}};

                if (meetingId != message.meeting_id) {

                    return false;
                }
                $('#getTxt').html(message.message);

                let receiveMessge = $('#getData').html();

                // $('.chat-content ul').append(`<li>${message.token}</li>`);

                $(".my_audio").trigger('play');

                $('#chatField').append(`<div class="message-user-left">
                                            <div class="message-user-left-text">
                                                <p>${message.message}</p>
                                                <div class="time">${message.time}</div>
                                            </div>
                                        </div>`);
            });

        });
    </script>

    <script>
        const items = document.querySelectorAll(".accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute("aria-expanded");

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute("aria-expanded", "false");
            }

            if (itemToggle == "false") {
                this.setAttribute("aria-expanded", "true");
            }
        }

        items.forEach((item) =>
            item.addEventListener("click", toggleAccordion)
        );
    </script>
@endsection


