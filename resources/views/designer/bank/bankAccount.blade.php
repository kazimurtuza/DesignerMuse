@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Button trigger modal -->

    <!-- Modal -->
{{--    id	sector--}}
{{--    1=designer,2=shopkeeper	user_id	bank_name	acc_name	acc_number	routing_number--}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{route('designer.bank.store')}}" method="post">
                @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Bank Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

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

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- Projects Table -->

    <div class="container">
        <div class="mt-5 mb-5 row  container" style="    margin-left: 37px;">
                <button type="button"  class="btn btn-primary w-25 ml-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Bank
                </button>
        </div>



        <section class="mt-5 mb-5 row  container">

            @foreach($bankList as $bank)
            <div class="col-sm-5 projects-container container cart-st bg-white mb-4">
                <div class="row ">
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
@section('js')
@endsection


