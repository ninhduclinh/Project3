<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin_lte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  {{-- Datatable --}}
  <link href="{{asset('jquery-datatables/jquery.dataTables.min.css')}}" rel="stylesheet">
  @yield('css')
  <style>
    .btn-circle {
      border-radius: 100%;
      height: 2.5rem;
      width: 2.5rem;
      font-size: 1rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
        }
</style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin.home')}}" class="nav-link">Trang chủ</a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('admin_lte/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('admin_lte/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('admin_lte/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> --}}
      <!-- Notifications Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}
      <li class="nav-item">
        <a href="{{route('admin.logout')}}" class="nav-link" alt="Đăng xuất">
          <i class="fas fa-sign-out-alt" alt="Đăng xuất"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
      <img src="{{asset('admin_lte/dist/img/AdminLTELogo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">System Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="{{asset('noimg.png')}}" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin - {{Auth::user()->name}} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
              <a href="{{route('admin.home')}}" class="nav-link {{(request()->is('admin'))?"active":""}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang chủ
              </p>
            </a>
          </li>

          {{-- Tab category --}}
          <li class="nav-item has-treeview {{(request()->is('admin/category*'))?"menu-open":""}}">
              <a href="{{Route('admin.category.index')}}" class="nav-link {{(request()->is('admin/category*'))?"active":""}}">
              <i class="nav-icon fa fa-cubes"></i>
              {{-- <i class=""></i> --}}
              <p>
                Loại sản phẩm
              </p>
            </a>
          </li>
          {{--Entab Category--}}

          {{-- Tab Attribute --}}
          <li class="nav-item has-treeview {{(request()->is('admin/attribute*'))?"menu-open":""}}">
            <a href="{{Route('admin.attribute.index')}}" class="nav-link {{(request()->is('admin/attribute*'))?"active":""}}">
            <i class="nav-icon fa fa-flask"></i>
            <p>
              Thuộc tính
            </p>
      </a>
        </li>
        {{--End tab Attribute--}}
        {{-- Tab product --}}
        <li class="nav-item has-treeview {{(request()->is('admin/product*'))?'menu-open':'' }}">
          <a href="{{Route('admin.product.index')}}" class="nav-link {{(request()->is('admin/product*'))?"active":""}}">
          <i class="nav-icon fa fa-desktop"></i>
          <p>
            Sản phẩm
          </p>
          </a>
       </li>
        {{-- End tab product --}}
        {{-- Tab warehouse --}}
        <li class="nav-item has-treeview {{(request()->is('admin/warehouse*'))?'menu-open':'' }}">
          <a class="nav-link {{(request()->is('admin/warehouse*'))?"active":""}}">
          <i class="nav-icon fa fa-archive"></i>
          <p>
            Kho hàng
          </p>
          <i class="fas fa-angle-left right"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{Route('admin.warehouse.import')}}" style="margin-left: 15%;padding-left: 0px;" class="nav-link {{(request()->is('admin/warehouse'))?"active":""}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Nhập hàng</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{Route('admin.warehouse.stock')}}" style="margin-left: 15%;padding-left: 0px;" class="nav-link {{(request()->is('admin/warehouse/stock'))?"active":""}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Nhà kho</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.warehouse.history')}}" style="margin-left: 15%;padding-left: 0px;" class="nav-link {{(request()->is('admin/warehouse/history'))?"active":""}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Lịch sử nhập hàng</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.warehouse.iventory')}}" style="margin-left: 15%;padding-left: 0px;" class="nav-link {{(request()->is('admin/warehouse/iventory'))?"active":""}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Hàng tồn kho</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.warehouse.bestseller')}}" style="margin-left: 15%;padding-left: 0px;" class="nav-link {{(request()->is('admin/warehouse/bestseller'))?"active":""}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Hàng bán chạy</p>
              </a>
            </li>
          </ul>
       </li>
        {{-- End tab warehouse --}}
        {{-- Tab article --}}
        <li class="nav-item has-treeview {{(request()->is('admin/article*'))?'menu-open':'' }}">
          <a href="{{Route('admin.article.index')}}" class="nav-link {{(request()->is('admin/article*'))?"active":""}}">
          <i class="nav-icon fa fa-newspaper"></i>
          <p>
            Bài viết
          </p>
          </a>
       </li>
        {{-- End tab article --}}
         {{-- Tab transaction --}}
         <li class="nav-item has-treeview {{(request()->is('admin/transaction*'))?'menu-open':'' }}">
          <a href="{{route('admin.transaction.index')}}" class="nav-link {{(request()->is('admin/transaction*'))?"active":""}}">
          <i class="nav-icon fas fa-file-invoice-dollar"></i>
          <p>
            Giao dịch

          </p>
          </a>
       </li>
        {{-- End tab transaction --}}
      {{-- Tab transaction --}}
      <li class="nav-item has-treeview {{(request()->is('admin/comment*'))?'menu-open':'' }}">
        <a href="{{route('admin.comment.index')}}" class="nav-link {{(request()->is('admin/comment*'))?"active":""}}">
        <i class="nav-icon fas fa-american-sign-language-interpreting"></i>
        <p>
          Đánh giá sản phẩm
        </p>
        </a>
      </li>
      {{-- End tab transaction --}}
      {{-- Tab transaction --}}
      <li class="nav-item has-treeview {{(request()->is('admin/statistics*'))?'menu-open':'' }}">
        <a href="{{route('admin.statistics.index')}}" class="nav-link {{(request()->is('admin/statistics*'))?"active":""}}">
        <i class="nav-icon fas fa-print"></i>
        <p>
          Báo cáo thống kê
        </p>
        </a>
      </li>
      {{-- End tab transaction --}}
      {{-- Tab transaction --}}
      <li class="nav-item has-treeview {{(request()->is('admin/user*'))?'menu-open':'' }}">
        <a href="{{Route('admin.user.index')}}" class="nav-link {{(request()->is('admin/user*'))?"active":""}}">
        <i class="nav-icon fas fa-users"></i>
        <p>
          Thành viên
        </p>
        </a>
      </li>
      {{-- End tab transaction --}}

          {{-- Start Multi level --}}
          {{-- <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li> --}}
          {{-- End Multi level --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer">
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin_lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_lte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin_lte/dist/js/demo.js')}}"></script>
{{-- Sweetalert --}}
<script src="{{asset('sweetalert.min.js')}}"></script>
{{-- Datatable --}}
<script src="{{asset('jquery-datatables/jquery.dataTables.min.js')}}"></script>
@yield('javascript')
@yield('javascript2')
</body>
</html>
