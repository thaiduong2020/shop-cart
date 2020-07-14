<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('js/admin.js') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('OverlayScrollbars.min.css') }}">
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
       .pagination {
        margin-left: 42%;

        }
        .page-item.active .page-link{
            background-color: #343a40;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin') }}" class="nav-link">Home</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3" action="{{ route('getSearch') }}" method="GET">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" name="key" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>

          </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <h1><span class="brand-text font-weight-light">@yield('name')</span></h1>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <i style=" font-size: 26px;color: white;line-height: 1.3em;" class="fa fa-user" aria-hidden="true"></i>

                    </div>
                    <div class="info">
                        <a href="#" class="d-block">@yield('name')</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview show1">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                    Thể loại
                                </p>
                            </a>
                            <ul class="nav nav-treeview showw1" style="display: none;">
                                <li class="nav-item">
                                    <a href="{{ route('list-theloai') }}" class="nav-link">
                                        <p>Danh sách </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('getAdd-theloai') }}" class="nav-link ">
                                        <p>Thêm mới </p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item has-treeview  show1">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                    Loại sản phẩm
                                </p>
                            </a>
                            <ul class="nav nav-treeview showw1" style="display: none;">
                                <li class="nav-item">
                                    <a href="{{ route('list-danhmuc') }}" class="nav-link ">
                                        <p>Danh sách </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('getAdd-danhmuc') }}" class="nav-link">
                                        <p>Thêm mới </p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-item has-treeview  show1">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                    Sản phẩm
                                </p>
                            </a>
                            <ul class="nav nav-treeview showw1" style="display: none;">
                                <li class="nav-item">
                                    <a href="{{ route('list-product') }}" class="nav-link ">
                                        <p>Danh sách </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('getAdd-product') }}" class="nav-link">
                                        <p>Thêm mới </p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item has-treeview  show1">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                    Người dùng
                                </p>
                            </a>
                            <ul class="nav nav-treeview showw1" style="display: none;">
                                <li class="nav-item">
                                    <a href="{{ route('list-user') }}" class="nav-link ">
                                        <p>Danh sách </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview  show1">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                    Đơn hàng
                                </p>
                            </a>
                            <ul class="nav nav-treeview showw1" style="display: none;">
                                <li class="nav-item">
                                    <a href="{{ route('list-bill') }}" class="nav-link ">
                                        <p>Danh sách </p>
                                    </a>
                                </li>
                            </ul>
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
                    <div class="row mb-2">

                        <!-- /.col -->

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('content')

            </section>
            <!-- /.content -->
        </div>
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
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <!-- <script src="plugins/jquery-ui/jquery-ui.min.js"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('js/adminlte.js') }}"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>
