@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table">
        <div class="projects-container container">
            <h2 class="title">Projects</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Project Name</th>
                        <th>Date Line</th>
                        <th class="center">Client Name</th>
                        <th class="center">Status</th>
                        <th class="end">Chat</th>
                        <th class="end">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projectList as $key=>$project)
                        <tr>
                            <td>{{$project->meetingInfo?$project->meetingInfo->id_no:'-'}}</td>
                            <td>{{$project->title}}</td>
                            <td>{{$project->dateline}}</td>
                            <td class="center">{{$project->client->name}}</td>
                            <td class="center">
                              @if($project->project_status==0)
                                    <span class="badge bg-warning text-dark">Pending</span>
                              @endif
                             @if($project->project_status==1)
                                 <span class="badge bg-primary">On Going</span>
                             @endif
                                  @if($project->project_status==3)
                                      <span class="badge bg-danger">Rejected</span>
                                  @endif
                            </td>
                            <td class="center">
                                <a href="{{route('frontend.designer.project.chat',['meeting_id'=>$project->meeting_id])}}"
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
                            <td class="d-flex justify-content-end">
                                @if($project->agreement_accepted==0)
                                <a href="{{route('project.agreement.set',['id'=>$project->id])}}" class="btn agreementbtn">Set Agreement</a> &nbsp;
                                @endif
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                      Action
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="{{route('designer.project.details',['project_id'=>$project->id])}}">Details</a></li>
                                        @if($project->agreement_accepted==1)
                                        <li><a href="#" onclick="setprojectId({{$project->id}})" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal"> File Add</a></li>
                                        @endif
{{--                                        <li><a class="dropdown-item" href="{{route('designer.project.status',['status'=>1,'project_id'=>$project->id])}}">Project Accept</a></li>--}}
{{--                                        <li><a class="dropdown-item" href="{{route('designer.project.status',['status'=>3,'project_id'=>$project->id])}}">Project Reject</a></li>--}}

                                    </ul>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

{!! $projectList->links() !!}
        </div>
    </section>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{route('add.project.file')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <input type="hidden" name="project_id" id="projectId">
                    <input type="hidden" name="user_type" value="2" id="projectId">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add  File</h5>
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
@endsection
@section('js')
    <script>
        function setprojectId(id){
            $('#projectId').val(id);
        }
    </script>
@endsection


