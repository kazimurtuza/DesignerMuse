<?php $userType = \Illuminate\Support\Facades\Auth::user()?'generalUser':'designer' ?>
@foreach($meetingList as $meeting)
    <a href="{{route('all.chat.list',['meeting_id'=>$meeting->id])}}"
       class="user-chat {{$meeting->id==$meetingId?'active':''}}" data-username="Maria Dennis">
        <div class="user-chat-img">
            @if($userType=='generalUser')
                @if($meeting->clientUnseenMessage->count()>0)
                    <span class="unseen-count">{{$meeting->clientUnseenMessage->count()}}</span>
                @endif
            @else
                @if($meeting->designerUnseenMessage->count()>0)
                    <span class="unseen-count">{{$meeting->designerUnseenMessage->count()}}</span>
                @endif
            @endif
            <img
                    src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt=""
            />
            {{--                                    <div class="offline"></div>--}}
        </div>

        <div class="user-chat-text">


            <p class="mt-0 mb-0">
                <strong>ID:{{$meeting->id_no}}</strong>
            </p>
            @if(!$is_sender_client)
                <small>{{$meeting->client->name}}</small>
            @else
                <small>{{$meeting->designer->name}} </small>
            @endif

        </div>
    </a>
@endforeach

