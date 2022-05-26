@extends('Admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Loại sản phẩm - Danh sách</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Loại sản phẩm - Danh sách</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
            @if(isset($categories))
            <div class="card-body">
            @if(Session::has('create_category_success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thành công !</strong> {{Session::get('create_category_success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if(Session::has('edit_category_success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thành công !</strong> {{Session::get('edit_category_success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if(Session::has('delete_category_success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thành công !</strong> {{Session::get('delete_category_success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <table class="table table-hover table-striped" id="dataTable">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Tên loại sản phẩm</th>
                    <th style="width: 11%;">Trạng thái</th>
                    <th>Thuộc tính</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                          <td>{{$category->id}}</td>
                          <td>{{$category->c_name}}</td>
                          <td style="text-align: center"><a href="{{route('admin.category.handle',['status',$category->id])}}" class="badge badge-{{($category->c_status==1)?"success":"danger"}}">{{($category->c_status==1)?"Công khai":"Riêng tư"}}</a></td>
                          <td>
                            <ul>
                            @foreach ($category->Attributes as $at)
                              <li>{{$at->at_name}}</li>
                            @endforeach
                            </ul>
                          </td>
                          <td>
                            <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a>
                             &nbsp;
                            <a class="btn_delete_sweet btn btn-danger btn-circle" href="{{route('admin.category.handle',['delete',$category->id])}}" data-id="{{$category->id}}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        @endif
      </div>
      <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a class="btn btn-danger" href="{{route('admin.category.create')}}" class="nav-link {{(request()->is('admin/category/create'))?"active":""}}">Thêm</a>
            </div>
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
      "order": [[ 0, "asc" ]],
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
<script>
  $(".btn_delete_sweet").click(function(e)
  {
    e.preventDefault();
    url = $(this).attr('href');
    id = $(this).attr('data-id');
    swal({
            title: "Bạn có chắc chắn?",
            text: "Bạn có chắc chắn muốn xóa loại sản phẩm ID="+id+" không ? Điều này sẽ ảnh hưởng đến liên kết dữ liệu ! Bạn có thể chuyển trạng thái sang private để ngừng hiển thị sản phẩm ở giao diện khách hàng !! Xin cảm ơn !!!",
            icon: "info",
            buttons: ["Không","Có"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Thành công","Hệ thống chuẩn bị xóa loại sản phẩm mang ID ="+id+" !",'success').then(function() {
                window.location.href = url;
                });
            }
        });
  });
</script>
@endsection