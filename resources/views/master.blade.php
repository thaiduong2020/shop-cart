<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>local</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.10.1/jquery.hoverIntent.min.js">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/v4-shims.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <!-- overlayScrollbars -->
    <!-- Daterange picker -->
    <!-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> -->
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
    <style>
           </style>
</head>

<body style="background: #f1f1f1;">


    <div class="row header">
        <div class="col-md-3">
            <div class="logo">
                <img src="../public/image/logo.png" alt="">
            </div>
        </div>

        <div class="col-md-5">
            <div class="timkiem">
                <form action="{{ route('search-sp')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="key">
                        <input type="submit" class="btn btn-light tim" style=" width: 49px;" value="Tìm">

                    </div>

                </form>

            </div>
        </div>

        <div class="col-md-4">
            <div class="giohang">
                <div class="goidien">

                    <a>0818 334 678</a><br>
                    <span>Hỗ trợ trực tuyến</span>
                </div>
                <div class="dathang">

                    <span>Tài khoản</span><br>
                <a>{{ $user->name}}</a>

                </div>
                <div style="position: absolute;
            top: 21px;
            right: 55px;">
            <span style="position: absolute;top: 3px;
    left: 13px;
    font-size: 12px;
}">
               <h6>
                    @if (Session::has('Cart'))
                    {{Session('Cart')->totalQty}}
                        @else
                            0
                        @endif
               </h6>

            </span>

                    <i style="
    font-size: 26px;cursor:pointer" id="click_cart_an" style="font-size: 23px"
                            class="fa fa-shopping-bag text-light"></i>
                    <i style="
    font-size: 26px;cursor:pointer" id="click_cart_hien" style="font-size: 23px"
                            class="fa fa-shopping-bag text-light"></i>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light  " style="background-color: #fdd835!important ;height: 43px;" <div
        class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('trang-chu')}}">Trang chủ</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Giới thiệu</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sản phẩm
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                    @foreach ($type as $item)

                    <a style="text-decoration:none" class="dropdown-item"
                        href="{{ route('sanpham',['id'=>$item->id])}}">{{ $item->name}}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link " href="#">Tin tức</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Liên hệ</a>
            </li>
        </ul>
        </div>
    </nav>

    @yield('content')
    @if (Session::has('Cart'))
    <div class="beta-dropdown cart-body" id="cart">
        @foreach ($product_cart as $product)
        <div class="cart-item">
            <a class="cart-item-delete" href="{{ route('delete-cart',['id'=> $product['item']['id']])}}"><i
                    class="fa fa-times"></i></a>
            <div class="media">
                <a class="pull-left" href="#"><img src="upload/product/{{$product['item']['image']}}" alt=""></a>
                <div class="media-body">
                    <span class="cart-item-title">{{$product['item']['name']}}</span>

                    <span class="cart-item-amount">Đơn giá: <span>{{number_format($product['qty']*$product['item']['price'])}} VND</span></span>
                </div>
            </div>
        </div>
        @endforeach



        <div class="cart-caption">
            <div class="cart-total text-right">Tổng tiền: <span
                    class="cart-total-value">{{number_format(Session('Cart')->totalPrice)}} VND</span></div>
            <div class="clearfix"></div>

            <div class="center">
                <div class="space10">&nbsp;</div>
            <a href="{{ route('getCheckout')}}" class="beta-btn primary text-center">Checkout <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    @endif

    </div>




    <footer>
        <div class="col-md-11 mx-auto" style="display:flex">
            <div class="col-md-3 pt-4" style="text-align:center">
                <h4 style="display: block;font-size: 18px;text-transform: uppercase;font-weight: 600;">LIÊN HỆ</h4>
                <div style="text-align:justify">
                    <i class="fas fa-map-marker-alt"></i><span>&nbsp;72 Lê Thị Tính, Thanh Khê, Đà Nẵng.</span><br>
                    <i class="fas fa-phone-alt"></i><span>&nbsp;0818 334 678</span><br>
                    <i class="far fa-envelope"></i><span>&nbsp;duongptpd02818@fpt.edu.vn</span>
                    <br>
                    <i style="font-size: 45px; color:#3b5998" class="fab fa-facebook-square"></i><i
                        style="font-size: 45px;color:#189eff" class="fab fa-twitter-square ml-2"></i><i
                        style="font-size: 45px; color:#ff0000" class="fab fa-youtube ml-2"></i><i
                        style="font-size: 45px;color:#5851db" class="fab fa-instagram ml-2"></i>
                </div>
            </div>
            <div class="col-md-3 pt-4" style="text-align:center">
                <h4 style="display: block;font-size: 18px;text-transform: uppercase;font-weight: 600;">VỀ D-STORE</h4>

                <ul class="ull">
                    <li>Trang chủ</li>
                    <li>Giới thiệu</li>
                    <li>Sản phẩm</li>
                    <li>Tin tức</li>
                    <li>Liên hệ</li>
                </ul>
            </div>
            <div class="col-md-3 pt-4" style="text-align:center">
                <h4 style="display: block;font-size: 18px;text-transform: uppercase;font-weight: 600;">DÀNH CHO KHÁCH
                    HÀNG</h4>

                <ul class="ull">
                    <li>Trang chủ</li>
                    <li>Giới thiệu</li>
                    <li>Sản phẩm</li>
                    <li>Tin tức</li>
                    <li>Liên hệ</li>
                </ul>
            </div>
            <div class="col-md-3 pt-4" style="text-align:center">
                <h4 style="display: block;font-size: 18px;text-transform: uppercase;font-weight: 600;">VẬN CHUYỂN THANH
                    TOÁN</h4>

                <i style="font-size: 45px; color:#082190" class="fab fa-cc-visa"></i><i
                    style="font-size: 45px; color:#d80d52" class="fab fa-cc-jcb"></i>
            </div>
        </div>
    </footer>
    <script>
        $(document).ready(function () {
            $('#Ao-nu').hide();
            $('#ao-11').click(function () {
                $('#Ao-nam').show();
                $('#Ao-nu').hide();
            });
            $('#ao-22').click(function () {
                $('#Ao-nu').show();
                $('#Ao-nam').hide();
            });
            $('#Ao-nu').hide();
            $('#ao-111').click(function () {
                $('#Ao-nam').show();
                $('#Ao-nu').hide();
            });
            $('#ao-222').click(function () {
                $('#Ao-nu').show();
                $('#Ao-nam').hide();
            });

            $('#giay-11').click(function () {
                $('#giay-adidas').show();
                $('#giay-gucci').hide();
            });
            $('#giay-22').click(function () {
                $('#giay-gucci').show();
                $('#giay-adidas').hide();
            });
            $('#giay-gucci').hide();
            $('#giay-111').click(function () {
                $('#giay-adidas').show();
                $('#giay-gucci').hide();
            });
            $('#giay-222').click(function () {
                $('#giay-gucci').show();
                $('#giay-adidas').hide();
            });


            $('#quan-11').click(function () {
                $('#quan-nam').show();
                $('#quan-nu').hide();
            });
            $('#quan-22').click(function () {
                $('#quan-nu').show();
                $('#quan-nam').hide();
            });
            $('#quan-nu').hide();
            $('#quan-111').click(function () {
                $('#quan-nam').show();
                $('#quan-nu').hide();
            });
            $('#quan-222').click(function () {
                $('#quan-nu').show();
                $('#quan-nam').hide();
            });
            $('#cart').hide();
            $('#click_cart_hien').hide();
            $('#click_cart_an').click(function () {
                $('#cart').toggle();
                $('#click_cart_an').hide();
                 $('#click_cart_hien').show();
            });
              $('#click_cart_hien').click(function () {
                $('#cart').toggle();
                $('#click_cart_hien').hide();
                 $('#click_cart_an').show();
            });


        });
    </script>
</body>

</html>
