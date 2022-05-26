@extends('Admin.layout.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slide - Danh sách</h1>
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
            @if(isset($slides))
            <div class="card-body">
            @if(Session::has('create_slide_success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thành công !</strong> {{Session::get('create_slide_success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if(Session::has('edit_slide_success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thành công !</strong> {{Session::get('edit_slide_success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if(Session::has('delete_slide_success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thành công !</strong> {{Session::get('delete_slide_success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <table class="table table-hover table-striped" id="dataTable">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Tên Slide</th>
                    <th>Ảnh</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                    @foreach ($slides as $slide)
                        <tr>
                          <td>{{$slide->id}}</td>
                          <td>{{$slide->s_name}}</td>
                          <td>
                            @if($slide->s_avatar)
                              <img style="width:80px;height:80px" src="{{asset('public/public/upload/s_image/'.$slide->s_avatar)}}" alt="No Avatar"/>
                            @else
                              <img style="width:80px;height:80px" src="{{asset('noimg.png')}}" alt="No Avatar"/>
                            @endif
                          </td>
                          <td>
                            <a href="{{route('admin.slide.edit',$slide->id)}}" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a> &nbsp
                            <a class="btn_delete_sweet btn btn-danger btn-circle" href="{{route('admin.slide.handle',['delete',$slide->id])}}" data-id="{{$slide->id}}"><i class="fas fa-trash-alt"></i></a>
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
                <a class="btn btn-danger" href="{{route('admin.slide.create')}}">Thêm</a>
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
      // "order": [[ 0, "desc" ]],
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
            text: "Bạn có chắc chắn muốn xóa Slide ID="+id+" không ?",
            icon: "info",
            buttons: ["Không","Có"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Thành công","Hệ thống chuẩn bị slide mang ID ="+id+" !",'success').then(function() {
                window.location.href = url;
                });
            }
        });
  });
</script>
@endsection