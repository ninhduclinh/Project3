@extends('customer.layout.master')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="active">Sản phẩm yêu thích</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Wishlist Area Strat-->
<div class="wishlist-area pt-60 pb-60">
    <div class="container">
        <h4><center>DANH SÁCH SẢN PHẨM YÊU THÍCH CỦA BẠN </center></h4>
        <div class="row" style="margin-top: 3%">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">Xóa</th>
                                    <th class="li-product-thumbnail">Image</th>
                                    <th class="cart-product-name">Tên sản phẩm</th>
                                    <th class="li-product-price">Giá</th>
                                    <th class="li-product-stock-status">Tình trạng</th>
                                    <th class="li-product-add-cart">Thêm vào giỏ hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class="li-product-remove"><a href="{{route('get.delete.favorite.product',$product->id)}}" data-product-name="{{$product->pro_name}}" class="delete_favorite_product"><i class="fa fa-times"></i></a></td>
                                        <td class="li-product-thumbnail"><a href="#"><img width="200px" src="{{asset('public/upload/pro_image/'.$product->pro_image)}}" alt=""></a></td>
                                        <td class="li-product-name"><a href="#">{{$product->pro_name}}</a></td>
                                        <td class="li-product-price"><span class="amount">{{number_format($product->pro_price,2,',','.')}} VNĐ</span></td>
                                        <td class="li-product-stock-status">
                                            @if($product->pro_number > 10)
                                            <b>Còn hàng</b>
                                            @elseif($product->pro_number < 10 && $product->pro_number > 0)
                                                <b>Số lượng gần hết</b>
                                            @elseif($product->pro_number == 0)
                                                <b>Hết hàng</b>
                                            @else
                                                <b>Không xác định</b> 
                                            @endif
                                        </td>
                                        <td class="li-product-add-cart"><a data-product-name="{{$product->pro_name}}" class="button_add_cart" href="{{route('shopping.add.product',$product->id)}}">Mua hàng</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Wishlist Area End-->
@endsection
@section('javascript')
<script>
    $(function()
    {
        $(".delete_favorite_product").click(function(event)
        {
            event.preventDefault();
            url = $(this).attr("href");
            name_product = $(this).attr("data-product-name");
            swal({
            title: "Bạn có chắc chắn?",
            text: "Bạn có chắc chắn xóa sản phẩm "+name_product+" khỏi danh sách yêu thích!",
            icon: "info",
            buttons: ["Không","Có"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Thành công","Hệ thống chuẩn bị xóa sản phẩm này khỏi danh sách yêu thích của bạn !",'success').then(function() {
                    window.location.href = url;
                });
            }
            });
        });
        $(".button_add_cart").click(function(event)
        {
            event.preventDefault();
            url = $(this).attr("href");
            name_product = $(this).attr("data-product-name");
            $.ajax(
                {
                    method : "GET",
                    url : url
                }
            ).done(function(result)
            {
                if(result.status == 1)
                {
                    swal("Thành công !","Đã thêm sản phẩm "+name_product+" vào giỏ hàng !", "success");
                    $(".cart-item-count").text(result.number_product_in_cart);
                    $(".price_total_cart").text(result.price_total_cart);
                }
                if(result.status == 2)
                {
                    swal("Cảnh báo !", "Trong kho chỉ còn "+result.product_less+" sản phẩm "+name_product, "warning");
                }
                if(result.status == 3)
                {
                    swal("Cảnh báo !", "Sản phẩm "+name_product+" không tồn tại !", "warning");
                }
                if(result.status == 4)
                {
                    swal("Cảnh báo !", "Sản phẩm "+name_product+" đã hết hàng !", "warning");
                }
                if(result.error)
                {
                    swal("Cảnh báo !", "Bạn cần đăng nhập cho chức năng này!", "warning");
                }
            });
        });
    });
</script>
@endsection