@extends('Backend.Index')

@section('content')
<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Thêm danh mục sản phẩm</h1>
        </div>
    </div>
    @if (Session::has('success'))
    <div class="alert alert-success"> <i class="fas fa-check-square"></i> {{session::get('success')}}</div>
    @endif

    <div class="col-xs-12 col-md-3 col-lg-3">
        <div class="panel panel-primary">
            <div class="bg-primary">
                Thêm danh mục
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <form method="POST" action="{{route('categories.store')}}">
                        @csrf
                        <label>Tên danh mục:</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"> <br>
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <label>Banner</label>
                        <input type="text" name="banner" class="form-control" value="{{old('banner')}}"> <br>
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('banner') }}</p>
                            @endif
                        </div>
                        <label>Parent_id</label>
                        <input type="text" name="parent_id" class="form-control" value="{{old('parent_id')}}"> <br>
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('parent_id') }}</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-file-upload"></i>Thêm</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-danger">Hủy</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection