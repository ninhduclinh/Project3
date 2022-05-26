@extends('customer.layout.master')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="active">Giỏ hàng</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Thành công!</strong> {{\Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                @if(\Session::has('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Thất bại!</strong> {{\Session::get('warning')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">Xóa</th>
                                    <th class="li-product-thumbnail">Ảnh</th>
                                    <th class="cart-product-name">Tên sản phẩm</th>
                                    <th class="li-product-price">Giá</th>
                                    <th class="li-product-quantity">Số lượng</th>
                                    <th class="li-product-subtotal">Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key=>$product)
                                <tr>
                                    <td class="li-product-remove"><a href="{{route('shopping.delete.product',$key)}}"><i class="fa fa-times"></i></a></td>
                                    @if($product->options->image)
                                        <td class="li-product-thumbnail" style="width: 16%"><a href="#"><img style="width: 100%; height: 150px;" src="{{asset('public/upload/pro_image/'.$product->options->image)}}" alt="Li's Product Image"></a></td>
                                    @else
                                        <td class="li-product-thumbnail" style="width: 16%"><a href="#"><img style="width: 100%; height: 150px;" src="{{asset('noimg.png')}}" alt="Li's Product Image"></a></td>
                                    @endif
                                    <td class="li-product-name"><a href="#">{{$product->name}}</a></td>
                                    <td class="li-product-price"><span class="amount">{{number_format($product->price,2,',','.')}} VNĐ</span></td>
                                    <td class="quantity">
                                        <form action="{{route('shopping.edit.product')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="pro_id" value="{{$product->id}}"/>
                                            <span style="color: #242424l;font-size: 16px;font-weight: 700;">{{$product->qty}} Sản phẩm</span>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="{{$product->qty}}" name="number_product_edit" type="number" min="0" max="10">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            </div>
                                            <button class="btn btn-primary mt-2">Cập nhật</button>
                                        </form>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">{{number_format($product->price*$product->qty,2,',','.')}} VNĐ<br/> Thành: {{number_format($product->price*$product->qty,0,',','.')}} VNĐ</span></td>
                                </tr>                                   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Tổng tiền cần thanh toán:</h2>
                                <ul>
                                    <li>Tổng <span>{{\Cart::subtotal(0,',','.')}} VNĐ</span></li>
                                </ul>
                                @if(\Cart::subtotal()>0)
                                <a href="{{route('feature.user.checkout')}}" style="float: right">Xác nhận đặt hàng</a>
                                @endif
                                <div style="clear: both"></div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!--Shopping Cart Area End-->
@endsection