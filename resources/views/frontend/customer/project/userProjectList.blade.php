@extends('frontend.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table">
        <div class="projects-container container">
            <h2 class="title">  {{languageGet()=='en'?'Projects List':'قائمة المشاريع'}}</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>

                        <th class="text-center">{{languageGet()=='en'?'Meeting Id':'معرف الاجتماع'}}</th>
                        <th class="center">{{languageGet()=='en'?'Project Name':'اسم المشروع'}}</th>
                        <th class="center">  {{languageGet()=='en'?'Date Line':'خط التاريخ'}}</th>
                        <th class="center">  {{languageGet()=='en'?'Client Name':'اسم العميل'}}</th>
                        <th class="center"> {{languageGet()=='en'?'Uploaded by ':'تم الرفع بواسطة'}}</th>
                        <th class="center">  {{languageGet()=='en'?'Status':'حالة'}}</th>
                        <th class="end">{{languageGet()=='en'?'Chat':'محادثة'}}</th>
                        <th class="end">{{languageGet()=='en'?'Option':'خيار'}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projectList as $key=>$project)
                        <tr>
                            <td class="text-center">{{$project->meetingInfo?$project->meetingInfo->id_no:'-'}}</td>
                            <td class="text-center">{{$project->title}}</td>
                            <td>{{$project->dateline}}</td>
                            <td class="center">{{$project->designer?$project->designer->name:''}}</td>
                            <td class="center">
                                @if($project->is_client_upload==1)
                                    {{$project->client?$project->client->name:''}}
                                @else
                                    {{$project->designer?$project->designer->name:''}}
                                @endif
                            </td>
                            <td class="center">
                                @if($project->project_status==0)
                                    <span class="badge bg-warning text-dark">{{languageGet()=='en'?'Pending':'قيد الانتظار'}}</span>
                                @endif
                                @if($project->project_status==1)
                                    <span class="badge bg-primary">{{languageGet()=='en'?'On Going':'يعالج'}}</span>
                                @endif
                                @if($project->project_status==2)
                                    <span class="badge bg-success">{{languageGet()=='en'?'Completed':'مكتمل'}}</span>
                                @endif
                            </td>

                            <td class="center">
                                <a href="{{route('client.project.chat',['meeting_id'=>$project->meeting_id])}}">{{languageGet()=='en'?'Chat':'محادثة'}}<span>
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
                            <td class="end action-btn">

                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                       id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                         {{languageGet()=='en'?'Option':'خيار'}}
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @if($project->agreement_accepted==2)
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{route('accept.agreement',['id'=>$project->id])}}">
                                                <span> {{languageGet()=='en'?'Accept Agreement':'اقبل الاتفاقية'}}</span>
                                            </a>
                                        </li>
                                        @endif
                                        <li><a class="dropdown-item"
                                               href="{{route('client.project.details',['project_id'=>$project->id])}}">
                                                <span>{{languageGet()=='en'?'Details':'تفاصيل'}}</span>

                                            </a></li>
                                            @if($project->agreement_accepted==2)
                                        <li>
                                            <span onclick="setprojectId({{$project->id}})" class="dropdown-item"
                                                  data-bs-toggle="modal" data-bs-target="#exampleModal">{{languageGet()=='en'?'File Add':'إضافة ملف'}}</span>
                                        </li>
                                            @endif
                                            @if($project->agreement_accepted==1&&$project->project_status!=2)
                                                <li onclick="projectRate({{$project->id}})">
                                                    <span> &nbsp;&nbsp;  {{languageGet()=='en'?'Completed':'مكتمل'}}</span>

                                                </li>
                                            @endif
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            {{ $projectList->links('pagination::simple-bootstrap-4') }}--}}
            {!! $projectList->links() !!}

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




    <div class="modal fade" id="projectRate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rating And Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{route('user.project.completed')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="hidden" name="project_id" id="project_id" value="">

                            <label for="exampleInputEmail1" class="form-label">Product Rating <i
                                    class="fa-solid fa-star"></i></label>
                            <select class="form-select" name="rating" aria-label="Default select example" required>
                                <option value=""></option>
                                <option value="1">&#9733;</option>
                                <option value="2"> &#9733;&#9733;</option>
                                <option value="3"> &#9733;&#9733;&#9733;</option>
                                <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                                <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Review</label>
                            <textarea class="form-control" name="review"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{--                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                        <button type="submit" class="btn btn-primary">Completed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('js_plugins')
@endsection
@section('js')
    <script>
        function setprojectId(id) {
            $('#projectId').val(id);
        }

        function projectRate(id){
            $('#project_id').val(id);
            $('#projectRate').modal('show');
        }
    </script>
@endsection


