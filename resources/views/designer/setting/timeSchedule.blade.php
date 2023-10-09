@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->


    <!-- Projects Table -->
    <section class="projects-table time-schedule-settings">
        <div class="projects-container container">

            <form action="{{route('designer.selected.slot.store')}}" method="post">
                @csrf
                <div class="row">
                    <input type="hidden" name="time_duration" value="{{$activeTimeRange}}">
{{--                    <div class="col-sm-4">--}}
{{--                        <div class="input-group mb-3">--}}
{{--                            <div class="input-group-prepend">--}}
{{--                                <span class="input-group-text" id="basic-addon3">Schedule Duration</span>--}}
{{--                            </div>--}}
{{--                            <select name="time_duration" id="" {{}} class="form-control"--}}
{{--                                    id="basic-url" required>--}}
{{--                                <option value="">SELECT</option>--}}
{{--                                <option value="15">15 Minutes</option>--}}
{{--                                <option value="30">30 Minutes</option>--}}
{{--                                <option value="60">60 Minutes</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-sm-3">
                        <div class=" mb-3">
                        <label>Start Date</label>
                        <input type="date" class="form-control" name="start_date" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class=" mb-3">
                            <label>End Date</label>
                            <input type="date" class="form-control" name="end_date" required>
                        </div>
                    </div>
                </div>
                <div class="row slot-bg-color" id="timeSlot">
                    <h5 class="text-center"> Schedule Duration Lint</h5>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-success w-25">Save</button>
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
        getSlot({{$activeTimeRange}});
        function getSlot(timeRange) {
            $duration =timeRange;
            $.ajax({
                url: "{{route('time.schedule.slot.get')}}",
                type: "get",
                data: {
                    duration: $duration,
                },
                success: function (response) {
                    $('#timeSlot').html(response)
                    // console.log(response);
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }
    </script>
@endsection


