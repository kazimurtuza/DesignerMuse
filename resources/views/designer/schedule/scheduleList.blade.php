@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table schedule-list">
        <div class="projects-container container">
            <div class="d-flex justify-content-end"><a href="{{route('time.schedule.setting')}}" class="btn btn-success"> {{languageGet()=='en'?'Add Schedule':'إضافة الجدول الزمني'}}</a></div>
            <h2 class="title">Schedule List</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th class="text-center">  {{languageGet()=='en'?'SI':'مسلسل'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Date':'تاريخ'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Total Booked':'إجمالي الحجز'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Available schedule':'الجدول الزمني المتاح'}}</th>
                        <th class="end"> {{languageGet()=='en'?'Action':'خيار'}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($scheduleList as $key=>$schedule)
                        <?php $totalBook=$schedule->bookedList?$schedule->bookedList->count() :'0' ?>
                        <tr style="background: {{$totalBook>0?'#e28c7159':''}}">
                            <td class="text-center">{{$key+1}}</td>
                            <td class="text-center">{{$schedule->date}}</td>
                            <td class="text-center">{{$totalBook}}
                            <td class="text-center">{{ count( json_decode($schedule->active_slot_id) )-$totalBook }}

                            </td>

                            <td class="end action-btn">
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{languageGet()=='en'?'Option':'خيار'}}
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a  class="dropdown-item" href="{{route('time.schedule.edit',['service_time_id'=>$schedule->id])}}">{{languageGet()=='en'?'Edit':'للتحديث'}}</a></li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

           {{$scheduleList->links()}}
        </div>
    </section>



@endsection
@section('js_plugins')
@endsection
@section('js')
    <script>
        function setprojectId(id){
            $('#projectId').val(id);
        }
    </script>
@endsection


