<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    {{-- <style>
    @font-face {
            font-family: 'DejaVuSans';
            src: url({{ storage_path('fonts/DejaVuSans.ttf') }});
            font-weight: 600; 
            font-style: normal;
         }
        body{
        }
    </style> --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="font-family:DejaVuSans">
        
        <center><span style="font-weight: bolder;font-size: 1.75rem;" >CHI TIẾT GIAO DỊCH {{$transaction->id}}</span></center>
        <div style="font-size: 14px">
            Cửa hàng: Kinh doanh linh kiện máy tính Gaming.<br/>
            Địa chỉ cửa hàng: 41A Đường Phú Diễn, Cầu Diễn, Bắc Từ Liêm, Hà Nội.<br/>
            Tên khách hàng: {{$transaction->User->name}}<br/>
            Số điện thoại: {{$transaction->tr_phone}}<br/>
            Địa chỉ giao hàng: {{$transaction->tr_address}}.
        </div>
        <p style="font-size: 14px" >Lời nhắn từ khách hàng: {{$transaction->tr_note}}</p>
        <p style="font-size: 14px">Trạng thái giao dịch:
            @if($transaction->tr_status==0)
                <b style="font-weight: bold">Đang xử lý</b>
            @elseif($transaction->tr_status==1)
                <b style="font-weight: bold;">Đã gửi hàng</b>
            @elseif($transaction->tr_status==2)
                <b style="font-weight: bold;">Đã nhận hàng</b>
            @else
                <b>Không xác định</b>
            @endif
        </p>
        <?php
            $i=1;
            $total_earn_money=0;
        ?>
        <table class="table table-bordered" style="font-size: 13px;">
            <thead class="thead-dark">
                    <th >STT</th>
                    <th  style="">Sản phẩm</th>
                    <th  >Số lượng</th>
                    <th  >Đơn giá</th>
                    <th  >Giảm giá</th>
                    <th  >Thành tiền</th>
                    <tr></tr>
            </thead>
            <tbody>
                @foreach($transaction->Order as $order)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$order->Product->pro_name}}</td>
                        <td>{{$order->or_qty}}</td>
                        <td>{{number_format($order->or_price,0,',','.')}} VNĐ</td>
                        <td>{{$order->or_sale>0?(number_format($order->or_price*(100-$order->or_sale)/100,0,',','.'))." VNĐ (-".$order->or_sale."%)":"Không giảm giá"}}</td>
                        <td>{{$order->or_sale>0?number_format($order->or_qty*($order->or_price*(100-$order->or_sale)/100),0,'.','.'):number_format($order->or_qty*$order->or_price,0,',','.')}} VNĐ</td>
                        <?php $total_earn_money = $total_earn_money + ($order->or_sale>0?$order->or_qty*($order->or_price*(100-$order->or_sale)/100):$order->or_qty*$order->or_price) ?>   
                    </tr>
                @endforeach         
                    <tr>
                        <td colspan="5" style="text-align: center;font-weight: bold;font-size: 16px;">Tổng tiền:</td>
                        <td colspan="1" style="text-align: center;font-weight: bold;font-size: 16px;">{{number_format($total_earn_money,'0',',','.')}} VNĐ</td>
                    </tr>
            </tbody>
        </table>
        <div style="float: right; text-align: center">
            <span style="font-size: 13px">Hà Nội, ngày {{$day}} tháng {{$month}} năm {{$year}}</span><br/>
            Người xuất giao dịch<br/>
        <br/>
        <br/>
            <span class="margin-top:20px">{{Auth::user()->name}}</span>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
   
</html>