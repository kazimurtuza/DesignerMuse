
<div class="mb-2 userinfo d-flex justify-content-between">
    <ul style="list-style: none;
    padding-left: 0;
">
        <li><strong>Name</strong>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$orderList->orderInfo->first_name}} {{$orderList->orderInfo->last_name}}</li>
        <li><strong>Address</strong>&nbsp;&nbsp;&nbsp;{{$orderList->orderInfo->address}}</li>
    </ul>

    <ul style="list-style: none;
    padding-left: 0;
">
        <li><strong>INV-No </strong>&nbsp; &nbsp;&nbsp;{{$orderList->orderInfo->invoice_id}}</li>
        <li><strong>Date </strong>&nbsp; &nbsp;&nbsp;{{$orderList->orderInfo->date}}</li>

    </ul>
</div>
<div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Shipping Charge</th>
            <th scope="col">Total Price</th>
        </tr>
        </thead>
        <tbody>
        <?php $totalCharge=0 ?>
        @foreach($orderList->orderItems as  $key=>$orderItemList)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$orderItemList->productInfo->name}}</td>
                <td><img height="40" width="40" src="{{asset($orderItemList->productInfo->productImage[0]->image)}}" alt="">
                </td>
                <td>${{$orderItemList->unit_price}}</td>
                <td>{{$orderItemList->quantity}}</td>
                <td class="text-right">${{$totalCharge+=$orderItemList->total_payable-($orderItemList->unit_price*$orderItemList->quantity)}}</td>
                <td class="text-right">${{$orderItemList->total_payable}}</td>

            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr class="text-info orderdetails-ft">
            <th colspan="4"></th>
            <td class="text-right">Total</td>
            <td class="text-right">${{$totalCharge}}</td>
            <td class="text-right">$ {{$orderList->orderItems->sum('total_payable')}}</td>
        </tr>
        </tfoot>
    </table>

</div>





