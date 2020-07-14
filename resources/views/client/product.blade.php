@extends('master')

@section('content')
    <div class="row m-5" >
            <div class="col-md-3">
                <button type="button" class="list-group-item list-group-item-action active border text-dark" style="height: 43px;background-color:#fdd835; border-color: #fdd835;">
             <b> Danh mục sản phẩm</b>
            </button>
            @foreach ($type as $item)

        <a style="text-decoration:none" href="{{ route('sanpham',['id'=>$item->id])}}"><button type="button" class="list-group-item list-group-item-action">{{ $item->name}}</button></a>
            @endforeach
            </div>
            <div class="col-md-9" style="display:flex; flex-wrap: wrap;"  >
                @foreach ($product as $item)
                    <div class="card m-1" style="width: 15rem ;" >
                    <a href="{{route('chi-tiet',['id' => $item->id])}}" style="height: 235px">
                        <img style="height: 100%" src="{{ asset('upload/product/'.$item->image) }}" class="card-img-top" alt="...">
                    </a>
                        <div class="card-body">
                        <a href="{{ route('chi-tiet',['id'=>$item->id])}}" class="link">
                            <h6  class="card-title name">{{ $item->name }}</h6>
                        </a>
                        <p class="card-text price" >{{ number_format($item->price) }} VNĐ</p>
                                            <div class="text-center"><a  class="beta-btn primary" href="{{ route('add-cart2',['id'=>$item->id])}}">Đặt hàng <i class="fa fa-chevron-right"></i></a></div>

                    </div>
                    </div>
                @endforeach

        </div>
                {!! $product->links()!!}

</div>



</div>
@endsection
