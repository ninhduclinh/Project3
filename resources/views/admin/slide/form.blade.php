@csrf
<div class="form-group">
    <label>Tên Slide: </label>
    <input type="text" class="form-control" name="s_name" value="{{old('s_name',isset($slide->s_name)?$slide->s_name:'')}}" placeholder="Nhập tên slide...">
</div>
<div class="form-group">
  <label>Ảnh mô tả: </label>
  @if(isset($slide->s_avatar))
      <img  id="img_output" class="form-control" style="width:480px;height:360px; margin-bottom:10px" src="{{asset('public/upload/s_image/'.$slide->s_avatar)}}"/>
  @else
      <img id="img_output" class="form-control" style="width:480px;height:360px; margin-bottom:10px" src="{{asset('noimg.png')}}"/>
  @endif
  <input type="file" id="img_input" class="form-control col-sm-4" name="s_avatar"/>
</div>
<input type="submit" value="Lưu thông tin" class="btn btn-success btn_save_category" style="float: right"/>
<div style="clear: both"></div>
@section('javascript')
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#img_output').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }

  $("#img_input").change(function() {
    readURL(this);
  });
</script>
@endsection
