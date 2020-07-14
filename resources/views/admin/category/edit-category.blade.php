@extends('admin.master')
@section('title','Edit loại sản phẩm')

@section('content')
<div class="card ">
    <div class="card-header">
      <h1>cập nhật </h1>
      {{ $type->name }}
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
      <form method="POST" action="{{ route('postEdit-danhmuc', ['id' => $type->id]) }}" >
        @csrf
        <div class="form-group">
          <label for="">Thể loại</label>
          <select class="form-control" name="id_theloai" id="">
            @foreach ($theloai as $item)
                <option @if ($type->id_theloai == $item->id)
                          {{ "selected" }}                       
                        @endif
                value="{{ $item->id }}">
                  {{ $item->name }}
                </option>
            @endforeach
          </select>
        </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Tên loại sản phẩm mới</label>
              <input type="text" class="form-control" value="{{ $type->name }}"  name="name" placeholder="tên sản phẩm mới">
          </div>
          <div class="form-group form-check">
          <button type="submit" name="update_data" class="btn btn-dark">cập nhật</button>
      </form>

    </div>
@endsection