
<div class="mb-2 userinfo">
    <ul style="list-style: none;
    padding-left: 0;
">
        <li><strong>INV-No </strong>&nbsp; &nbsp;&nbsp;{{$orderInfo->invoice_id}}</li>
        <li><strong>Name</strong>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{$orderInfo->first_name}} {{$orderInfo->last_name}}</li>
        <li><strong>Address</strong>&nbsp;&nbsp;&nbsp;{{$orderInfo->address}}</li>
    </ul>
</div>
<div class="mt-3">
    @foreach($orderInfo->shopOrder as $companyOrders)
    <h5 class="detailsorder-top">Shop: {{$companyOrders->shopInfo->name}}  &nbsp; &nbsp; Invoice: <span>{{$companyOrders->invoice_id}}</span> &nbsp; &nbsp;
        Status:
        @if($companyOrders->status==1)
            <span class="badge badge-info">processing</span>
        @endif
        @if($companyOrders->status==0)
            <span class="badge badge-danger">Pending</span>
        @endif
        @if($companyOrders->status==2)
            <span class="badge badge-success">Completed</span>
        @endif

    </h5>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th scope="col">Si</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity</th>
            <th scope="col" class="text-center">Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companyOrders->orderItems as  $key=>$orderItemList)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$orderItemList->productInfo->name}}</td>
            <td><img height="40" width="40" src="{{asset($orderItemList->productInfo->productImage[0]->image)}}" alt="">
               </td>
            <td>${{$orderItemList->unit_price}}</td>
            <td>{{$orderItemList->quantity}}</td>
            <td class="text-right">${{$orderItemList->total_payable}}</td>

        </tr>
        @endforeach
        <tfoot>
        <tr class="text-info orderdetails-ft">
            <th colspan="4"></th>
            <td class="text-right">Sub Total</td>
            <td class="text-right">$ {{$companyOrders->orderItems->sum('total_payable')}}</td>
        </tr>
        </tfoot>

        </tbody>

    </table>
    @endforeach
</div>
<div>
    <table class="table table-bordered border-primary">
        <thead>
        <tr class="detailsorder-foot">
            <th scope="col" class="text-info text-right">Sub Total</th>
            <th scope="col" class="text-success">{{$orderInfo->total_price}}</th>
            <th scope="col" class="text-info text-right">Shipping</th>
            <th scope="col" class="text-success">{{$orderInfo->shipping_price}}</th>
            <th scope="col" class="text-info text-right">Total</th>
            <th scope="col" class="text-success">{{$orderInfo->total_payable}}</th>
        </tr>
        </thead>


    </table>
</div>

