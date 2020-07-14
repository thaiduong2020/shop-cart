@extends('admin.master')
@section('title','Danh sách thê loại')
@section('name')
{{ $user[0]->name }}
@endsection
@section('content')

  <div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
          <h3 class="mb-0 col">
            Thể loại
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
      <th scope="col">id</th>
      <th scope="col">Tên</th>
      <th scope="col">ngày thêm</th>
      <th scope="col"></th>
    </thead>
    <tbody>
        @foreach ($list as $item)
          <tr>
            <th scope="row">{{ $item->id }}</th >
              <td>{{ $item->name }}</td>
              <td>{{ $item->created_at }}</td>
              <td> 
              <a class="btn btn-dark" href='{{ route('postEdit-theloai', ['id' => $item->id]) }}'>edit</a> 
              <a class="btn btn-dark" onclick="return confirm('Bạn có chắc muốn xóa ?')" href='{{ route('postDelete-theloai', ['id' => $item->id]) }}'>xóa</a> 
              </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {!! $list->links() !!}
  </div>
</div>
</div>
</div>
@endsection