@extends('customer.layout.master')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="active">Xác nhận đặt hàng</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Checkout Area Strat-->
<div class="checkout-area pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <form method="POST" id="formSaveInfo">
                    @csrf
                    <div class="checkbox-form">
                        <h3>Chi tiết giao dịch</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Họ và tên <span class="required">*</span></label>
                                    <input placeholder="Nhập họ và tên..." type="text" name="name" id ="check_name" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ <span class="required">*</span></label>
                                    <input placeholder="Nhập địa chỉ giao hàng của bạn..." name="address" id="check_address" required type="text">
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="" name="email" type="email">
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Số điện thoại  <span class="required">*</span></label>
                                    <input name="phone" type="text" id="check_phone" placeholder="Nhập số điện thoại của bạn...">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="">
                                    <div class="checkout-form-list">
                                        <label>Ghi chú</label>
                                        <textarea id="checkout-mess" name="note" cols="30" rows="10" required placeholder="Nhập ghi chú..."></textarea>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Giỏ hàng của bạn: </h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Sản phẩm</th>
                                    <th class="cart-product-total">Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr class="cart_item">
                                        <td class="cart-product-name"> {{$product->name}}<strong class="product-quantity"> × {{$product->qty}}</strong></td>
                                        <td class="cart-product-total"><span class="amount">{{number_format($product->price*$product->qty,0,',','.')}} VNĐ</span></td>  
                                    </tr>    
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Tổng tiền thanh toán</th>
                                    <td><span class="amount">{{\Cart::subtotal(0,',','.')}} VNĐ</span></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div class="order-button-payment">
                                <input value="Đặt Hàng" type="submit" id="submitFormSaveInfo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout Area End-->
@endsection
@section('javascript')
    <script>
        $(function(){
            $("#submitFormSaveInfo").click(function(){
                check_name = $("#check_name").val();
                check_address = $("#check_address").val();
                check_phone = $("#check_phone").val();
                check_note = $("#checkout-mess").val();
                if(!check_name || !check_address || !check_phone || !check_note)
                {
                    // swal("Thành công","Thanh toán không thành công","success");
                    swal("Cảnh báo","Yêu cầu bạn nhập dữ liệu đầy đủ để dễ dàng vận chuyển hàng ! Xin cảm ơn đã sử dụng dịch vụ của chúng tôi!","warning");
                }
                else
                {
                    swal({
                    title: "Bạn có chắc chắn?",
                    text: "Các sản phẩm trong giỏ hàng của bạn sẽ được thanh toán ! Các sản phẩm sẽ đợi bên của hàng kiểm tra và gửi về",
                    icon: "info",
                    buttons: ["Không",{
                        text: "Đồng ý",
                        value: true,
                        visible: true,
                        className: "bg-success",
                        closeModal: true
                    }],
                    successMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        swal("Thành công","Bạn đã đặt hàng thành công ! Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi !",'success').then(function() {
                            $("#formSaveInfo").submit();
                        });
                    }
                    });
                }
            });
        });
    </script>
@endsection