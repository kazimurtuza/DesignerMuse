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
                        <th class="text-center"> {{languageGet()=='en'?'Date':'تاريخ'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Type':'يكتب'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Start Time':'وقت البدء'}}</th>
                        <th class="text-center">{{languageGet()=='en'?'Meeting Time ':'وقت الاجتماع'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Designer':'مصمم'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Consultation Outcome':'نتائج التشاور'}}</th>
                        {{--                        <th class="text-center">Outcome of the consultation</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($meetingList as $meeting)
                        <tr>
                            <td class="text-center">{{ date('d-M-y',strtotime($meeting->appointment_date))}}</td>
                            <td class="text-center">{{$meeting->appointment_type}}</td>
                            <td class="text-center">{{$meeting->timeInfo->start_time}}</td>
                            <td class="text-center">{{$meeting->timeInfo->start_time}}-{{$meeting->timeInfo->end_time}}</td>
                            <td class="text-center">{{$meeting->designer->name}}</td>
                            <td class="text-center">
                                @if($meeting->status==1)
                                    <span class="badge badge-danger bg-info"> {{languageGet()=='en'?'Consultation only':'التشاور فقط'}}</span>
                                @elseif($meeting->status==2)
                                    <span class="badge badge-danger bg-primary"> {{languageGet()=='en'?'Start project':'ابدأ المشروع'}}</span>
                                @elseif($meeting->status==0)
                                    <span class="badge badge-danger bg-danger"> {{languageGet()=='en'?'Pending':'قيد الانتظار'}}</span>
                                @elseif($meeting->status==3)
                                    <span class="badge badge-danger bg-success"> {{languageGet()=='en'?'Project Completed':'اكتمل المشروع'}} </span>
                                @endif
                            </td>
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
