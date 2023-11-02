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
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>SI</th>
                        <th class="text-center">Request Date</th>
                        <th class="text-center">Accept Date</th>
                        <th class="text-center">Bank Info</th>
                        <th>Requester Name</th>
                        <th>Job Type</th>
                        <th>Id No</th>
                        <th>Status</th>
                        <th>Total Amount</th>
{{--                        <th class="action-width">Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($withdrawalList as $key=>$data)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="text-center">{{$data->withdrawal_request_date}}</td>
                            <td class="text-center">{{$data->withdrawal_accept_date?$data->withdrawal_accept_date:'-'}}</td>
                            <td class="text-center">
                                <span style="cursor: pointer;color:#13e7e7" name-data="{{$data->acc_name}}"
                                      number-data="{{$data->acc_number}}" routing-data="{{$data->routing_number}}"
                                      onclick="bankInfoShow(this)">
                                   {{$data->acc_name}}
                                </span>
                            </td>

                            @if($data->sector_type==1)
                                <td>{{$data->designerInfo?$data->designerInfo->name:'-'}}</td>
                            @elseif($data->sector_type==2)
                                <td>{{$data->shopKeeper?$data->shopKeeper->name:'-'}}</td>
                            @endif

                            @if($data->sector_type==1)
                                <td>Designer</td>
                            @elseif($data->sector_type==2)
                                <td>Shopkeeper</td>
                            @endif

                            @if($data->sector_type==1)
                                <td>{{$data->designerInfo?$data->designerInfo->id_no:'-'}}</td>
                            @elseif($data->sector_type==2)
                                <td>{{$data->shopKeeper?$data->shopKeeper->id_no:'-'}}</td>
                            @endif
                            <td>
                                @if($data->status==1)
                                    <span class="badge badge-success">Withdrawal Completed</span>
                                @elseif($data->status==0)
                                    <span class="badge badge-danger">Withdrawal Pending</span>
                                @endif
                            </td>
                            <td class="text-right">${{$data->withdrawal_amount}}</td>
{{--                            <td>--}}
{{--                                <div class="dropdown dropstyle">--}}
{{--                                    <button class="btn btn-secondary dropdown-toggle dropbtnstyle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        Action List--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                        <a class="dropdown-item" href="{{route('admin.withdrawal.completed',['withdrawal_id'=>$data->id])}}">withdrawal Completed</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <div class="modal fade" id="bankInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bank Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">Bank Name</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-6" id="bname"></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-5">Bank Number</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-6" id="bnumber"></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-5">Bank Routing</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-6" id="brouting"></div>
                    </div>

                </div>
                {{--                <div class="modal-footer">--}}
                {{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                {{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                {{--                </div>--}}
            </div>
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
        function addNewColor(){
            $('#coloradd').append($('#colorinput').html())
        }
        function editColor(colorList){
            $('#editModal').modal('show');
            $("#colorid").val(colorList.id);``
            $("#colorName").val(colorList.name);
            $("#colorCode").val(colorList.color_code);
        }

        function bankInfoShow(datainfo) {
            let name = $(datainfo).attr('name-data');
            let number = $(datainfo).attr('number-data');
            let routingdata = $(datainfo).attr('routing-data');
            $('#bname').html(name)
            $('#bnumber').html(number)
            $('#brouting').html(routingdata)
            $('#bankInfo').modal('show');

        }
    </script>


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
