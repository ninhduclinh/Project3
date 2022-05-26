@extends('Admin.layout.master')
@section('content')
<style>
  .rating .active{
    color: #ff9705 !important;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kho hàng - Hàng bán chạy</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Kho hàng - Hàng bán chạy</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <table class="table table-hover table-striped" id="dataTable">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th style="width:28%">Tên sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Ảnh</th>
                    <th>số lượng sản phẩm đã bán</th>
                    <th style="width: 10%;">Nổi bật</th>
                </thead>
                <tbody>
                  @if(isset($product_best_seller))
                    @foreach($product_best_seller as $product)
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>
                          <b>{{$product->pro_name}}</b><br/>
                        </td>
                        <td>{{$product->Category->c_name}}</td>
                        <td>
                          @if($product->pro_image)
                            <img style="width:80px;height:80px" src="{{asset('public/upload/pro_image/'.$product->pro_image)}}" alt="No Avatar"/>
                          @else
                          <img style="width:80px;height:80px" src="{{asset('noimg.png')}}" alt="No Avatar"/>
                          @endif
                        </td>
                        <td style="text-align: center">{{$product->pro_pay}} sản phẩm</td>
                        <td style="text-align: center">
                            <a href="{{route('admin.warehouse.hotproduct',$product->id)}}" class="badge badge-{{($product->pro_hot==1)?"success":"secondary"}}">{{($product->pro_hot==1)?"Có":"Không"}}</a>
                        </td>    
                      </tr>
                    @endforeach
                  @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
 <!-- /.content-wrapper -->

@endsection
@section('javascript')
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable({
      "order": [[ 4, "desc" ]],
      "language" : {
        "decimal":        "",
        "emptyTable":     "Không có dữ liệu hiển thị trong bảng",
        "info":           "Đang hiển thị bản ghi _START_ đến _END_ trên _TOTAL_ bản ghi",
        "infoEmpty":      "Hiển thị 0 đến 0 của 0 bản ghi",
        "infoFiltered":   "(đã lọc từ _MAX_ bản ghi)",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "Hiển thị _MENU_ bản ghi",
        "loadingRecords": "Đang tải...",
        "processing":     "Đang xử lý...",
        "search":         "Tìm kiếm:",
        "zeroRecords":    "Không có bản ghi nào được tìm thấy",
        "paginate": {
            "first":      "Đầu",
            "last":       "Cuối",
            "next":       "Tiếp",
            "previous":   "Trước"
        },
        "aria": {
            "sortAscending":  ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
        }
      }
    });
  });
</script>
@endsection