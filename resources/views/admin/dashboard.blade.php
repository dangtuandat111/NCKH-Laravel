@extends('admin.master')
@section('body')

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/home') }}" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
  <!--   <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
     
      <span class="brand-text font-weight-light">Hệ thống hỗ trợ giảng dạy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info " style = 'font-size: 20px'>
          <a href="" class="d-block">{{ Auth::user()->name }}</a>
        
        </div>
      </div>

      <!-- Sidebar Menu -->

        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- Phan them hoc phan -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Học phần
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="  {{ url('/admin/hocphan/thongtin') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin học phần</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/hocphan/them') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm học phần</p>
                </a>
              </li>
            </ul>
          </li>

          <!--Phan them Giang vien -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Giảng viên 
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/teacher/thongtin') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin về giảng viên </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/teacher/them') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm giảng viên </p>
                </a>
              </li>
            </ul>
          </li>

          <!--Phan them lop hoc phan -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Lớp học phần
                <i class="right fas fa-angle-left"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin lớp học phần</p>
                </a>
              </li>
            </ul>
          </li>

          <!--Phan lich giang day -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Lịch giảng dạy
                <i class="right fas fa-angle-left"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin giờ giảng</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thay đổi giờ giảng</p>
                </a>
              </li>
            </ul>
          </li>

          <!--Phan Import bang file Excel -->
          <li class="nav-item has-treeview ">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Import 
                <i class="right fas fa-angle-left"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/import/teacher') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm giảng viên</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/import/hocphan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm học phần</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm ???</p>
                </a>
              </li>
            </ul>
          </li>

          <!--Phan them Phong -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Phòng học 
                <i class="right fas fa-angle-left"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin phòng học </p>
                </a>
              </li>
            </ul>
          </li>
           
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('DeMuc')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/logout') }}">Đăng xuất</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  @yield('content')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@stop()
