@extends('master')
@section('content')

<div class="row mx-auto">
    <div class="col-md-3 ml-5" style="margin-top: -43px;">
        <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action active border text-dark"
                style="height: 43px;background-color:#fdd835; border-color: #fdd835;">
                <b> Danh mục sản phẩm</b>
            </button>
            @foreach ($type as $item)

            <a style="text-decoration:none" href="{{ route('sanpham',['id'=>$item->id])}}"><button type="button"
                    class="list-group-item list-group-item-action">{{ $item->name}}</button></a>
            @endforeach

        </div>
    </div>
    <div class="col-md-7">
        <img style="width:  121.6%;margin-left: -29px;height: 393px;"
            src="https://designer.com.vn/wp-content/uploads/2017/10/tt4.png" alt="">
    </div>
</div>
<div class="row">
    <div class="col-md-11 mx-auto mt-3" style="background-color: #ffffff; height: 70px;display:flex">
        <div class="item">
            <div class="section_policy_content  ct">
                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_1.svg?1587004490491"
                    alt="Bảo đảm chất lượng" />
                <div class="section-policy-padding ml-3 t">
                    <h3>Bảo đảm chất lượng</h3>
                    <div class="section_policy_title tt">Sản phẩm bảo đảm chất lượng.</div>
                </div>
            </div>
        </div>




        <div class="item">
            <div class="section_policy_content  ct">
                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_2.svg?1587004490491"
                    alt="Miễn phí giao hàng" />
                <div class="section-policy-padding ml-3 t">
                    <h3>Miễn phí giao hàng</h3>
                    <div class="section_policy_title tt">Cho đơn hàng từ 2 triệu đồng.</div>
                </div>
            </div>
        </div>




        <div class="item">
            <div class="section_policy_content  ct">
                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_3.svg?1587004490491"
                    alt="Hỗ trợ 24/7" />
                <div class="section-policy-padding ml-3 t">
                    <h3>Hỗ trợ 24/7</h3>
                    <div class="section_policy_title tt">Hotline: <a href="tel:0123456789" title="0123456789">0123 456
                            789</a></div>
                </div>
            </div>
        </div>




        <div class="item">
            <div class="section_policy_content  ct">
                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_4.svg?1587004490491"
                    alt="Đổi trả hàng" />
                <div class="section-policy-padding ml-3 t">
                    <h3>Đổi trả hàng</h3>
                    <div class="section_policy_title tt">Trong vòng 7 ngày.</div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--
    <div class="row mx-auto">
        <div class="col-md-11 mx-auto mt-3" style="background-color: #ffffff; height: 70px;display:flex">
    <div class="col-md-3 ml-5" >
        <form action="{{ route('search-sp-2',['id'=>$type->id])}}" method="post">
            @csrf
                        <div class="form-group">
                            <select class="form-control" name="id_type" id="">
                                @foreach ($type as $item)
                                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-light tim" style=" width: 49px;" value="Tìm">
        </form>
 </div>
 </div>
</div> --}}

<div class="row">
    <div class="col-md-11 mx-auto mt-3" style="background-color: #ffffff; " id="quan-nam">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <h2 style="position: absolute;"> Quần nam</h2>
                <ul class="navbar-nav" style="margin-left: 70%;">
                    <li class="nav-item active">
                        <a class="nav-link" id="quan-11" href="#quan-nam">Quần nam <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="quan-22" href="#quan-nu">Quần nữ <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Xem tất cả <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="display:flex">
            @foreach ($product5 as $item)
            <div class="card m-1" style="width: 20rem ;">
                <a href="{{route('chi-tiet',['id' => $item->id])}}" style="height: 235px">
                    <img style="height: 100%" src="{{ asset('upload/product/'.$item->image) }}" class="card-img-top"
                        alt="...">
                </a>
                <div class="card-body">
                    <a href="{{ route('chi-tiet',['id'=>$item->id])}}" class="link">
                        <h6 class="card-title name">{{ $item->name }}</h6>
                    </a>
                    <p class="card-text price">{{ number_format($item->price) }} VNĐ</p>
                    <div class="text-center"><a  class="beta-btn primary" href="{{ route('add-cart2',['id'=>$item->id])}}">Đặt hàng <i class="fa fa-chevron-right"></i></a></div>

                </div>
            </div>
            @endforeach
        </div>
    </div>



