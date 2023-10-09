@extends('admin.layout.layout')
@section('main_content')

    <div class="row d-flex justify-content-center">
        <div class="card w-25 mt-5">


            <div class="card-body p-5">
                <h4 class="text-center text-bold mb-4"> Charge Rate Set</h4>
                <form method="post" action="{{route('setting.charge.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Charge (%)</label>
                        <input type="number" step="any" class="form-control" id="exampleInputEmail1" value="{{$settingInfo?$settingInfo->product_charge_rate:''}}" name="product_sell_charge" aria-describedby="emailHelp" placeholder="Charge (%)">

                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail11">Meeting Charge (%)</label>
                        <input type="number" step="any" class="form-control" id="exampleInputEmail11" value="{{$settingInfo?$settingInfo->meeting_charge_rate:''}}"  name="meeting_charge" aria-describedby="emailHelp" placeholder="Charge (%)">

                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail3">Project Charge (%)</label>
                        <input type="number" step="any" class="form-control" id="exampleInputEmail3" value="{{$settingInfo?$settingInfo->project_charge_rate:''}}" name="project_charge" aria-describedby="emailHelp" placeholder="Charge (%)">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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
    </script>
@endsection
