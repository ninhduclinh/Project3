@extends('customer.layout.master')
@section('content')
@if(Session::has('email_not_exist'))
    <span class="check_email_exist" data-check ="0"></span>
@elseif(Session::has('email_exist'))
    <span class="check_email_exist" data-check ="1"></span>
@else
    <span class="check_email_exist" data-check ="2"></span>
@endif
@if(Session::has('success_resetpassword'))
    <span class="success_resetpassword" data-check ="1"></span>
@endif
<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30 mx-auto">
    <!-- Login Form s-->
    <form method="POST" >
        @csrf
        <div class="login-form">
            <h4 class="login-title">Đăng nhập</h4>
                @if (Session::has('errorlogin'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Lỗi!</strong> Sai tài khoản hoặc mật khẩu.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (Session::has('needLogin'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Cảnh báo!!!</strong> Cần đăng nhập sử dụng chức năng này.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            <div class="row">
                <div class="col-md-12 col-12 mb-20">
                    <label>Email*</label>
                    <input class="mb-0" type="email" name="email" placeholder="Nhập địa chỉ email...">
                </div>
                <div class="col-12 mb-20">
                    <label>Mật khẩu</label>
                    <input class="mb-0" type="password" name="password" placeholder="Nhập mật khẩu...">
                </div>
                <div class="col-md-8">
                    
                </div>
                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                    <a href="#" data-toggle="modal" data-target="#reset_password"> Quên mật khẩu?</a>
                </div>
                <div class="col-md-12">
                    <button class="register-button mt-0">Đăng nhập</button>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- Modal lấy lại mật khẩu --}}
<div class="modal fade" id="reset_password" tabindex="-1" role="dialog" aria-labelledby="reset_password" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Lấy lại mật khẩu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('post.reset.password')}}" method="POST" id="form_reset_password">
            @csrf
            <div class="form-group">
                <label> Email khôi phục mật khẩu: </label>
                <input type="email" class="form-control" name="email_reset_password" id="email_reset_password"/>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" id="btn_reset_password">Lấy lại mật khẩu</button>
      </div>
    </div>
  </div>
</div>
{{-- Kết thúc modal lấy lại mật khẩu --}}
@endsection
@section('javascript')
<script>
    function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
        return false;
    }else{
        return true;
    }
    }
    $(function()
    {
        checksuccessresetpassword = $(".success_resetpassword").attr("data-check");
        if(checksuccessresetpassword == 1)
        {
            swal("Thành công !","Bạn đã đổi mật khẩu thành công xin mời đăng nhập !","success");
        }
        checkemail = $(".check_email_exist").attr("data-check");
        if(checkemail == 0)
        {
            swal("Email không tồn tại !","Email bạn vừa nhập không tồn tại trong danh sách thành viên !","error");
        }
        else if(checkemail == 1)
        {
            swal("Thành công !","Link lấy lại mật khẩu đã gửi vào email của bạn !","success");
        }
        $("#btn_reset_password").click(function(event)
        {
            event.preventDefault();
            email_reset_password = $("#email_reset_password").val();
            if(email_reset_password == '')
            {
                swal("Lỗi nhập email","Bạn cần nhập email để lấy lại mật khẩu","error");
            }
            else if(IsEmail(email_reset_password) == false)
            {
                swal("Lỗi định dạng email","Bạn cần nhập đúng email để lấy lại mật khẩu","error");
            }
            else
            {
                $("#form_reset_password").submit();
            }
        });
    });
</script>
@endsection