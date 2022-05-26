@csrf
<div class="form-group">
    <label>Tên nhà kho </label>
    <input type="text" class="form-control" name="wh_name" value="{{old('wh_name',isset($warehouse->wh_name)?$warehouse->wh_name:'')}}" placeholder="Nhập tên nhà kho...">
</div>
<div class="form-group">
    <label>Địa chỉ </label>
    <input type="text" class="form-control" name="wh_adr" value="{{old('wh_adr',isset($warehouse->wh_adr)?$warehouse->wh_adr:'')}}" placeholder="Nhập địa chỉ...">
</div>
<input type="submit" value="Lưu thông tin" class="btn btn-success btn_save_attribute"  style="float: right"/>
<div style="clear: both"></div>
@section('javascript')
  <script>
    $(function(){
      // change selected box
      $("#selectForAttribute").change(function(){
        //*get selected value
        var selected = $(this).children("option:selected").val();
        //*if value not equal(text;number;numberfloat) - display value textarea
        if(selected !="text" || selected !="number" || selected !="numberfloat"){
          $("#textAreaForAttribute").css({'display':''});
        }
        //*if value equal(text;number;numberfloat) - no display value textarea
        if(selected =="number" || selected =="text" || selected =="numberfloat"){
          $("#textAreaForAttribute").css({'display':'none'});
          //**reset value textarea
          $("#contentTextAreaForAttribute").val('');
        }
      });
      //check current selected of selectbox
      var curentSelectedForAttribute = $("#selectForAttribute").children("option:selected").val();
      //*if value not equal(text;number;numberfloat) - display value textarea
      if(curentSelectedForAttribute !="text" || curentSelectedForAttribute !="number" || curentSelectedForAttribute !="numberfloat"){
        $("#textAreaForAttribute").css({'display':''});
      }
       //*if valuet equal(text;number;numberfloat) -  no display value textarea
      if(curentSelectedForAttribute =="number" || curentSelectedForAttribute =="text" || curentSelectedForAttribute =="numberfloat"){
        $("#textAreaForAttribute").css({'display':'none'});
      }
    });
  </script>
@endsection