</div>
<div class="row">
    <div class="col-md-11 mx-auto mt-3" style="background-color: #ffffff;  " id="quan-nu">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <h2 style="position: absolute;"> Quần nữ</h2>

                <ul class="navbar-nav" style="margin-left: 70%;">

                    <li class="nav-item active">
                        <a class="nav-link" id="quan-111" href="#quan-nam">Quần nam <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="quan-222" href="#quan-nu">Quần nữ <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Xem tất cả <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="display:flex">
            @foreach ($product4 as $item)
            <div class="card m-1" style="width: 20rem;">
                <a href="{{ route('chi-tiet',['id'=>$item->id])}}" style="height: 235px">
                    <img style="height:100%;" src="{{ asset('upload/product/'.$item->image) }}" class="card-img-top"
                        alt="...">
                </a>
                <div class="card-body">
                    <a href="{{ route('chi-tiet',['id'=>$item->id])}}" class="link">
                        <h6 class="card-title name">{{ $item->name }}</h6>
                    </a>
                    <p class="card-text price">{{ number_format($item->price) }} VNĐ</p>
                    <div class="text-center"><a  class="beta-btn primary" href="{{ route('add-cart2',['id'=>$item->id])}}">Đặt hàng <i class="fa fa-chevron-right"></i></a></div>

                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-11 mx-auto mt-3" style="background-color: #ffffff; " id="giay-adidas">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <h2 style="position: absolute;"> Giày Adidas</h2>
                <ul class="navbar-nav" style="margin-left: 70%;">
                    <li class="nav-item active">
                        <a class="nav-link" id="giay-11" href="#giay-adidas">giày Adidas <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="giay-22" href="#giay-gucci">Giày Gucci <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Xem tất cả <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="display:flex">
            @foreach ($product1 as $item)
            <div class="card m-1" style="width: 20rem;">
                <a href="{{ route('chi-tiet',['id'=>$item->id])}}" style="height: 235px">
                    <img style="height: 100%" src="{{ asset('upload/product/'.$item->image) }}" class="card-img-top"
                        alt="...">
                </a>
                <div class="card-body">
                    <a href="{{ route('chi-tiet',['id'=>$item->id])}}" class="link">
                        <h6 class="card-title name">{{ $item->name }}</h6>
                    </a>
                    <p class="card-text price">{{number_format($item->price) }} VNĐ</p>
                    <div class="text-center"><a  class="beta-btn primary" href="{{ route('add-cart2',['id'=>$item->id])}}">Đặt hàng <i class="fa fa-chevron-right"></i></a></div>

                </div>
            </div>
            @endforeach
        </div>
    </div>



</div>
<div class="row">
    <div class="col-md-11 mx-auto mt-3" style="background-color: #ffffff;  " id="giay-gucci">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <h2 style="position: absolute;"> Giày Gucci</h2>

                <ul class="navbar-nav" style="margin-left: 70%;">

                    <li class="nav-item active">
                        <a class="nav-link" id="giay-111" href="#giay-adidas">Giày Adidas <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="giay-222" href="#giay-gucci">Giày Gucci <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Xem tất cả <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="display:flex">
            @foreach ($product2 as $item)
            <div class="card m-1" style="width: 20rem;">
                <a href="{{ route('chi-tiet',['id'=>$item->id])}}" style="height: 235px">
                    <img style="height:100%;" src="{{ asset('upload/product/'.$item->image) }}" class="card-img-top"
                        alt="...">
                </a>
                <div class="card-body">
                    <a href="{{ route('chi-tiet',['id'=>$item->id])}}" class="link">
                        <h6 class="card-title name">{{ $item->name }}</h6>
                    </a>
                    <p class="card-text price">{{ number_format($item->price)}} VNĐ</p>
                    <div class="text-center"><a  class="beta-btn primary" href="{{ route('add-cart2',['id'=>$item->id])}}">Đặt hàng <i class="fa fa-chevron-right"></i></a></div>

                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-11 mx-auto mt-3" style="background-color: #ffffff; " id="Ao-nam">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <h2 style="position: absolute;"> Áo thun nam</h2>
                <ul class="navbar-nav" style="margin-left: 70%;">
                    <li class="nav-item active">
                        <a class="nav-link" id="ao-11" href="#Ao-nam">Áo thun nam <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="ao-22" href="#Ao-nu">Áo thun nữ <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Xem tất cả <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="display:flex">
            @foreach ($product3 as $item)
            <div class="card m-1" style="width: 20rem;">
                <a href="{{ route('chi-tiet',['id'=>$item->id])}}" style="height: 235px">
                    <img style="height: 100%" src="{{ asset('upload/product/'.$item->image) }}" class="card-img-top"
                        alt="...">
                </a>
                <div class="card-body">
                    <a href="{{ route('chi-tiet',['id'=>$item->id])}}" class="link">
                        <h6 class="card-title name">{{ $item->name }}</h6>
                    </a>
                    <p class="card-text price">{{ number_format($item->price)}} VNĐ</p>
                    <div class="text-center"><a  class="beta-btn primary" href="{{ route('add-cart2',['id'=>$item->id])}}">Đặt hàng <i class="fa fa-chevron-right"></i></a></div>

                </div>
            </div>
            @endforeach
        </div>
    </div>



</div>
<div class="row">
    <div class="col-md-11 mx-auto mt-3" style="background-color: #ffffff;  " id="Ao-nu">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <h2 style="position: absolute;"> Áo thun nữ </h2>
                <ul class="navbar-nav" style="margin-left: 70%;">
                    <li class="nav-item active">
                        <a class="nav-link" id="ao-111" href="#Ao-nam">Áo thun nam <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="ao-222" href="#Ao-nu">Áo thun nữ <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Xem tất cả <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="display:flex">
            @foreach ($product4 as $item)
            <div class="card m-1" style="width: 20rem;">
                <a href="{{ route('chi-tiet',['id'=>$item->id])}}" style="height: 235px">
                    <img style="height:100%;" src="{{ asset('upload/product/'.$item->image) }}" class="card-img-top"
                        alt="...">
                </a>
                <div class="card-body">
                    <a href="{{ route('chi-tiet',['id'=>$item->id])}}" class="link">
                        <h6 class="card-title name">{{ $item->name }}</h6>
                    </a>
                    <p class="card-text price">{{ number_format($item->price) }} VNĐ</p>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
