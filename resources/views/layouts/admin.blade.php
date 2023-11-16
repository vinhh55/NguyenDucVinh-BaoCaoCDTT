<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>  vinhh</title> 
  <link rel="icon" type="image/x-icon" href="image/clava.jpg" >
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ @asset('plugins/fontawesome-free/css/all.min.css') }}>
  <!-- Theme style --><link rel="stylesheet" href={{ @asset('fontawesome/css/all.min.css') }}>
  <link rel="stylesheet" href={{ @asset('dist/css/adminlte.min.css') }}>
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                        class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                {{-- <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="far fa-bell"></i>
      <span class="badge badge-warning navbar-badge">15</span>
    </a> --}}
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    {{-- <a href="#" class="dropdown-item">
        <i class="fas fa-envelope mr-2"></i> 4 new messages
        <span class="float-right text-muted text-sm">3 mins</span>
      </a> --}}
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        {{-- <i class="fas fa-users mr-2"></i> 8 friend requests
        <span class="float-right text-muted text-sm">12 hours</span>
      </a> --}}
                        <div class="dropdown-divider"></div>
                        {{-- <a href="#" class="dropdown-item">
        <i class="fas fa-file mr-2"></i> 3 new reports
        <span class="float-right text-muted text-sm">2 days</span>
      </a> --}}
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.logout') }}" class="nav-link">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            {{-- <li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
      <i class="fas fa-th-large"></i>
    </a>
  </li> --}}
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src={{ asset('image/cck.gif') }} alt="AdminLTE Loo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">CLARENCE</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    {{-- <img src="" alt="images/hinhanh.JPG" srcset=""> --}}

                </div>
                <div class="container">
                    <div class="container"><a href="https://www.facebook.com/xvihr.553">Nguyễn Đức Vinh</a></div>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

        
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="../admin/#" class="nav-link">
                            <img width="30px" height="30px" src={{ asset('image/gundam.png') }}
                                alt="AdminLTE Loo" class="brand-image img-circle elevation-3"
                                style="opacity: .8">
                            <p class="text-bold padding-left: 20px ">
                                SẢN PHẨM
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('product.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SẢN PHẨM </p>
                                </a>                      
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('category.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Mục</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('brand.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>THƯƠNG HIỆU</p>
                                </a>
                                
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img width="30px" height="30px" src={{ asset('image/black-hole.png') }}
                            alt="." class="brand-image img-circle elevation-3"
                            style="opacity: .8">
                        <p class="text-bold padding-left: 20px ">
                                BÀI VIẾT
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('post.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>TẤT CẢ BÀI VIẾT</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=" {{ route('topic.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>CHỦ ĐỀ BÀI VIẾT</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>TRANG ĐƠN</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img width="30px" height="30px" src={{ asset('image/orbit.png') }}
                            alt="." class="brand-image img-circle elevation-3"
                            style="opacity: .8">
                        <p class="text-bold padding-left: 20px ">
                               KHÁCH HÀNG
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>KHÁCH HÀNG</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('order.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ĐƠN HÀNG</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=" {{ route('contact.index') }}" class="nav-link">
                                    <i class="fa-solid fa-id-badge" style="color: #27b438;"></i>
                                    <p>LIÊN HỆ</p>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img width="30px" height="30px" src={{ asset('image/astronaut.png') }}
                            alt="." class="brand-image img-circle elevation-3"
                            style="opacity: .8">
                        <p class="text-bold padding-left: 20px ">
                                GIAO DIỆN
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href=" {{ route('menu.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>MENU</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('slider.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SLIDER</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                   
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img width="30px" height="30px" src={{ asset('image/shooting-stars.png') }}
                            alt="." class="brand-image img-circle elevation-3"
                            style="opacity: .8">
                        <p class="text-bold padding-left: 20px ">
                                HỆ THỐNG
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="  {{ route('user.index') }}" class="nav-link"><i
                                        class="far fa-circle nav-icon"></i>
                                    <p>THÀNH VIÊN</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                  
                    <li class="nav-item">
                        <a href=" {{route('admin.logout') }} " class="nav-link">
                            <img width="30px" height="30px" src={{ asset('image/logout.gif') }}
                            alt="." class="brand-image img-circle elevation-3"
                            style="opacity: .8">
                            <p class="text-danger">Đăng xuất</p>
                        </a>
                    </li>
                    
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    @yield('content')
    <!-- /.content-wrapper -->


    <footer class="main-footer">

        <strong class="text-danger">Nguyễn Đức Vinh <a href="https://www.facebook.com/xvihr.553">in4 nha pé
                ơi</a>. </strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  <!-- jQuery -->
  <script src={{ @asset('plugins/jquery/jquery.min.js') }}></script>
  <!-- Bootstrap 4 -->
  <script src={{ @asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <!-- AdminLTE App -->
  <script src={{ @asset('dist/js/adminlte.min.js') }}></script>

</body>
</html>
