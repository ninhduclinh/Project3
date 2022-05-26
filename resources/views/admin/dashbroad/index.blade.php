@extends('Admin.layout.master')
@section('css')
 <!-- Tempusdominus Bbootstrap 4 -->
 <link rel="stylesheet" href="{{asset('admin_lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
 <!-- iCheck -->
 <link rel="stylesheet" href="{{asset('admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('admin_lte/plugins/jqvmap/jqvmap.min.css')}}">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="{{asset('admin_lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
 <!-- Daterange picker -->
 <link rel="stylesheet" href="{{asset('admin_lte/plugins/daterangepicker/daterangepicker.css')}}">
 <!-- summernote -->
 <link rel="stylesheet" href="{{asset('admin_lte/plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('content')
<span class="chart_seven_days" data-chart="{{$total_price_seven_days_edit}}"></span>
<span class="chart_time_seven_days" data-chart-time="{{$time_chart}}"></span>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content mt-3">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$transaction_number}}</h3>

                <p>Giao dịch chưa xử lí</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('admin.transaction.index')}}" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$number_products}}</h3>

                <p>Sản phẩm</p>
              </div>
              <div class="icon">
                <i class="ion ion-monitor"></i>
              </div>
              <a href="{{route('admin.product.index')}}" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$number_users}}</h3>

                <p>Thành viên</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="{{route('admin.user.index')}}" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$number_articles}}</h3>

                <p>Tin tức</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper-outline"></i>
              </div>
              <a href="{{route('admin.article.index')}}" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">7 ngày bán hàng gần đây</h6>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="myAreaChart" style="height: 320px"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('javascript')
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin_lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="{{asset('admin_lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin_lte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
{{-- <script src="{{asset('admin_lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
<!-- jQuery Knob Chart -->
<script src="{{asset('admin_lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin_lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin_lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin_lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin_lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset('admin_lte/dist/js/pages/dashboard.js')}}"></script> --}}
{{-- chart area --}}
<script src="{{asset('js/chart-area-demo.js')}}"></script> 
<script src="{{asset('js/Chart.min.js')}}"></script> 
@endsection