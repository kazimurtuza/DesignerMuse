@extends('shopkeeper.layout.layout')
@section('main_content')
<div>
    <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#exampleModal">
        Add Bank Account
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{route('shopkeeper.bank.store')}}" method="post">
                @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="modal-body">
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Bank Name:</label>
                                <input type="text" class="form-control" id="email"  name="bank_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Account Name:</label>
                                <input type="text" class="form-control" id="pwd"  name="acc_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Account Number:</label>
                                <input type="text" class="form-control" id="pwd"  name="acc_number" required>
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Routing  Number:</label>
                                <input type="text" class="form-control" id="pwd"  name="routing_number" required>
                            </div>
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

    <section class="mt-5 mb-5 row d-flex justify-content-center container bg-light p-5">

        @foreach($bankList as $bank)
            <div class="col-sm-5 projects-container container cart-st bank_card">
                <div class="row">
                    <div class="col-sm-6">  <span class="bank_title">Bank Name</span>:<span class="bank_val">{{$bank->bank_name}}</span></div>
                    <div class="col-sm-6">  <span class="bank_title">Account Name</span>:<span class="bank_val">{{$bank->acc_name}}</span></div>
                    <div class="col-sm-6">  <span class="bank_title">Account Number</span>:<span class="bank_val">{{$bank->acc_number}}</span></div>
                    <div class="col-sm-6">  <span class="bank_title">Routing Number</span>:<span class="bank_val">{{$bank->routing_number}}</span></div>
                </div>

            </div>
        @endforeach


    </section>

</div>


@endsection

@section('js_plugins')
@endsection

