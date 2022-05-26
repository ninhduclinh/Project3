@extends('admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Giao Dịch</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Giao Dịch</li>
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
            @if(Session::has('OutOfStock'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Thất bại !</strong> {{Session::get('OutOfStock')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if(Session::has('stopDelete'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Thất bại !</strong> {{Session::get('stopDelete')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <table class="table table-hover table-striped" id="dataTable">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th style="width: 20%">Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th style="width: 20%; ">Ghi chú</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Xử lý</th>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->id}}</td>
                            <td>{{$transaction->User->name}}</td>
                            <td>{{$transaction->tr_address}}</td>
                            <td>{{$transaction->tr_phone}}</td>
                            <td>{{$transaction->tr_note}}</td>
                            <td>{{number_format($transaction->tr_total,0,',','.')}} VNĐ</td>
                            <td>
                              @if($transaction->tr_status==2)
                              <a href="#"><span class="badge badge-success">Đã nhận hàng</span></a>
                              @endif
                              @if($transaction->tr_status==1)
                              <a href="{{route('admin.transaction.paid',$transaction->id)}}"><span class="badge badge-warning text-white">Đã gửi hàng</span></a>
                              @endif
                              @if($transaction->tr_status==0)
                                <a href="{{route('admin.transaction.handle',['send',$transaction->id])}}"><span class="badge badge-danger">Chưa xử lý</span></a>
                              @endif
                            </td>
                            <td style="width: 15%;">
                              <a href="{{route('admin.transaction.handle',['delete',$transaction->id])}}" data-id="{{$transaction->id}}" class="btn_delete_sweet btn btn-danger btn-circle"><i class="fas fa-trash-alt"></i></a>
                              
                              <a href="{{route('admin.get.order.item',$transaction->id)}}" data-id="{{$transaction->id}}" class="js_order_item btn btn-primary btn-circle" data-toggle="modal" data-target="#showOrderItem"> <i class="fas fa-eye"></i></a>
                              
                              <a href="{{route('admin.get.export.transaction',$transaction->id)}}" class="btn btn-success btn-circle"><i class="fa fa-file" aria-hidden="true"></i></a>
                            </td>
                        </tr>
{{-- custom modal by me --}}
<div class="modal fade" id="showOrderItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết đơn hàng #<span class="modal_id_transacrion"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Chưa có dữ liệu hoặc bị lỗi !!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{-- end custom modal by me --}}
                    @endforeach
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
    $(function()
    {
      $(".js_order_item").click(function(event)
      {
        event.preventDefault();
        var id = $(this).attr('data-id');
        var url = $(this).attr('href');
        $.ajax({
          method : "GET",
          url : url
        }).done(function(result)
        {
          if(result)
          {
            $(".modal_id_transacrion").text(id);
            $(".modal-body").html('').append(result);

          }
        });
      });
    });
  </script>
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable({
      "order": [[ 6, "asc" ]],
      "language" : {
        "decimal":        "",
        "emptyTable":     "Không có dữ liệu hiển thị trong bảng",
        "info":           "Đang hiển thị bản ghi _START_ to _END_ trên _TOTAL_ bản ghi",
        "infoEmpty":      "Hiển thị 0 đến 0 của 0 bản ghi",
        "infoFiltered":   "(đã lọc từ _MAX_ total bản ghi)",
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
            text: "Bạn có chắc chắn muốn xóa giao dịch ID="+id+" không ? Điều này sẽ ảnh hưởng đến liên kết dữ liệu !",
            icon: "info",
            buttons: ["Không","Có"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Thành công","Hệ thống chuẩn bị xóa giao mang ID ="+id+" !",'success').then(function() {
                window.location.href = url;
                });
            }
        });
  });
</script>
@endsection