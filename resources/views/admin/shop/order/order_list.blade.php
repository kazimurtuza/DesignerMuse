@extends('admin.layout.layout')
@section('main_content')

    <div class="row">
{{--        <div class="col-12 d-flex justify-content-end mb-2 mt-3">    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
{{--                Add Category--}}
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
                        <th>Date</th>
                        <th>Invoice NO</th>
                        <th>Customer</th>
                        <th>Total Amount</th>
                        <th>Payment Status</th>
                        <th class="action-width">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allOrder as $key=>$allOrderList)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                {{$allOrderList->date}}
                            </td>
                            <td>
                                {{$allOrderList->invoice_id}}
                            </td>
                            <td>
                                {{$allOrderList->cunstomerInfo->name}}
                            </td>
                            <td class="text-right">
                                ${{$allOrderList->total_payable}}
                            </td>
                            <td>
                                @if($allOrderList->payment_status==1)
                                    <span class="badge badge-success">Paid</span>
                                @else
                                    <span class="badge badge-danger">Unpaid</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown dropstyle">
                                    <button class="btn btn-secondary dropdown-toggle dropbtnstyle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action List
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" onclick="editColor({{$allOrderList->id}})">Details</a>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach


                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{route('admin.shop.category.store')}}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div id="coloradd">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="category_name[]" placeholder="Category Name">
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-center">
                            <span class="add-btn" onclick="addNewColor()">+</span>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="orderdetails">
                        <div>
                            <h5>company name</h5>
                            <table class="table table-bordered border-primary">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>



                    </div>
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                        <button type="submit" class="btn btn-primary">Update</button>--}}
{{--                    </div>--}}
                </div>

        </div>
    </div>


    <div id="colorinput"  class="d-hidden-mini" style="display: none">
        <div class="row mt-2">
            <div class="col">
                <input type="text" class="form-control" name="category_name[]" placeholder="Category Name">
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
        function editColor(order_id){

            $.ajax({
                url: "{{route('admin.shop.order.details.get')}}",
                type: "get",
                data: {
                    order_id:order_id,
                },
                success: function(response) {
                    $('#orderdetails').html(response)

                },
                error: function(xhr) {
                    //Do Something to handle error
                }});



            $('#editModal').modal('show');
            $("#colorid").val(categoryList.id);
            $("#colorName").val(categoryList.name);
            // $("#colorCode").val(colorList.color_code);


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
