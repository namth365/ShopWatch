@extends('Backend.Index')

@section('content')
<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Sửa danh mục sản phẩm </h1>
        </div>
    </div>
    @if (Session::has('success'))
    <div class="alert alert-success"> <i class="fas fa-check-square"></i> {{session::get('success')}}</div>
    @endif

    <div class="col-xs-12 col-md-3 col-lg-3">
        <div class="panel panel-primary">
            <div class="bg-primary">
                Sửa danh mục
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <form method="POST" action="{{route('categories.update',$category->id)}}">
                        @method('PUT')
                        @csrf
                        <label>Tên danh mục:</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}"> <br>
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <label>Banner</label>
                        <input type="text" name="banner" class="form-control" value="{{$category->banner}}"> <br>
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('banner') }}</p>
                            @endif
                        </div>
                        <label>Parent_id</label>
                        <input type="text" name="parent_id" class="form-control" value="{{$category->parent_id}}"> <br>
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('parent_id') }}</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-file-upload"></i>Sửa</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-danger">Hủy</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection