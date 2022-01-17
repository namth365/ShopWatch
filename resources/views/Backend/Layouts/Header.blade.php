
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('dashboard')}}" class="nav-link"> <i class="ion-home"></i> <b style="color:grey">Trang Chủ</b></a>
    </li>

  </ul>

  <!-- Right navbar links -->

</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <div  class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">Watch-shop
    <span class="brand-text font-weight-light"></span>
  </div> <br>

  <!-- Sidebar -->
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="{{route('dashboard')}}" class="nav-link">
          <i class="fas fa-bars"></i>
            <p>
           Tổng quát
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/admin/categories" class="nav-link">
          <i class="fab fa-apple"></i>
            <p>
            Quản lý danh mục 
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/admin/products" class="nav-link">
          <i class="fab fa-product-hunt"></i>
            <p>
           Quản lý sản phẩm
            </p>
          </a>
        </li>

        <li class="nav-item">
        <a href="/admin/orders" class="nav-link">
        <i class="fas fa-book"></i>
            <p>
           Quản lý đơn hàng
            </p>
          </a>
        </li>

        <li class="nav-item">
        <a href="/admin/sliders" class="nav-link">
        <i class="fas fa-spider"></i>
            <p>
           Quản lý slider
            </p>
          </a>
        </li>

        <li class="nav-item">
        <a href="/admin/users" class="nav-link">
        <i class="fas fa-users"></i>
            <p>
           Quản lý nhân viên
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->