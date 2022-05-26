@extends('admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Báo cáo - Thống kê</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Báo cáo - Thống kê</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div style="text-align: center">
            <form class="form-inline" style="width: 917px; margin: 0 auto" action="#">
            <div class="form-group">
                <label>Ngày bắt đầu: &nbsp</label>
                <input type="datetime-local" value="02/27/2020 00:00:00" name="statistical_date_start" required id="statistical_date_start" class="form-control mr-1"/>
            </div>
            <a href="{{route('admin.get.list.statistical')}}" value="Thống kê" class="btn btn-primary ml-5 mr-5" id="button_statistical">Thống kê</a>
            <div class="form-group">
                <label>Ngày kết thúc: &nbsp</label>
                <input type="datetime-local" value="02/27/2020 23:59:59" name="statistical_date_end" required id="statistical_date_end" class="form-control ml-1"/>
            </div>
            {{-- <input type="submit" value="Xuất pdf" class="btn btn-success" style=""/> --}}
            </form>
            <hr/>
            <a href="#" class="btn btn-success mb-2" id="export_pdf" style="float:right;display:none">Xuất báo cáo</a>
            <div style="clear: both"></div>
            <div id="list_render_statistical">Không có dữ liệu !!!</div>
        </div>
    </section>
    <!-- /.content -->
</div>
 <!-- /.content-wrapper -->
@endsection
@section('javascript')
  <script>
    $(function(){
      $("#button_statistical").click(function(event){
        event.preventDefault();
        var statistical_date_start = $("#statistical_date_start").val();
        var statistical_date_end = $("#statistical_date_end").val();
        var url = $(this).attr('href');
        console.log(statistical_date_start);
        console.log(statistical_date_end);
        if(statistical_date_start == '' || statistical_date_end == ''){
            alert("Kiểm tra lại dữ liệu nhập có đầy đủ hay không!");
        }
        else if(statistical_date_start === statistical_date_end){
            alert("Ngày bắt đầu và ngày kết thúc cùng 1 thời điểm!");
        }
        else if(statistical_date_start > statistical_date_end){
          alert("Ngày bắt đầu không thể trước ngày kết thúc!");
        }
        else if(statistical_date_start < statistical_date_end){
        $.ajax({
          type : "GET",
          url : url,
          data : {
            statistical_date_start : statistical_date_start,
            statistical_date_end   : statistical_date_end
          }
        }).done(function(result){

          $("#list_render_statistical").html('').append(result);
          $("#export_pdf").css({'display':''})
        });              
        }
        else{
            console.log("Giá trị nhập sai kiểm tra lại");
        }
        });
        $("#export_pdf").click(function(event){
        event.preventDefault();
        var statistical_date_start_pdf = $("#data-statistical-date-start").attr('data-statistical-date-start');
        var statistical_date_end_pdf = $("#data-statistical-date-end").attr('data-statistical-date-end');
        var url = "{{route('admin.get.export.statistical')}}";
        window.location.href = url+'?statistical_date_start_pdf='+statistical_date_start_pdf+'&&'+'statistical_date_end_pdf='+statistical_date_end_pdf;
      });
    });
  </script>
@endsection