@extends('admin.master')
@section('title','Danh sách người dùng')
@section('name')
{{ $user[0]->name }}
@endsection
@section('content')

  <div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
          <h3 class="mb-0 col">
            Người dùng
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
        <th>Tên người dùng</th>
        <th>Email</th>
        <th>Ngày tạo</th>
    </thead>
    <tbody>
      @foreach ($user as $item)

        <tr>
          <th scope="row">{{ $item->id }}</th >
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->created_at }}</td>
            <td> 
            <a class="btn btn-dark" onclick="return confirm('Bạn có chắc muốn xóa ?')" href='{{ route('postDelete-product', ['id' => $item->id]) }}'>xóa</a> 
            </td>
        </tr>
        @endforeach
       
    </tbody>
</table>
  {!! $user->links() !!}
  </div>
</div>
</div>
</div>
  
@endsection