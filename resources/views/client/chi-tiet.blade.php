@extends('master')

@section('content')
    <div class="row" style="background: white">
        <div class="col-md-11  mx-auto" style="display: flex;">
            <div class="col-md-4 p-5">
    <img width="100%" src="{{ asset('upload/product/'.$product->image)}}" alt="Bảo đảm chất lượng" />

</div>


    <div class="col-md-5 p-5">
        <h5 class="title-head"><b>{{ $product->name}}</b></h5>
        <i style="color: #ffbe00;" class="far fa-star"></i>
        <i style="color: #ffbe00;" class="far fa-star"></i>
        <i style="color: #ffbe00;" class="far fa-star"></i>
        <i style="color: #ffbe00;" class="far fa-star"></i>
        <i style="color: #ffbe00;" class="far fa-star"></i>
        <hr>
        <span>Tình trạng: </span>
        <span style='    color: #73a91d;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @if ($product->quantity > 0 ){{'còn hàng'}} @endif</span><br>
        <span>Thương hiệu: </span>
        <span style="color: #189eff;">&nbsp;&nbsp;{{ $product->type_product->name}} </span><br>
        <span style="font-size: 25px;color: #d0021b;font-weight: 700;">{{ number_format($product->price, 0) }}₫</span><br><br>
    <form action="{{ route('add-cart',$product->id)}}" method="post" style="display:flex">
            @csrf
        <div class="form-group" style="    width: 35%;">
                <input class="form-control" type="number" value="1" style="width: 75%;">
            </div>
            <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Thêm vào giỏ hàng" style="width: 175%;">

            </div>
        </form>

    </div>

        <div class="col-md-3 p-5">
            <div class="card" style="width: 18rem;margin-left: -24px;">
                <div class="card-body">
                    <h5 class="card-title">Bạn muốn hỗ trợ</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mua sản phẩm</h6>
                        <a  style="font-size: 24px;margin-top: 5px;line-height: 1.1;font-weight: 700;" href="#" class="card-link">0818 334 678</a>
                    <i style="    font-size: 42px;position: absolute;top: 1.1em;left: 5em;color: #73a91d;" class="fad fa-phone"></i><br>
                    <a href="#" class="card-link">Liên hệ</a>
                </div>
            </div>
             <div class="card-body" style="margin-left: -41px; width: 21rem;" >
                <h5 class="card-title">Sản phẩm liên quan</h5>
             @foreach ($productlq as $item)
             <div class="mt-4" style="display:flex">
            <a href="{{route('chi-tiet',['id' => $item->id])}}">
            <img width="123px" src="{{ asset('upload/product/'.$item->image)}}" alt="">
            </a>
            <span class="title-review ml-4">

            <a style="text-decoration:none; color:#555" href="{{route('chi-tiet',['id' => $item->id])}}">
                {{$item->name}}
            </a>

            </span>


            </div>

             @endforeach
            </div>

        </div>
    </div>
<hr>
    <div class="col-md-8" style="background-color: #f1f1f1;position: absolute;top: 44em;left: 7em;    width: 63%;">

    <form class="m-3" action="{{ route('comment',['id'=>$product->id])}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="validationTextarea">Viết bình luận...</label>
            <textarea class="form-control " id="validationTextarea" required></textarea>
        </div>
        <div class="input-group-append">
            <input type="submit" class="btn btn-info" value="Gửi">
        </div>
</form>
</div>
</div>


</div>
@endsection
