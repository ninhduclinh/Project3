@extends('Admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bài viết - Cập nhật</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Bài viết - Cập nhật</li>
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
            <form action="" method="POST" class="col-md-10 mx-auto" enctype="multipart/form-data">
                @if(!$errors->articleErrors->isEmpty())
                  @foreach($errors->articleErrors->all() as $err)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{$err}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endforeach
                @endif
                @include('Admin.article.form')
            </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
 <!-- /.content-wrapper -->
@endsection
@section('javascript2')
<script>
  $(".btn_save_article").click(function(e)
  {
    e.preventDefault();
    form = $(this).parent('form').get(0);
    swal({
            title: "Bạn có chắc chắn?",
            text: "Bạn có chắc chắn muốn sửa bài viết ID="+{{$article->id}}+" không ?",
            icon: "info",
            buttons: ["Không",{
              text: "OK",
              value: true,
              visible: true,
              className: "bg-success",
              closeModal: true,
            }],
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Thành công","Hệ thống chuẩn bị sửa loại sản phẩm mang ID ="+{{$article->id}}+" !",'success').then(function() {
                    form.submit();
                });
            }
          });
  });
</script>
@endsection