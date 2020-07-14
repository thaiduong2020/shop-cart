@extends('admin.master')
@section('title','Danh sách loại sản phẩm')

@section('content')

  <div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
          <h3 class="mb-0 col">
            Sản phẩm
          </h3>
          @if (session('thongbao'))
          <div class="alert alert-success">
              {{ session('thongbao') }}
          </div>
        @endif
        </div>
  <div class="card-body table-full-width table-responsive">
  <table class="table table-hover table-striped">
    <thead>
        <th>ID</th>
        <th>Tên khách hàng</th>
        <th>Giới tính</th>
        <th>Email</th>
        <th>SDT</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Hình thức thanh toán</th>
        <th>Ngày đặt hàng </th>
    </thead>
    <tbody>
      @foreach ($bill as $item)

        <tr>

          <th scope="row">{{ $item->id }}</th >
            <td>{{ $item->bills->customer->name}}</td>
            <td>{{ $item->bills->customer->gender}}</td>
            <td>{{ $item->bills->customer->email}}</td>
            <td>{{ $item->bills->customer->phone}}</td>
            <td>{{ $item->product->name }}</td>
            <td>{{ $item->quantity}}</td>
            <td>{{number_format( $item->price) }}</td>
            <td>{{ $item->bills->payment }}</td>
             <td>{{ $item->bills->date_order }}</td>

            <td>
            <a class="btn btn-dark" onclick="return confirm('Bạn có chắc muốn xóa ?')" href='{{ route('postDelete-bill', ['id' => $item->id]) }}'>xóa</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
  {!! $bill->links() !!}
  </div>
</div>
</div>
</div>

@endsection
