<!-- Begin Header Area -->
<header>
    <!-- Begin Header Top Area -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Begin Header Top Left Area -->
                <div class="col-lg-3 col-md-4">
                    <div class="header-top-left">
                        <ul class="phone-wrap">
                            <li><span>Số điện thoại:</span><a href="#">0392242010</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top Left Area End Here -->
                <!-- Begin Header Top Right Area -->
                <div class="col-lg-9 col-md-8">
                    <div class="header-top-right">
                        <ul class="ht-menu">
                            <!-- Begin Setting Area -->
                            @if(Auth::check())
                            <li>
                                {{Auth::user()->name}}
                            </li>
                            @endif
                            <li>
                                <div class="ht-setting-trigger"><i class="fa fa-user">Tài khoản</i></div>
                                <div class="setting ht-setting">
                                    <ul class="ht-setting-list">
                                        @if(Auth::check())
                                            <li><a href="{{route('favorite.product.index')}}">Sản phẩm yêu thích</a></li>
                                            <li><a href="{{route('history.index')}}">Lịch sử mua hàng</a></li>
                                            <li><a href="{{route('get.logout')}}">Đăng xuất</a></li>
                                        @else
                                            <li><a href="{{route('get.login')}}">Đăng nhập</a></li>
                                            <li><a href="{{route('get.register')}}">Đăng kí</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </li>
                            <!-- Setting Area End Here -->
                            <!-- Begin Currency Area -->
                            {{-- <li>
                                <span class="currency-selector-wrapper">Currency :</span>
                                <div class="ht-currency-trigger"><span>USD $</span></div>
                                <div class="currency ht-currency">
                                    <ul class="ht-setting-list">
                                        <li><a href="#">EUR €</a></li>
                                        <li class="active"><a href="#">USD $</a></li>
                                    </ul>
                                </div>
                            </li> --}}
                            <!-- Currency Area End Here -->
                            <!-- Begin Language Area -->
                            {{-- <li>
                                <span class="language-selector-wrapper">Language :</span>
                                <div class="ht-language-trigger"><span>English</span></div>
                                <div class="language ht-language">
                                    <ul class="ht-setting-list">
                                        <li class="active"><a href="#"><img src="{{asset('images/menu/flag-icon/1.jpg')}}" alt="">English</a></li>
                                        <li><a href="#"><img src="{{asset('images/menu/flag-icon/2.jpg')}}" alt="">Français</a></li>
                                    </ul>
                                </div>
                            </li> --}}
                            <!-- Language Area End Here -->
                        </ul>
                    </div>
                </div>
                <!-- Header Top Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Top Area End Here -->
    <!-- Begin Header Middle Area -->
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
        <div class="container">
            <div class="row">
                <!-- Begin Header Logo Area -->
                <div class="col-lg-3">
                    <div class="logo pb-sm-30 pb-xs-30">
                        <a href="{{route('home')}}">
                            <img src="{{asset('images/menu/logo/1.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Header Logo Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                    <!-- Begin Header Middle Searchbox Area -->
                    <form action="{{route('searh.index')}}" class="hm-searchbox" method="GET">
                        <select class="nice-select select-search-category" name="searh_category_id">
                            <option value="0">Tất cả</option>  
                            @foreach($categories_searh as $category)
                                <option value="{{$category->id}}">{{$category->c_name}}</option>
                            @endforeach                       
                        </select>
                        <input type="text" placeholder="Nhập giá trị tìm kiếm ..." name="searh_key">
                        <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <!-- Header Middle Searchbox Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="header-middle-right">
                        <ul class="hm-menu">
                            <!-- Begin Header Middle Wishlist Area -->
                            @if(Auth::check())
                            {{-- <li class="hm-wishlist">
                                <a href="{{route('favorite.product.index')}}">
                                    <span class="cart-item-count wishlist-item-count wishlist-item-count-custom">{{Auth::user()->FavoriteProduct->count()}}</span>
                                    <i class="fa fa-heart-o"></i>
                                </a>
                            </li> --}}
                            <li class="hm-wishlist">
                                <a href="#" data-toggle="modal" data-target="#exampleModal">
                                    <span class="cart-item-count wishlist-item-count">{{Auth::user()->NofiticationReceive->count()}}</span>
                                    <i class="fa fa-bell-o  "></i>
                                </a>
                                
                            </li>
                            @endif
                            <!-- Header Middle Wishlist Area End Here -->
                            <!-- Begin Header Mini Cart Area -->
                            <li class="hm-minicart">
                                <a href="{{route('shopping.cart.index')}}">
                                    <div class="hm-minicart-trigger">
                                        <span class="item-icon"></span>
                                        <span class="item-text"><span class="price_total_cart">{{\Cart::subtotal(0,',','.')}}</span> VNĐ
                                            <span class="cart-item-count cart-item-count-number">{{\Cart::count()}}</span>
                                        </span>
                                    </div>
                                </a>
                                {{-- <span></span>
                                <div class="minicart">
                                    <ul class="minicart-product-list">
                                        <li>
                                            <a href="single-product.html" class="minicart-product-image">
                                                <img src="{{asset('images/product/small-size/3.jpg')}}" alt="cart products">
                                            </a>
                                            <div class="minicart-product-details">
                                                <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                <span>£80 x 1</span>
                                            </div>
                                            <button class="close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <a href="single-product.html" class="minicart-product-image">
                                                <img src="{{asset('images/product/small-size/4.jpg')}}" alt="cart products">
                                            </a>
                                            <div class="minicart-product-details">
                                                <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                <span>£80 x 1</span>
                                            </div>
                                            <button class="close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </li>
                                    </ul>
                                    <p class="minicart-total">SUBTOTAL: <span>£160</span></p>
                                    <div class="minicart-button">
                                        <a href="{{route('shopping.cart.index')}}" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                            <span>View Full Cart</span>
                                        </a>
                                        <a href="checkout.html" class="li-button li-button-fullwidth li-button-sm">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div> --}}
                            </li>
                            <!-- Header Mini Cart Area End Here -->
                        </ul>
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Middle Area End Here -->
    <!-- Begin Header Bottom Area -->
    <div class="header-bottom header-sticky d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Header Bottom Menu Area -->
                    <div class="hb-menu hb-menu-2 d-xl-block">
                        <nav>
                            <ul>
                                <li class="dropdown-holder"><a href="{{route('home')}}"><strong>Trang chủ</strong></a>
                                    {{-- <ul class="hb-dropdown">
                                        <li><a href="index.html">Home One</a></li>
                                        <li class="active"><a href="index-2.html">Home Two</a></li>
                                        <li><a href="index-3.html">Home Three</a></li>
                                        <li><a href="index-4.html">Home Four</a></li>
                                    </ul> --}}
                                </li>
                                <li class="megamenu-holder"><a href="{{route('article.index')}}"><strong>Bài viết</strong></a>
                                </li>
                                <li><a href="{{route('about.us')}}"><strong>Giới thiệu</strong></a></li>
                                <li><a href="{{route('contact')}}"><strong>Liên hệ</strong></a></li>
                                <!-- Begin Header Bottom Menu Information Area -->
                                <li class="hb-info f-right p-0 d-sm-none d-lg-block">
                                    <span> Ngõ 1-Tạ Quang Bửu-Hai Bà Trưng -Hà Nội</span>
                                </li>
                                <!-- Header Bottom Menu Information Area End Here -->
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Bottom Menu Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Area End Here -->
    <!-- Begin Mobile Menu Area -->
    <div class="mobile-menu-area d-lg-none d-xl-none col-12">
        <div class="container"> 
            <div class="row">
                <div class="mobile-menu">
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End Here -->
</header>
<!-- Header Area End Here -->
{{-- Modal nofition --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @if(Auth::check())
        <div class="modal-body">
            @if(Auth::user()->NofiticationReceive->count()>0)
                @foreach(Auth::user()->NofiticationReceive->sortByDesc('created_at') as $nofitication)
                    <div style="display: flex">
                        <div class="col-sm-1">
                            <a href="{{route('feature.user.delete.nofication',$nofitication->id)}}">Xóa</a>
                        </div>
                        <div class="col-sm-11">
                            <div><b>{{$nofitication->created_at}}</b></div>
                            {!!$nofitication->nof_content!!}
                        </div>
                    </div>
                    <hr style="margin: 15px 0px"/>
                @endforeach 
            @else
                <div style="display: flex">
                    Không có thông báo gì cả !!!
                </div>
                <hr style="margin: 15px 0px"/>
            @endif 
        </div>
        @endif
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
{{-- End Modal nofition --}}