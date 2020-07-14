@extends('admin.master')
@section('name')
{{ $user[0]->name }}
@endsection
@section('content')
<div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
          <h3 class=" col-md-3">
            Sản phẩm
          </h3>
          <div class="col-md-3">
            ( tìm thấy <b>{{ count($product) }}</b> sản phẩm )
          </div>

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
        <th>Thể loại</th>
        <th>Loại sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>mô tả</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng</th>
        <th>Ngày thêm </th>
    </thead>
    <tbody>
      @foreach ($product as $item)

        <tr>
          <th scope="row">{{ $item->id }}</th >
            <td>{{ $item->theloai->name }}</td>
            <td>{{ $item->type_product->name }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->created_at }}</td>
            <td>
            <a class="btn btn-dark" href='{{ route('postEdit-product', ['id' => $item->id]) }}'>edit</a>
            <a class="btn btn-dark" onclick="return confirm('Bạn có chắc muốn xóa ?')" href='{{ route('postDelete-product', ['id' => $item->id]) }}'>xóa</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

  </div>
</div>
</div>
</div>
@endsection
