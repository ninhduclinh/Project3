@extends('Admin.layout.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thành viên - Danh sách</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Thành viên - Danh sách</li>
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
                    @if (Session::has('create_user_success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Thành công !</strong> {{ Session::get('create_user_success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (Session::has('edit_user_success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Thành công !</strong> {{ Session::get('edit_user_success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (Session::has('delete_user_success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Thành công !</strong> {{ Session::get('delete_user_success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-hover table-striped" id="dataTable">
                        <thead class="thead-dark">
                            <th>ID</th>
                            <th>name</th>
                            <th>email</th>
                            <th>Số điện thoại</th>
                            <th style="width: 12%;">Quyền hạn</th>
                            <th style="width: 18%; text-align: center">action</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td style="text-align: center"><b
                                            href="{{ route('admin.user.action', ['role', $user->id]) }}"><span
                                                class="badge badge-{{ $user->role == 1 ? 'success' : 'secondary' }}">{{ $user->role == 1 ? 'Admin' : 'Khách hàng' }}</span></b>
                                    </td>
                                    <td style="width: 16%">
                                        <a href="{{ route('admin.user.edit', $user->id) }}"
                                            class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a> &nbsp;
                                        <a href="{{ route('admin.user.action', ['delete', $user->id]) }}"
                                            class="btn_delete_sweet btn btn-danger btn-circle" data-id="{{ $user->id }}"><i
                                                class="fas fa-trash-alt"></i></a> &nbsp;
                                        <a href="{{ route('admin.change.password', $user->id) }}"
                                            class="button_change_password btn btn-warning btn-circle"
                                            data-email='{{ $user->email }}' data-toggle="modal"
                                            data-target="#exampleModalCenter"><i class="fas fa-key"></i></a>
                                    </td>
                                </tr>
                                {{-- custom modal by me --}}
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Đổi mật khẩu tài khoản
                                                    <span class="model_change_password_email"></span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    Mật khẩu mới:
                                                    <input type="password" name="new_password" minlength="3"
                                                        class="form-control new_password_class">
                                                </div>
                                                <div>
                                                    Nhập lại mật khẩu mới:
                                                    <input type="password" name="confirm_password" minlength="3"
                                                        class="form-control confirm_password_class">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-success mt-2 button_appect_change_password"
                                                        style="float: right">Lưu mật khẩu</button>
                                                    <div style="clear: both"></div>
                                                </div>
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
            <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a class="btn btn-danger" href="{{route('admin.user.create')}}" class="nav-link {{(request()->is('admin/user/create'))?"active":""}}">Thêm</a>
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
        $(document).ready(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: false,
                {{--ajax: "{{ route('datatable.example') }}",--}}
                columns: [{
                        data: 'id',
                        name: 'name'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'role',
                        name: 'role'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,

                    },
                ],
                "order": [
                    [0, "desc"]
                ],
                "language": {
                    "decimal": "",
                    "emptyTable": "Không có dữ liệu hiển thị trong bảng",
                    "info": "Đang hiển thị bản ghi _START_ đến _END_ trên _TOTAL_ bản ghi",
                    "infoEmpty": "Hiển thị 0 đến 0 của 0 bản ghi",
                    "infoFiltered": "(đã lọc từ _MAX_ bản ghi)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Hiển thị _MENU_ bản ghi",
                    "loadingRecords": "Đang tải...",
                    "processing": "Đang xử lý...",
                    "search": "Tìm kiếm:",
                    "zeroRecords": "Không có bản ghi nào được tìm thấy",
                    "paginate": {
                        "first": "Đầu",
                        "last": "Cuối",
                        "next": "Tiếp",
                        "previous": "Trước"
                    },
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            });
        });

    </script>
    <script>
        $(".btn_delete_sweet").click(function(e) {
            e.preventDefault();
            url = $(this).attr('href');
            id = $(this).attr('data-id');
            swal({
                    title: "Bạn có chắc chắn?",
                    text: "Bạn có chắc chắn muốn xóa tài khoản ID=" + id +
                        " không ? Điều này sẽ ảnh hưởng đến liên kết dữ liệu!",
                    icon: "info",
                    buttons: ["Không", "Có"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Thành công", "Hệ thống chuẩn bị xóa tài khoản mang ID =" + id + " !", 'success')
                            .then(function() {
                                window.location.href = url;
                            });
                    }
                });
        });

    </script>
    <script>
        $(function() {
            $(".button_change_password").click(function(e) {
                e.preventDefault();
                email = $(this).attr('data-email');
                url = $(this).attr('href');
                $(".model_change_password_email").text(email);

                $(".button_appect_change_password").click(function(e) {
                    e.preventDefault();
                    var new_password = $('.new_password_class').val();
                    var confirm_password = $('.confirm_password_class').val();
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "new_password": new_password,
                            "confirm_password": confirm_password
                        }
                    }).done(function(result) {
                        if (result.status == 1) {
                            swal("Thành công", "Đã thay đổi mật khẩu thành công !",
                                "success").then(function() {
                                $("#exampleModalCenter").modal("hide");
                            });

                        } else if (result.status == 2) {
                            swal("Thất bại",
                                "Đã xảy ra lỗi kiểm tra lại mật khẩu xem giống nhau không",
                                "error");
                        } else {
                            swal("Thất bại", "Đã xảy ra lỗi lớn", "error");
                        }
                    });
                });
            });
        });

    </script>
@endsection
