@extends('Admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thuộc tính - Danh sách</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thuộc tính - Danh sách</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        @if(isset($attributes))
        <div class="card-body">
          @if(Session::has('create_attribute_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Thành công !</strong> {{Session::get('create_attribute_success')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          @if(Session::has('edit_attribute_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Thành công !</strong> {{Session::get('edit_attribute_success')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          @if(Session::has('delete_attribute_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Thành công !</strong> {{Session::get('delete_attribute_success')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
            <table class="table table-hover table-striped" id="dataTable">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Tên thuộc tính</th>
                    <th>Kiểu</th>
                    <th>Giá trị</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                    @foreach ($attributes as $attribute)
                        <tr>
                          <td>{{$attribute->id}}</td>
                          <td>{{$attribute->at_name}}</td>
                          <td>{{$attribute->at_type}}</td>
                          <td>
                            @if($attribute->at_value)
                              <ul>
                              @foreach(explode(';',$attribute->at_value) as $attr)
                                <li>{{$attr}}</li>
                              @endforeach
                              </ul>
                            @endif
                          </td>
                          <td>
                            <a href="{{route('admin.attribute.edit',$attribute->id)}}" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a>
                             &nbsp;
                            <a href="{{route('admin.attribute.handle',['delete',$attribute->id])}}" data-id="{{$attribute->id}}" class="btn_delete_sweet btn btn-danger btn-circle"><i class="fas fa-trash-alt"></i></a>
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
                <a class="btn btn-danger" href="{{route('admin.attribute.create')}}" class="nav-link {{(request()->is('admin/attribute/create'))?"active":""}}">Thêm</a>
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
      "order": [[ 0, "desc" ]],
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
    id= $(this).attr('data-id');
    swal({
            title: "Bạn có chắc chắn?",
            text: "Bạn có chắc chắn muốn xóa thuộc tính ID="+id+" không ? Xin cảm ơn !!!",
            icon: "info",
            buttons: ["Không","Có"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Thành công","Hệ thống chuẩn bị xóa thuộc tính mang ID ="+id+" !",'success').then(function() {
                window.location.href = url;
                });
            }
        });
  });
</script>
@endsection