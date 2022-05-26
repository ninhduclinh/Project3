@extends('customer.layout.master')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="active">Tìm kiếm</li>
            </ul>
        </div>
    </div>
</div>
    @if(count($products)>0)
    <center><h3 class="mt-10">Danh sách tìm kiếm</h3></center>
<div class="col-sm-10 mx-auto">
<!-- shop-products-wrapper start -->
<div class="shop-products-wrapper">
    <div class="tab-content">
        <div id="list-view" class="tab-pane fade product-list-view active show" role="tabpanel">
            <div class="row">
                <div class="col">
                    @foreach($products as $product)
                        <div class="row product-layout-list">
                            <div class="col-lg-3 col-md-5 ">
                                <div class="product-image mb-3">
                                    <a href="{{route('product.index',[$product->pro_name_slug,$product->id])}}">
                                        @if(isset($product->pro_image))
                                        <img src="{{asset('public/upload/pro_image/'.$product->pro_image)}}" alt="Li's Product Image">
                                        @else
                                            <img src="{{asset('noimg.png')}}" alt="Li's Product Image">
                                        @endif
                                    </a>
                                    @if($product->pro_hot == 1)
                                    <span class="sticker">Hot</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-7">
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="#">Tình trạng: 
                                                    @if($product->pro_number > 10)
                                                    <b>Còn hàng</b>
                                                    @elseif($product->pro_number < 10 && $product->pro_number > 0)
                                                        <b>Số lượng gần hết</b>
                                                    @elseif($product->pro_number == 0)
                                                        <b>Hết hàng</b>
                                                    @else
                                                        <b>Không xác định</b> 
                                                    @endif
                                                </a>
                                            </h5>
                                            <div class="rating-box">
                                                <?php
                                                    $point_product_searh= 0;
                                                    if($product->pro_number_of_reviewers>0){
                                                        $point_product_searh= round($product->pro_total_star/$product->pro_number_of_reviewers);
                                                    }
                                                    else {
                                                        $point_product_searh = -1;
                                                    }
                                                ?>
                                                <ul class="rating">
                                                    @if($point_product_searh == -1)
                                                        <li style="color: #a4a4a4;
                                                        font-size: 13px;
                                                        text-transform: capitalize;
                                                        transition: all 0.3s ease-in-out;">Chưa đánh giá</li>
                                                    @else
                                                    Đánh Giá: 
                                                        @for($i=1; $i<=5; $i++)
                                                            <li class="{{$i<=$point_product_searh ? '':'no-star'}}"><i class="fa fa-star"></i></li>
                                                        @endfor
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <h4><a class="product_name" href="{{route('product.index',[$product->pro_name_slug,$product->id])}}">{{$product->pro_name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{number_format($product->pro_price,0,",",".")}} VNĐ</span>
                                        </div>
                                        <p>{{$product->pro_description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="shop-add-action mb-xs-30">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a class="button_add_cart" data-product-name="{{$product->pro_name}}" href="{{route('shopping.add.product',$product->id)}}">Mua sản phẩm</a></li>
                                        <li class="wishlist"><a class="button_add_favorite_product" href="{{route('get.add.favorite.product',$product->id)}}" data-product-name="{{$product->pro_name}}"><i class="fa fa-heart-o"></i>Thêm vào sản phẩm yêu thích</a></li>
                                        <li><a class="quick-view"  href="{{route('product.index',[$product->pro_name_slug,$product->id])}}"><i class="fa fa-eye"></i>Xem chi tiết</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach           
                </div>
            </div>
        </div>
        @else
            <div class="pt-60 pb-60" style="text-align: center; font-size: 20px; color: #a4a4a4">Không tìm kiếm được sản phẩm nào phù hợp !!!</div>
        @endif
    </div>
</div>
<!-- shop-products-wrapper end -->
</div>
@endsection
@section('javascript')
<script>
    $(function(){
        $(".button_add_favorite_product").click(function(event)
        {
            event.preventDefault();
            name_product = $(this).attr("data-product-name");
            url = $(this).attr("href");
            $.ajax(
                {
                    method : "GET",
                    url : url
                }
            ).done(function(result)
            {
                if(result.status == 1)
                {
                    swal("Thành công !","Đã thêm sản phẩm "+name_product+" vào sản phẩm yêu thích của bạn!", "success");
                    $(".wishlist-item-count-custom").text(result.number_favorite_product);
                }
                if(result.status == 0)
                {
                    swal("Có thể bạn chưa biết !", "Sản phẩm "+name_product+" đã tồn tại trong danh sách sản phẩm ưa thích của bạn !", "info");
                }
                if(result.error)
                {
                    swal("Cảnh báo !", "Bạn cần đăng nhập cho chức năng này!", "warning");
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
                    $(".cart-item-count-number").text(result.number_product_in_cart);
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