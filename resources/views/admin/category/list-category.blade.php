@extends('admin.master')
@section('title','Danh sách loại sản phẩm')
@section('name')
{{ $user[0]->name }}
@endsection
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
        <th>Name</th>
        <th>Salary</th>
        <th>Country</th>
        <th>City</th>
    </thead>
    <tbody>
      @foreach ($list as $item)

        <tr>
          <th scope="row">{{ $item->id }}</th >
            <td>{{ $item->theloai->name }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td> 
            <a class="btn btn-dark" href='{{ route('postEdit-danhmuc', ['id' => $item->id]) }}'>edit</a> 
            <a class="btn btn-dark" onclick="return confirm('Bạn có chắc muốn xóa ?')" href='{{ route('postDelete-danhmuc', ['id' => $item->id]) }}'>xóa</a> 
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