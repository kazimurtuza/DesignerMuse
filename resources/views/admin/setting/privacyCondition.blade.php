@extends('admin.layout.layout')
@section('main_content')

    <form method="post" action="{{route('privacy.condition.store')}}" enctype="multipart/form-data">
        @csrf
    <div class="card w-100">
        <h4 class="text-center p-3 bg-light text-bold">Privacy Policy</h4>
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-sm-6">
                    <label for="exampleInputEmail1" class="form-label">Privacy Policy English</label>
                    <textarea  name="privacy_en" class="form-control"   id="summernote1"  cols="5" rows="5" required>{{$info?$info->privacy_en:''}}</textarea>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="exampleInputEmail1" class="form-label">Privacy Policy Arabic</label>
                    <textarea dir="rtl" name="privacy_ar" class="form-control" id="summernote2"  cols="5" rows="5" required>{{$info?$info->privacy_ar:''}}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="card w-100">
        <h4 class="text-center p-3 bg-light text-bold">Terms and conditions</h4>
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-sm-6">
                    <label for="exampleInputEmail1" class="form-label">Terms and conditions English</label>
                    <textarea  name="condition_en" class="form-control" id="summernote3"  cols="5" rows="5" required>{{$info?$info->condition_en:''}}</textarea>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="exampleInputEmail1" class="form-label">Terms and conditions Arabic</label>
                    <textarea dir="rtl" name="condition_ar" class="form-control"  id="summernote4"  cols="5" rows="5" required>{{$info?$info->condition_ar:''}}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-info mt-3 mb-3 float-end" onclick="bankInfoShow()">Save</button>
    </div>
    </form>


@endsection

@section('css_plugins')
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets/adminPanel')}}/plugins/summernote/summernote-bs4.min.css">
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

    <script src="{{asset('assets/adminPanel')}}/plugins/summernote/summernote-bs4.min.js"></script>
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

        function bankInfoShow() {

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

    <script>
        $(function () {
            // Summernote

            $('#summernote1').summernote()
            $('#summernote2').summernote()
            $('#summernote3').summernote()
            $('#summernote4').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endsection
