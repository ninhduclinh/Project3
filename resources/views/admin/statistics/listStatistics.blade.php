@if($transactions)
<?php $i=1;
    $total_earn_money = 0;
 ?>
 <div id="data-statistical-date-start" data-statistical-date-start="{{$statistical_date_start}}"></div>
 <div id="data-statistical-date-end" data-statistical-date-end="{{$statistical_date_end}}"></div>
<table class="table table-hover table-bordered">
    <thead class="thead-dark">
            <th scope="col">STT</th>
            <th scope="col" style="">Tên Sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Giảm giá</th>
            <th scope="col">Thành tiền</th>
            <th scope="col">Người mua</th>
            <th>Mã giao dịch</th>
    </thead>
    <tbody>
        <tr></tr>
    @foreach($transactions as $transaction )
        @foreach($transaction->Order as $order)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$order->Product->pro_name}}</td>
                <td>{{$order->or_qty}}</td>
                <td>{{number_format($order->or_price,0,',','.')}} VNĐ</td>
                <td>{{$order->or_sale>0?(number_format($order->or_price*(100-$order->or_sale)/100,0,',','.'))."VNĐ (-".$order->or_sale."%)":"Không giảm giá"}}</td>
                <td>{{$order->or_sale>0?number_format($order->or_qty*($order->or_price*(100-$order->or_sale)/100),0,'.','.'):number_format($order->or_qty*$order->or_price,0,',','.')}} VNĐ</td>
                <td>{{$transaction->User->name}}</td>
                <td>{{$transaction->id}}</td>
                <?php $total_earn_money = $total_earn_money + ($order->or_sale>0?$order->or_qty*($order->or_price*(100-$order->or_sale)/100):$order->or_qty*$order->or_price) ?>   
            </tr>
        @endforeach    
    @endforeach       
            <tr>
                <td colspan="6" style="text-align: center;font-weight: bold;font-size: 20px;">Tổng tiền:</td>
                <td colspan="2" style="text-align: center;font-weight: bold;font-size: 20px;">{{number_format($total_earn_money,'0',',','.')}} VNĐ</td>
            </tr>
    </tbody>
</table>
@endif