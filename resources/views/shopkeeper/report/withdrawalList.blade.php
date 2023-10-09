@extends('shopkeeper.layout.layout')
@section('main_content')

    <div class="row">
        <div class="col-12 d-flex justify-content-end mb-2 mt-3">
            Financial Report
        </div>
        <div class="card w-100">
        {{--            <div class="card-header">--}}
        {{--                <h3 class="card-title">DataTable with default features</h3>--}}
        {{--            </div>--}}
        <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>SI</th>
                        <th class="text-center">Withdrawal Code</th>
                        <th class="text-center">Request Date</th>
                        <th class="text-center">Accept Date</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($withdrawalList as $key=>$withdrawal)
                        <tr>
                            <td class="text-center">{{$key+1}}</td>
                            <td class="text-center">{{$withdrawal->id_no}}</td>
                            <td class="text-center">{{$withdrawal->withdrawal_request_date}}</td>
                            <td class="text-center">{{$withdrawal->withdrawal_accept_date}}</td>
                            @if($withdrawal->status==0)
                                <td class="text-center"><span class="badge bg-danger">Request Pending</span></td>
                            @else
                                <td class="text-center"><span class="badge bg-success">Completed</span></td>
                            @endif
                            <td style="text-align: right;padding-right: 40px">${{$withdrawal->withdrawal_amount}}</td>

                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>



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
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
