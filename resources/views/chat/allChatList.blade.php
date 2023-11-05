@extends('frontend.layout.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/chat.css"/>
@endsection
@section('main_content')

    <div class="page-chat">
        <div class="container">
            <div class="content-chat mt-20">
                <div class="content-chat-user">
                    <div class="head-search-chat">
                        <h4 class="text-center">Designer Muse</h4>
                    </div>

{{--                    <div class="search-user mt-30">--}}
{{--                        <input--}}
{{--                                id="search-input"--}}
{{--                                type="text"--}}
{{--                                placeholder="Search..."--}}
{{--                                name="search"--}}
{{--                                class="search"--}}
{{--                        />--}}
{{--                        <span>--}}
{{--                                <i class="fa-solid fa-magnifying-glass"></i>--}}
{{--                            </span>--}}
{{--                    </div>--}}
                    <?php $userType = \Illuminate\Support\Facades\Auth::user()?'generalUser':'designer' ?>

                    <div class="list-search-user-chat mt-20" id="meetingList">
                        {{--@foreach($meetingList as $meeting)--}}
                            {{--<a href="{{route('all.chat.list',['meeting_id'=>$meeting->id])}}"--}}
                               {{--class="user-chat {{$meeting->id==$meetingId?'active':''}}" data-username="Maria Dennis">--}}
                                {{--<div class="user-chat-img">--}}
                                    {{--@if($userType=='generalUser')--}}
                                        {{--@if($meeting->clientUnseenMessage->count()>0)--}}
                                            {{--<span class="unseen-count">{{$meeting->clientUnseenMessage->count()}}</span>--}}
                                        {{--@endif--}}
                                    {{--@else--}}
                                        {{--@if($meeting->designerUnseenMessage->count()>0)--}}
                                            {{--<span class="unseen-count">{{$meeting->designerUnseenMessage->count()}}</span>--}}
                                        {{--@endif--}}
                                    {{--@endif--}}
                                    {{--<img--}}
                                            {{--src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"--}}
                                            {{--alt=""--}}
                                    {{--/>--}}
                                    {{--<div class="offline"></div>--}}
                                {{--</div>--}}

                                {{--<div class="user-chat-text">--}}


                                    {{--<p class="mt-0 mb-0">--}}
                                        {{--<strong>ID:{{$meeting->id_no}}</strong>--}}
                                    {{--</p>--}}
                                    {{--@if(!$is_sender_client)--}}
                                        {{--<small>{{$meeting->client->name}}</small>--}}
                                    {{--@else--}}
                                        {{--<small>{{$meeting->designer->name}} </small>--}}
                                    {{--@endif--}}

                                {{--</div>--}}
                            {{--</a>--}}
                        {{--@endforeach--}}


                    </div>
                </div>
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
                            <p class="mt-0 mb-0 text-white mt-3">
                                <strong>{{$designerName}}</strong>
                                &nbsp; <strong>ID-{{$meetingNo}}</strong>
                            </p>
{{--                            <small class="text-white"--}}
{{--                            ><p class="offline mt-0 mb-0"></p>--}}
{{--                                Offline--}}
{{--                            </small--}}
{{--                            >--}}
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

@endsection
@section('js_plugins')
    {{--<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>--}}

    {{--    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js"--}}
    {{--            integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+"--}}
    {{--            crossorigin="anonymous"></script>--}}
@endsection
@section('js')

    <script>
        // var socket;
        $(function () {
            // let ip_address = 'https://chat-whjg.onrender.com';
            // socket = io(ip_address, { transports: ['websocket'] });

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
                            @if($meetingId)
                    var info = {
                            is_sender_client: {{$is_sender_client}},
                            customer_id: {{$userId?$userId:0}},
                            seller_id: {{$designerId?$designerId:0}},
                            meeting_id: {{$meetingId?$meetingId:0}},
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
                    @else
                    alert('First Select a meeting')
                    @endif

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

        getUserList()

    </script>
@endsection
