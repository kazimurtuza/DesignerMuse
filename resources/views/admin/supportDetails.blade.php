@extends('admin.layout.layout')
@section('main_content')
    <h4 class="mt-3 mb-2">Support Messages</h4>

    <div class="row d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-body">

                <div >
                    <h6><i class="fa fa-user-circle" aria-hidden="true" style="color: #bdbdbd;"></i> Name:{{$support->sender_name}}</h6>
                    <h6> <i class="fa fa-envelope" aria-hidden="true" style="color: #bdbdbd;"></i> Email:{{$support->sender_email}}</h6>
                    <p>Date: {{ date('d-m-y g:i a',strtotime($support->created_at))}}</p>
                    <p>
                        {!! $support->sender_message !!}
                    </p>
                </div>
            </div>
            <!-- /.card-body -->
        </div>

        @foreach($replyList as $replay)
        <div class="card w-75">
            <div class="card-body">

                <div >
                    <i class="fa fa-reply" aria-hidden="true" style="color: #bdbdbd;"></i> Replied Message
                    <h6> <i class="fa fa-envelope" aria-hidden="true" style="color: #bdbdbd;"></i> Email:{{$replay->sender_email}}</h6>
                    <p>Date: {{ date('d-m-y g:i a',strtotime($replay->created_at))}}</p>
                    <p>
                        {!! $replay->sender_message !!}
                    </p>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        @endforeach

        <div class="card w-75">
            <div class="card-body">

                <div>
                    <h6> <i class="fa fa-envelope" aria-hidden="true" style="color: #bdbdbd;"></i> Email:{{$support->sender_email}}</h6>
                    <form action="{{route('replay.support.mail')}}">
                        <input type="hidden" value="{{$support->id}}" name="id">
                        <input type="hidden" value="{{$support->sender_email}}" name="email">
                        <input type="hidden" value="{{$support->sender_name}}" name="name">
                        <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                        <br>
                        <button type="submit" class="btn btn-success">Send Mail</button>


                    </form>
                </div>
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
    </script>
    <script>
    </script>
@endsection
