@extends('Backend.Index')

@section('content')
<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Thêm Slider</h1>
        </div>
    </div>
    @if (Session::has('success'))
    <div class="alert alert-success"> <i class="fas fa-check-square"></i> {{session::get('success')}}</div>
    @endif

    <div class="col-xs-12 col-md-3 col-lg-3">
        <div class="panel panel-primary">
            <div class="bg-primary">
                Thêm Slider
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <form method="POST" action="{{route('sliders.store')}}">
                        @csrf
                        <label>Tên danh mục:</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"> <br>
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <label>Banner</label>
                        <input type="file" name="image" class="form-control" value="{{old('image')}}"> <br>
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('image') }}</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-file-upload"></i>Thêm</button>
                        <a href="{{ route('sliders.index') }}" class="btn btn-danger">Hủy</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection