@csrf
<div class="form-group">
    <label>Tên loại sản phẩm: </label>
    <input type="text" class="form-control" name="c_name" value="{{old('c_name',isset($category->c_name)?$category->c_name:'')}}" placeholder="Nhập tên loại sản phẩm...">
</div>
<div class="form-group row">
    <label class="col-md-2">Trạng thái: </label>
    <div class="form-check  col-md-4">
        <input class="form-check-input" type="radio" name="c_status" value="1" {{isset($category->c_status)?(($category->c_status==1)?'checked':''):'checked'}}>
        <label class="form-check-label" for="c_status">
          Public
        </label>
      </div>
      <div class="form-check  col-md-4">
        <input class="form-check-input" type="radio" name="c_status" value="0" {{isset($category->c_status)?(($category->c_status==1)?'':'checked'):''}}>
        <label class="form-check-label" for="c_status">
          Private
        </label>
      </div>
</div>
<div class="form-group">
    <label>Thuộc tính: </label>
    @foreach($attributes as $attribute)
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="{{$attribute->id}}" {{isset($arrayCategoryAttribute)?((in_array($attribute->id,$arrayCategoryAttribute))?"checked":""):""}}>{{$attribute->at_name}}
      </label>
    </div>
    @endforeach
</div>
<input type="submit" value="Lưu thông tin" class="btn btn-success btn_save_category" style="float: right"/>
<div style="clear: both"></div>
