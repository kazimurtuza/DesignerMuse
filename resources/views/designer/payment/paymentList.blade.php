@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table">
        <div class="projects-container container">
            <h2 class="title">Payment List</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th class="text-center">SI</th>
                        <th class="text-center">Code No</th>
                        <th class="text-center">Sender Name</th>
                        <th class="text-center">Job Type</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($paymentList as $key=>$payment)
                        <tr>
                            <td class="text-center">{{$key+1}}</td>
                            <td class="text-center">{{$payment->id_no}}</td>
                            <td class="text-center">{{$payment->sednerInfo->name}}</td>
                            @if($payment->payment_for==2)
                                <td class="text-center"><span class="badge bg-primary">Meeting</span></td>
                            @elseif($payment->payment_for==1)
                                <td class="text-center"><span class="badge bg-info">Shop</span></td>
                            @elseif($payment->payment_for==3)
                                <td class="text-center"><span class="badge bg-success">Project</span></td>
                            @endif
                            <td class="center">
                                {{$payment->date}}
                            </td>
                            <td class="center">{{$payment->total_amount}}</td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {!! $paymentList->links() !!}
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
                        <h5 class="modal-title" id="exampleModalLabel">Add File</h5>
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
        function setprojectId(id) {
            $('#projectId').val(id);
        }
    </script>
@endsection


