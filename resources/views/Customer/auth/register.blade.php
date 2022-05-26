@extends('customer.layout.master')
@section('content')
<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 mx-auto">
    <form method="POST">
        @csrf
        <div class="login-form">
            <h4 class="login-title">Đăng ký</h4>
                @if (Session::has('errorconfirmpassword'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Lỗi!</strong> Mật khẩu nhập lại không trùng nhau.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (Session::has('successregister'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Thành công!</strong> Bạn đã đăng ký thành công !!!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            <div class="row">
                <div class="col-md-12 col-12 mb-20">
                    <label>Họ và tên</label>
                    <input class="mb-0" type="text" name="name" required placeholder="Nhập họ và tên của bạn...">
                </div>
                <div class="col-md-12 mb-20">
                    <label>Email*</label>
                    <input class="mb-0" type="email" name="email" required placeholder="Nhập địa chỉ email của bạn...">
                </div>
                <div class="col-md-6 mb-20">
                    <label>Mật khẩu</label>
                    <input class="mb-0" type="password" name="password" required placeholder="Nhập mật khẩu của bạn...">
                </div>
                <div class="col-md-6 mb-20">
                    <label>Nhập lại mật khẩu</label>
                    <input class="mb-0" type="password" name="confirmpassword" required placeholder="Nhập lại mật khẩu của bạn...">
                </div>
                <div class="col-12">
                    <button class="register-button mt-0">Đăng ký</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection