<div class="period-card">
    <input type="hidden" name="service_time_id" value="{{$serviceTimeId}}">
    <h2 class="card-title period-active">Morning</h2>
    @foreach($slotList as $key=>$timeList)
        @if($timeList->end_seconds<41400)

            @if(in_array($timeList->id,$bookedAppointment)==1)
                <label for="" class="book-time">
                    <sapn>{{$timeList->start_time}}</sapn>
                    -
                    <sapn>{{$timeList->end_time}}</sapn>
                    <span class="book-txt">BOOKED</span>

                </label>
            @else
                <div>
                    <input type="radio" checked id="afternoon-{{$key}}" value="{{$timeList->id}}" name="period"/>
                    <label for="afternoon-{{$key}}">
                        <sapn>{{$timeList->start_time}}</sapn>
                        -
                        <sapn>{{$timeList->end_time}}</sapn>
                    </label>
                </div>
            @endif

        @endif
    @endforeach
</div>
<div class="period-card">
    <h2 class="card-title">Afternoon</h2>
    @foreach($slotList as $key=>$timeList)
        @if($timeList->start_seconds>=42300&&$timeList->start_seconds<=64800)
            @if(in_array($timeList->id,$bookedAppointment)==1)
                <label for="" class="book-time">
                    <sapn>{{$timeList->start_time}}</sapn>
                    -
                    <sapn>{{$timeList->end_time}}</sapn>
                    <span class="book-txt">BOOKED</span>

                </label>
                @else
                <div>
                    <input type="radio" checked id="afternoon-{{$key}}" value="{{$timeList->id}}" name="period"/>
                    <label for="afternoon-{{$key}}">
                        <sapn>{{$timeList->start_time}}</sapn>
                        -
                        <sapn>{{$timeList->end_time}}</sapn>
                    </label>
                </div>
            @endif


        @endif
    @endforeach
</div>
<div class="period-card">
    <h2 class="card-title">Evening</h2>
    @foreach($slotList as $key=>$timeList)
        @if($timeList->start_seconds>=64800&&$timeList->start_seconds<=75600)
            @if(in_array($timeList->id,$bookedAppointment)==1)
                <label for="" class="book-time">
                    <sapn>{{$timeList->start_time}}</sapn>
                    -
                    <sapn>{{$timeList->end_time}}</sapn>
                    <span class="book-txt">BOOKED</span>

                </label>
            @else
                <div>
                    <input type="radio" checked id="afternoon-{{$key}}" value="{{$timeList->id}}" name="period"/>
                    <label for="afternoon-{{$key}}">
                        <sapn>{{$timeList->start_time}}</sapn>
                        -
                        <sapn>{{$timeList->end_time}}</sapn>
                    </label>
                </div>
            @endif

        @endif
    @endforeach
</div>
