@extends('admin.master')
@section('title','Thêm mới loại sản phẩm')

@section('content')
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h2>Thêm mới loại sản phẩm</h2>
                    @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{ session('thongbao') }}
                        </div>
                    @endif
                </div>
                <div class="card-body table-full-width table-responsive">
                    <form method="POST" action="{{ route('postAdd-product') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Thể loại</label>
                            <select class="form-control" name="id_theloai" id="">
                                @foreach ($theloai as $item)
                                <option value="{{ $item->id }}">{{ $item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Loại sản phẩm</label>
                            <select class="form-control" name="id_type" id="">
                                @foreach ($type as $item)
                                <option value="{{ $item->id }}">{{ $item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="tên loại sản phẩm ">
                            @if ($errors->has('name'))
                            <div class="alert alert-danger">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="image" >
                            @if ($errors->has('image'))
                            <div class="alert alert-danger">
                                {{ $errors->first('image') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá sản phẩm</label>
                            <input type="number" class="form-control" name="price" placeholder="giá sản phẩm">
                            @if ($errors->has('price'))
                            <div class="alert alert-danger">
                                {{ $errors->first('price') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Số lượng sản phẩm</label>
                            <input type="number" class="form-control" name="quantity" placeholder="số lượng sản phẩm">
                            @if ($errors->has('quantity'))
                            <div class="alert alert-danger">
                                {{ $errors->first('quantity') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group form-check">
                        <button type="submit" name="add_catalog" class="btn btn-dark">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
@endsection