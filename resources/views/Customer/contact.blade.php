@extends('customer.layout.master')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                < class="active">Liên hệ</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here --> 
<!-- Begin Contact Main Page Area -->
<div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
    <div class="container mb-60">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6409443025937!2d105.840947314883!3d21.00702528601013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76ccab6dd7%3A0x55e92a5b07a97d03!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1642066197648!5m2!1svi!2s" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 order-1 order-lg-2">
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Liên lạc với chúng tôi</h3>
                    <p class="contact-page-message mb-25">Mọi thắc mắc và câu hỏi xin liên hệ với chúng tôi qua địa chỉ dưới đây</p>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Địa chỉ</h4>
                        <p>Ngõ 1 -Tạ Quang Bửu -Hai Bà Trưng Hà Nội</p>
                    </div>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Số điện thoại</h4>
                        <p>Mobile: 0392242010</p>
                        <p>Hotline: 1900101998</p>
                    </div>
                    <div class="single-contact-block last-child">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        <p>long98@gmail.com</p>
                        <p>trang98@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Main Page Area End Here -->
@endsection