@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table">
        <div class="projects-container container">
            <h2 class="title">Meeting List</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th class="text-center">Meeting ID</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Type</th>
{{--                        <th class="text-center">Start Time</th>--}}
                        <th class="text-center">Meeting Time</th>
                        <th class="text-center">Client</th>
                        <th class="text-center">Chat</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($meetingList as $meeting)
                        <tr>
                            <td class="text-center">#{{$meeting->id_no}}</td>
                            <td class="text-center">{{ date('d-M-y',strtotime($meeting->appointment_date))}}</td>
                            <td class="text-center">{{$meeting->appointment_type}}</td>
{{--                            <td class="text-center">{{$meeting->timeInfo->start_time}}</td>--}}
                            <td class="text-center">{{$meeting->timeInfo->start_time}}-{{$meeting->timeInfo->end_time}}</td>
                            <td class="text-center">{{$meeting->client->name}}</td>
                            <td class="text-center">
                                <a href="{{route('frontend.designer.project.chat',['meeting_id'=>$meeting->id])}}"
                                >Chat
                                    <span>
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
                            d="M15.854 8.854l-7.354 7.353-7.354-7.353 0.707-0.707 6.147 6.146v-13.293h1v13.293l6.146-6.146 0.708 0.707z"
                            fill="#000000"
                        />
                      </svg>
                    </span>
                                </a>



                                </td>
                            <td class="text-center">
                                @if($meeting->status)
                                    <span class="badge badge-danger bg-success">Completed</span>
                                @else
                                    <span class="badge badge-danger bg-danger">Pending</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle drop-btn-style" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Option
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="">Order Details</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            {!! $meetingList->links() !!}

{{--            <ul class="pagination">--}}
{{--                <li class="pagination-link">--}}
{{--                    <a href="#">--}}
{{--                        <svg--}}
{{--                            version="1.1"--}}
{{--                            xmlns="http://www.w3.org/2000/svg"--}}
{{--                            xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                            width="17"--}}
{{--                            height="17"--}}
{{--                            viewBox="0 0 17 17"--}}
{{--                        >--}}
{{--                            <g></g>--}}
{{--                            <path--}}
{{--                                d="M16 8.972h-12.793l6.146 6.146-0.707 0.707-7.353-7.353 7.354-7.354 0.707 0.707-6.147 6.147h12.793v1z"--}}
{{--                                fill="#000000"--}}
{{--                            />--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="pagination-link">--}}
{{--                    <a href="#" class="active">1</a>--}}
{{--                </li>--}}
{{--                <li class="pagination-link"><a href="#">2</a></li>--}}
{{--                <li class="pagination-link"><a href="#">3</a></li>--}}
{{--                <li class="pagination-link"><a href="#">4</a></li>--}}
{{--                <li class="pagination-link">--}}
{{--                    <a href="#">--}}
{{--                        <svg--}}
{{--                            version="1.1"--}}
{{--                            xmlns="http://www.w3.org/2000/svg"--}}
{{--                            xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                            width="17"--}}
{{--                            height="17"--}}
{{--                            viewBox="0 0 17 17"--}}
{{--                        >--}}
{{--                            <g></g>--}}
{{--                            <path--}}
{{--                                d="M15.707 8.472l-7.354 7.354-0.707-0.707 6.146-6.146h-12.792v-1h12.793l-6.147-6.148 0.707-0.707 7.354 7.354z"--}}
{{--                                fill="#000000"--}}
{{--                            />--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
        </div>
    </section>


@endsection
@section('js_plugins')
@endsection
@section('js')
@endsection


