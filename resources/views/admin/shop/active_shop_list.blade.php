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
                        <th>Shop Name</th>
                        <th>Email</th>
                        <th>Profile Img</th>
                        <th>Approved Date</th>
                        <th>Status</th>
                        <th class="action-width">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shopList as $key=>$allShopList)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$allShopList->details->name}}</td>
                            <td>{{$allShopList->email}}</td>
                            <td>
                                <img width="50" height="50" src="{{asset($allShopList->details->top_img)}}" alt="">
                            </td>
                            <td>{{  date('d-m-Y',strtotime($allShopList->approved_data)) }}</td>
                            <td>
                                @if($allShopList->is_approved)
                                    <span class="badge badge-success">Approved</span>
                                @else
                                    <span class="badge badge-danger">Not Approved</span>
                                @endif
                            </td>

                            <td>
                                <div class="dropdown dropstyle">
                                    <button class="btn btn-secondary dropdown-toggle dropbtnstyle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        Action List
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"
                                           href="{{route('shop.inactive',['shop_id'=>$allShopList->id])}}">Inactive</a>
                                        <span
                                            onclick="serviceCharge({{$allShopList->product_charge_rate ? $allShopList->product_charge_rate:$sellRate}},'{{$allShopList->id}}')"
                                            style="cursor: pointer" class="dropdown-item">Service Charge</span>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sell Charge Rate</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{route('shopkeeper.service.charge.update')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Service Charge Rate</label>
                                    <input type="hidden" name="shop_id" id="shopId">
                                    <input type="number" id="sellRate" name="rate" class="form-control"
                                           aria-describedby="emailHelp" placeholder="Service Charge Rate (%)">
                                    {{--                                    <small id="emailHelp" class="form-text text-muted">Service Charge Rate (%) </small>--}}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    {{--    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--        <div class="modal-dialog">--}}
    {{--            <form method="post" action="{{route('admin.shop.store.color')}}">--}}
    {{--                @csrf--}}
    {{--                <div class="modal-content">--}}
    {{--                    <div class="modal-header">--}}
    {{--                        <h5 class="modal-title" id="exampleModalLabel">Add color</h5>--}}
    {{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                            <span aria-hidden="true">&times;</span>--}}
    {{--                        </button>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-body">--}}

    {{--                        <div id="coloradd">--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col">--}}
    {{--                                    <input type="text" class="form-control" name="color_name[]" placeholder="Color name">--}}
    {{--                                </div>--}}
    {{--                                <div class="col">--}}
    {{--                                    <input type="color" name="color[]" class="form-control" placeholder="Last name">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                        <div class="d-flex justify-content-center">--}}
    {{--                            <span class="add-btn" onclick="addNewColor()">+</span>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                    <div class="modal-footer">--}}
    {{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
    {{--                        <button type="submit" class="btn btn-primary">Save</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </form>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{route('admin.shop.update.color')}}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Color</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div id="coloradd">
                            <div class="row">
                                <div class="col">
                                    <input type="text" id="colorid" name="color_id" style="display: none">
                                    <input type="text" id="colorName" class="form-control" name="color_name"
                                           placeholder="Color name">
                                </div>
                                <div class="col">
                                    <input type="color" id="colorCode" name="color" class="form-control"
                                           placeholder="Last name">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div id="colorinput" class="d-hidden-mini" style="display: none">
        <div class="row mt-2">
            <div class="col">
                <input type="text" class="form-control" name="color_name[]" placeholder="Color name">
            </div>
            <div class="col">
                <input type="color" name="color[]" class="form-control" placeholder="Last name">
            </div>
        </div>
    </div>

@endsection

@section('css_plugins')
    <link rel="stylesheet"
          href="{{asset('assets/adminPanel')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
          href="{{asset('assets/adminPanel')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
          href="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
        function addNewColor() {
            $('#coloradd').append($('#colorinput').html())
        }

        function editColor(colorList) {
            $('#editModal').modal('show');
            $("#colorid").val(colorList.id);
            $("#colorName").val(colorList.name);
            $("#colorCode").val(colorList.color_code);
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

        function serviceCharge(sellRate, shopId) {
            if (sellRate) {
                $('#sellRate').val(sellRate);
                $('#shopId').val(shopId);
            }
            $('#serviceModal').modal('show');
        }
    </script>
@endsection
