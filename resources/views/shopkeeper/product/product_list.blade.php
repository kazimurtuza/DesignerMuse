@extends('shopkeeper.layout.layout')
@section('main_content')

    <div class="row">
        <div class="col-12 d-flex justify-content-end mb-2 mt-3">
            <a href="{{route('shopkeeper.product.add')}}" class="btn btn-primary">
                {{languageGet()=='en'?'Add Product':'أضف منتج'}}
            </a>
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
                        <th> {{languageGet()=='en'?'SI':'مسلسل'}}</th>
                        <th> {{languageGet()=='en'?'Product Name':'اسم المنتج'}}</th>
                        <th> {{languageGet()=='en'?'Category':'فئة'}}</th>
                        <th>{{languageGet()=='en'?'Product Image':'صورة المنتج'}}</th>
                        <th> {{languageGet()=='en'?'Price':'سعر'}}</th>
                        <th> {{languageGet()=='en'?'Variant':'البديل'}}</th>
                        <th> {{languageGet()=='en'?'Status':'حالة'}}</th>
                        <th class="action-width"> {{languageGet()=='en'?'Action':'خيار'}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productList as $key=>$product)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                {{$product->name}}
                            </td>
                            <td>
                                {{$product->category->name}}
                            </td>
                            <td class="d-flex justify-content-center">
                                @if( count($product->productImage)>0)
                                    <img height="60px" width="60px" src="{{asset($product->productImage[0]->image)}}"
                                         alt="">
                                @endif
                            </td>
                            <td>
                                {{$product->price}}
                            </td>
                            <td>
                                @if($product->is_variant==1)
                                    <span class="badge badge-primary"> {{languageGet()=='en'?'Variant':'بديل'}}</span>
                                @else
                                    <span class="badge badge-danger"> {{languageGet()=='en'?'No Variant':'لا بديل'}}</span>
                                @endif
                            </td>
                            <td>
                                @if($product->status==1)
                                    <span class="badge badge-primary">  {{languageGet()=='en'?'Active':'نشيط'}}</span>
                                @else
                                    <span class="badge badge-danger">  {{languageGet()=='en'?'Inactive':'غير نشط'}}</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown dropstyle">
                                    <button class="btn btn-secondary dropdown-toggle dropbtnstyle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        {{languageGet()=='en'?'Option':'خيار'}}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"
                                           href="{{route('shop.product.edit',['product_id'=>$product->id])}}">{{languageGet()=='en'?'Edit':'تصحيح'}}</a>
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
                                    <input type="text" class="form-control" name="category_name[]"
                                           placeholder="Category Name">
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
        <div class="modal-dialog">
            <form method="post" action="{{route('admin.shop.update.category')}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div id="coloradd">
                            <div class="row">
                                <div class="col">
                                    <input type="text" id="colorid" name="category_id" style="display: none">
                                    <input type="text" id="colorName" class="form-control" name="category_name"
                                           placeholder="Category name">
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
                <input type="text" class="form-control" name="category_name[]" placeholder="Category Name">
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

        function editColor(categoryList) {
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
