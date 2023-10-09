@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table schedule-list">
        <div class="projects-container container">
            <div class="d-flex justify-content-end"><a href="{{route('time.schedule.setting')}}" class="btn btn-success">Add Schedule</a></div>
            <h2 class="title">Schedule List</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th class="text-center">SI</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Total Booked</th>
                        <th class="text-center">Available schedule</th>
                        <th class="end">Action</th>
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
                                        Action
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a  class="dropdown-item" href="{{route('time.schedule.edit',['service_time_id'=>$schedule->id])}}">Edit</a></li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <ul class="pagination">
                <li class="pagination-link">
                    <a href="#">
                        <svg
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="17"
                            height="17"
                            viewBox="0 0 17 17"
                        >
                            <g></g>
                            <path
                                d="M16 8.972h-12.793l6.146 6.146-0.707 0.707-7.353-7.353 7.354-7.354 0.707 0.707-6.147 6.147h12.793v1z"
                                fill="#000000"
                            />
                        </svg>
                    </a>
                </li>
                <li class="pagination-link"><a href="#" class="active">1</a></li>
                <li class="pagination-link"><a href="#">2</a></li>
                <li class="pagination-link"><a href="#">3</a></li>
                <li class="pagination-link"><a href="#">4</a></li>
                <li class="pagination-link">
                    <a href="#">
                        <svg
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="17"
                            height="17"
                            viewBox="0 0 17 17"
                        >
                            <g></g>
                            <path
                                d="M15.707 8.472l-7.354 7.354-0.707-0.707 6.146-6.146h-12.792v-1h12.793l-6.147-6.148 0.707-0.707 7.354 7.354z"
                                fill="#000000"
                            />
                        </svg>
                    </a>
                </li>
            </ul>
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


