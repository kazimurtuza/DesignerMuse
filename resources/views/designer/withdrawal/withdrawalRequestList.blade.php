@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table">
        <div class="projects-container container">
            <h2 class="title">{{languageGet()=='en'?'Pending Withdrawal':'ريثما يتم الانسحاب'}}</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th class="text-center">{{languageGet()=='en'?'SI':'رقم المسلسل'}}</th>
                        <th class="text-center">{{languageGet()=='en'?'Withdrawal Code':'رقم السحب'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Request Date':'تاريخ تقديم الطلب'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Accept Date':'قبول التاريخ'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Status':'حالة'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Amount':'كمية'}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($withdrawalList as $key=>$withdrawal)
                        <tr>
                            <td class="text-center">{{$key+1}}</td>
                            <td class="text-center">#{{$withdrawal->id_no}}</td>
                            <td class="text-center">{{$withdrawal->withdrawal_request_date}}</td>
                            <td class="text-center">{{$withdrawal->withdrawal_accept_date}}</td>
                            <td class="text-center"><span class="badge bg-danger"> {{languageGet()=='en'?'Request Pending':'الطلب معلق'}}</span></td>
                            <td style="text-align: right;padding-right: 40px">${{$withdrawal->withdrawal_amount}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

           {{$withdrawalList->links()}}
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


