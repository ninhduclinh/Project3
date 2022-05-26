@csrf
<div class="row">
  <div class="col-md-8 pl-3 pr-3">
    <div class="form-group">
      <label>Tên sản phẩm: </label>
      <input type="text" class="form-control" name="pro_name" value="{{old('pro_name',isset($product)?$product->pro_name:"")}}" placeholder="Nhập tên sản phẩm...">
    </div>
    <div class="form-group" style="display: none">
      <label>Mô tả sản phẩm: </label>
      <textarea name="pro_description" placeholder="Nhập mô tả sản phẩm..." rows="3" class="form-control">{{old('pro_description',isset($product->pro_description)?$product->pro_description:"")}}Bỏ qua</textarea>
    </div>
    <div class="form-group">
      <label>Nội dung sản phẩm: </label>
      <textarea name="pro_content" id="ckeditor" rows="5" class="form-control" placeholder="Nhập nội dung sản phẩm...">{{old('pro_content',isset($product->pro_content)?$product->pro_content:"")}}</textarea>
    </div>
    <div id="attribute_for_product">
    </div>
  </div>
  <div class="col-md-4 pl-3 pr-3">
    <div class="form-group">
      <label>Loại sản phẩm</label>
      <select name="pro_category_id" id="select_pro_category_id" class="form-control">
        <option value="">---------- Chọn loại sản phẩm ----------</option>
        @foreach($categories as $key => $category)
          <option value="{{$category->id}}" {{old('pro_category_id',isset($product->pro_category_id)?(($product->pro_category_id==$category->id)?"selected":""):"")}}>{{$category->c_name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Giá sản phẩm: </label>
      <input type="number" class="form-control" name="pro_price" value="{{old('pro_price',isset($product->pro_price)?$product->pro_price:"")}}" placeholder="Nhập giá sản phẩm...">
    </div>
    <div class="form-group">
      <label>Giảm giá: </label>
      <input type="number" class="form-control" name="pro_sale" value="{{old('pro_sale',isset($product->pro_sale)?$product->pro_sale:"")}}" placeholder="Giảm giá sản phẩm...">
    </div>
    <div class="form-group">
      <label>Ảnh minh họa:</label>
      @if(isset($product->pro_image))
          <img  id="img_output" style="width:240px;height:180px; margin-bottom:10px" src="{{asset('/public/upload/pro_image/'.$product->pro_image)}}"/>
      @else
          <img id="img_output" style="width:240px;height:180px; margin-bottom:10px" src="{{asset('unimg.jpg')}}"/>
      @endif
      <input type="file" name="pro_image" id="img_input" class="form-control"/>
    </div>
  </div>
</div>
<input type="submit" value="Lưu thông tin" class="btn btn-success mr-3 btn_save_product" style="float: right"/>
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
  <script>
    $(function(){
      $("#select_pro_category_id").change(function(){
        var selected = $(this).children("option:selected").val();
        var url  = "{{route('admin.ajax.get.attribute')}}";
        if(selected != ''){
          $.ajax(
            {
              type : "GET",
              url : url,
              data : {
                pro_category_id : selected
              }
            }
          ).done(function(result){
            $("#attribute_for_product").html('').append(result);
          });
        }
      });
      // get category current
      var valueCategoryCurrent= $("#select_pro_category_id").children("option:selected").val();
      var url  = "{{route('admin.ajax.get.attribute')}}";
      var id = "{{isset($product)?$product->id:"0"}}"
      $.ajax(
            {
              type : "GET",
              url : url,
              data : {
                pro_category_id : valueCategoryCurrent,
                id : id
                
              }
            }
          ).done(function(result){
            $("#attribute_for_product").html('').append(result);
          });
    });
  </script>
  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script>
      CKEDITOR.replace( 'ckeditor' );
  </script>
@endsection
