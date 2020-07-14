@extends('admin.master')
@section('title','Edit thể loại')

@section('content')
<div class="card mt-5">
    <div class="card-header">
      <h1>cập nhật </h1>
      {{ $theloai->name }}
    </div>
 
    @if (count($errors) > 0 )
          <div class="alert alert-danger">
              @foreach ($errors->all() as $err)
                  {{ $err }}<br>
              @endforeach
          </div>
      @endif
      @if (session('thongbao'))
          <div class="alert alert-success">
              {{ session('thongbao') }}
          </div>
      @endif
   
    <div class="card-body">
      <form method="POST" action="{{ route('postEdit-theloai', ['id' => $theloai->id]) }}" >
        @csrf
          <div class="form-group">
              <label for="exampleInputPassword1">Tên loại sản phẩm mới</label>
              <input type="text" class="form-control" value="{{ $theloai->name }}"  name="name" placeholder="tên sản phẩm mới">
          </div>
          <div class="form-group form-check">
          <button type="submit" name="update_data" class="btn btn-dark">cập nhật</button>
      </form>

    </div>
@endsection