@extends('shopkeeper.layout.layout')
@section('main_content')
    <div class="mt-5">
        <div class="projects-container container cart-st bg-white">

            <div class="row d-flex justify-content-around mt-5">
                <div class="col-sm-5 balance-card">
                    <h4> {{languageGet()=='en'?'Total Withdrawal':'الانسحاب الكلي'}}</h4>
                    <h4>${{$totalCompletedWithdrawal}}</h4>
                </div>
                <div class="col-sm-5 available-balance-card">
                    <h4> {{languageGet()=='en'?'Available Balance':'الرصيد المتوفر'}}</h4>
                    <h4>${{$availableBalance}}</h4>
                </div>
            </div>

            <div class="row d-flex justify-content-center">

                <div class="col-sm-6 withdrawal-request">
                    <form action="{{route('shopkeeper.balance.withdrawal')}}" method="post">
                        @csrf
                        <div class="input-group mb-4 mt-3">
                            <select class="form-control" aria-label="Default select example" name="bank_id" required>
                                <option value=""> {{languageGet()=='en'?'Bank Account':'حساب البنك'}}</option>
                                @foreach($bankList as $bank)
                                    <option value="{{$bank->id}}">{{$bank->bank_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="number" name="balance" class="form-control"   min="1" max="{{$availableBalance}}" placeholder="{{languageGet()=='en'?'Withdrawal Amount':'مبلغ السحب'}}" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit" id="button-addon2"> {{languageGet()=='en'?'Withdrawal Now':'انسحب الآن'}}</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>




        </div>
    </div>


@endsection

@section('js_plugins')
@endsection

