@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->


    <!-- Projects Table -->
    <section class="projects-table">
        <div class="projects-container container cart-st bg-white">
            <h4 class="mb-4">Service Rate Set</h4>

            <div class="row d-grid balance-card-wrap">
                <div class="balance-card">
                    <h4>Total Withdrawal</h4>
                    <h4>${{$totalCompletedWithdrawal}}</h4>
                </div>
                <div class="available-balance-card">
                    <h4>Available Balance</h4>
                    <h4>${{$availableBalance}}</h4>
                </div>
            </div>

            <div class="row d-flex justify-content-center">

                <div class="col-sm-6 withdrawal-request">
                    <form action="{{route('designer.withdrawal.request')}}" method="get">
                    <div class="input-group mb-4">
                        <select class="form-select" aria-label="Default select example" name="bank_id" required>
                            <option value="">Bank Account</option>
                            @foreach($bankList as $bank)
                            <option value="{{$bank->id}}">{{$bank->bank_name}}</option>
                            @endforeach
                        </select>
                    </div>

                        <div class="input-group mb-3">
                        <input type="number" name="balance" class="form-control"   min="1" max="{{$availableBalance}}" placeholder="Withdrawal Amount" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit" id="button-addon2">Withdrawal Now</button>
                        </div>
                    </div>
                    </form>
                </div>

            </div>




        </div>

        <div class=" container mt-5">
            <div class="row">
                {{--        <div class="col-12 d-flex justify-content-end mb-2">    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
                {{--                Add Color--}}
                {{--            </button></div>--}}
                <div class="card w-100">

                    <section class="projects-table">
                        <div class="projects-container container">
                            <h6>Last withdrawal list</h6>
                            <div class="table-wrapper">
                                <table>
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
                                    @foreach($withdrawal  as $key=>$withdrawal)
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

                        </div>
                    </section>

                </div>
            </div>
        </div>




        </div>
    </section>

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
        function getSlot(data) {
            $duration = $(data).val();
            $.ajax({
                url: "{{route('time.schedule.slot.get')}}",
                type: "get",
                data: {
                    duration: $duration,
                },
                success: function (response) {
                    $('#timeSlot').html(response)
                    // console.log(response);
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }
    </script>
@endsection


