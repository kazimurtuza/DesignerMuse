@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table">
        <div class="projects-container container">
            <h2 class="title">Financial Report</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th class="text-center">SI</th>
                        <th class="text-center">Payment Id</th>
                        <th class="text-center">Order Type</th>
                        <th class="text-center">Trn Id</th>
                        <th class="text-center">Payed Amount</th>
                        <th class="text-center">Service Charge</th>
                        <th class="text-center">Receivable Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($payment as $key=>$payentList)
                        <tr>
                             <td style="text-align: center">{{$key+1}}</td>
                             <td style="text-align: center">#{{$payentList->id_no}}</td>
                             <td style="text-align: center">{{$payentList->payment_for==2?"Project":"Meeting"}}</td>
                             <td style="text-align: center">{{$payentList->trn_id}}</td>
                             <td style="text-align: center">{{$pay=$payentList->total_amount}}</td>
                             <td style="text-align: center">{{$charge=$payentList->service_charge_amount}}</td>
                             <td style="text-align: center">{{$pay-$charge}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

{!! $payment->links() !!}
        </div>
    </section>



@endsection
@section('js_plugins')
@endsection
@section('js')
@endsection


