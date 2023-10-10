@extends('designer.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table">
        <div class="projects-container container">
            <h2 class="title"> {{languageGet()=='en'?'Financial Report':'تقرير مالي'}}</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th class="text-center">  {{languageGet()=='en'?'SI':'رقم المسلسل'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Payment Id':'معرف الدفع'}}</th>
                        <th class="text-center">{{languageGet()=='en'?'Order Type':'نوع الطلب'}}</th>
                        <th class="text-center">{{languageGet()=='en'?'Trn Id ':'رقم التحويلة'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Payed Amount':'المبلغ المدفوع'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Service Charge':'تكلفة الخدمة'}}</th>
                        <th class="text-center"> {{languageGet()=='en'?'Receivable Amount':'المبلغ المستحق'}}</th>
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


