@extends('master')

@section('content')
<div class="col-md-11 mx-auto mt-5">
    <table class="table" style="background: #ffffff">
        <thead>
            <tr>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">giá sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            @if (Session::has('Cart') != null)
            @foreach ($product_cart as $product)
            <tr>
                <td><img width="32%" src="{{ asset('upload/product/'.$product['item']['image'])}}" alt=""></td>
                <td style="line-height: 10em;">{{ $product['item']['name']}}</td>
                <td style="line-height: 10em;">{{number_format($product['item']['price']) }}</td>
                <td style="line-height: 10em;">{{ $product['qty']}}</td>
                <td style="line-height: 10em;">{{ number_format($product['qty'] * $product['item']['price'])}}</td>
            </tr>
            @endforeach
            @endif

        </tbody>

    </table>
      <div class="col-md-2">
            <h2>tổng tiền</h2>
      <b>{{Session::get('Cart')->totalPrice}}</b>
        </div>


</script>
@endsection
