@csrf
<div class="form-group">
    <label>Tên thành viên: </label>
  <input type="text" class="form-control" name="name" value="{{old('name',isset($user->name)?$user->name:'')}}">
</div>
<div class="form-group">
    <label>Email: </label>
    <input type="email" class="form-control" name="email" value="{{old('email',isset($user->email)?$user->email:'')}}">
</div>
<div class="form-group">
  <label>Số điện thoại: </label>
  <input type="text" class="form-control" name="phone" value="{{old('phone',isset($user->phone)?$user->phone:'')}}">
</div>
<input type="submit" class="btn btn-success btn_save_user" value="Lưu thông tin"/>
