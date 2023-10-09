@extends('designer.layout.layout')
@section('main_content')
    <?php
    function itemType($activeSlot,$bookedSlot,$id){
        $active_sloat=json_decode($activeSlot);
        $booked_slot=json_decode($bookedSlot);
        $type=0;
        if($result = in_array($id,$active_sloat)){
            $type=1; /* checked item */
            if($result = in_array($id,$booked_slot)){
                $type=2; /* booked item */
            }
        }
        return $type;
    }
    ?>
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table schedule-list-edit">
        <div class="projects-container container">

            <form action="{{route('designer.selected.slot.update')}}" method="post">
                @csrf
                <div class="row mb-4">
                    <input type="hidden" name="time_duration" value="{{$activeTimeRange}}">
                    <input type="hidden" name="schedule_slot_id" value="{{$scheduleDetail->id}}">

                    <div class="col-sm-3">
                      Date :  {{$scheduleDetail->date}}
                    </div>

                </div>
                <div class="row slot-bg-color" id="timeSlot">
                    @foreach($slotList as $slot)
                        <?php $type=itemType($activeSlot,$bookedSlot,$slot->id) ?>
                        <div class="col-sm-2" style="display: {{$type==2?'none':''}}">
                            <div class="form-check">
                                <input class="form-check-input" name="selected_slot[]" type="checkbox" {{$type>0?'checked':''}} value="{{$slot->id}}" id="flexCheckDefault{{$slot->id}}" >
                                <label class="form-check-label" for="flexCheckDefault{{$slot->id}}" checked="false">
                                    <span>{{$slot->start_time}}</span>-<span>{{$slot->end_time}}</span>
                                </label>
                            </div>
                        </div>

                    @if($type==2)
                        <div class="col-sm-2">
                            <div class="form-check booked-item-style">
                                <label class="form-check-label" for="flexC" checked="false">
                                    <span>{{$slot->start_time}}</span>-<span>{{$slot->end_time}}</span>
                                    <span style="color:white">Booked</span>
                                </label>
                            </div>


                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-success w-25">Update</button>
                </div>
            </form>

        </div>


        </div>
    </section>


@endsection
@section('js_plugins')
@endsection
@section('js')
    <script>
        {{--getSlot({{$activeTimeRange}});--}}
        {{--function getSlot(timeRange) {--}}
        {{--    $duration =timeRange;--}}
        {{--    $.ajax({--}}
        {{--        url: "{{route('time.schedule.slot.get')}}",--}}
        {{--        type: "get",--}}
        {{--        data: {--}}
        {{--            duration: $duration,--}}
        {{--        },--}}
        {{--        success: function (response) {--}}
        {{--            $('#timeSlot').html(response)--}}
        {{--            // console.log(response);--}}
        {{--        },--}}
        {{--        error: function (xhr) {--}}
        {{--            //Do Something to handle error--}}
        {{--        }--}}
        {{--    });--}}
        {{--}--}}
    </script>
@endsection


