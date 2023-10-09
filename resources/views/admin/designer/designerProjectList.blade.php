@extends('admin.layout.layout')
@section('main_content')

    <div class="row">
        {{--        <div class="col-12 d-flex justify-content-end mb-2">    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
        {{--                Add Color--}}
        {{--            </button></div>--}}
        <div class="card w-100">
            {{--            <div class="card-header">--}}
            {{--                <h3 class="card-title">DataTable with default features</h3>--}}
            {{--            </div>--}}
            <!-- /.card-header -->
            <div class="card-body">
                <table  id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Project Name</th>
                        <th>Date Line</th>
                        <th class="center">Client Name</th>
                        <th class="center">Uploaded by</th>
                        <th class="center">Status</th>
{{--                        <th class="end">Chat</th>--}}
{{--                        <th class="end">Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projectList as $key=>$project)
                        <tr>
                            <td class="text-center">{{$project->title}}</td>
                            <td>{{$project->dateline}}</td>
                            <td class="center">{{$project->designer->name}}</td>
                            <td class="center">
                                @if($project->is_client_upload==1)
                                    {{$project->client->name}}
                                @else
                                    {{$project->designer->name}}
                                @endif
                            </td>
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

{{--                            <td class="center">--}}
{{--                                <a href="#"--}}
{{--                                >Chat--}}
{{--                                    <span>--}}
{{--                      <svg--}}
{{--                          version="1.1"--}}
{{--                          xmlns="http://www.w3.org/2000/svg"--}}
{{--                          xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                          width="17"--}}
{{--                          height="17"--}}
{{--                          viewBox="0 0 17 17"--}}
{{--                      >--}}
{{--                        <g></g>--}}
{{--                        <path--}}
{{--                            d="M15.854 8.854l-7.354 7.353-7.354-7.353 0.707-0.707 6.147 6.146v-13.293h1v13.293l6.146-6.146 0.708 0.707z"--}}
{{--                            fill="#000000"--}}
{{--                        />--}}
{{--                      </svg>--}}
{{--                    </span>--}}
{{--                                </a>--}}
{{--                            </td>--}}
{{--                            <td class="end action-btn">--}}
{{--                                <div class="dropdown">--}}
{{--                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                        Action--}}
{{--                                    </a>--}}

{{--                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
{{--                                        <li><a class="dropdown-item" href="{{route('client.project.details',['project_id'=>$project->id])}}">--}}
{{--                                                <span>Details</span>--}}

{{--                                            </a></li>--}}
{{--                                        <li><span  onclick="setprojectId({{$project->id}})" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal"> File Add</span></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->


@endsection

@section('css_plugins')
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('js_plugins')
    <!-- DataTables  & Plugins -->
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/jszip/jszip.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@endsection
@section('js')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
