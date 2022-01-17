@extends('Backend.Index')

@section('content')
<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Sửa Slider </h1>
        </div>
    </div>
    @if (Session::has('success'))
    <div class="alert alert-success"> <i class="fas fa-check-square"></i> {{session::get('success')}}</div>
    @endif

    <div class="col-xs-12 col-md-3 col-lg-3">
        <div class="panel panel-primary">
            <div class="bg-primary">
                Sửa Slider
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <form method="POST" action="{{route('sliders.update',$slider->id)}}">
                        @method('PUT')
                        @csrf
                        <label>Tên danh mục:</label>
                        <input type="text" name="name" class="form-control" value="{{$slider->name}}"> <br>
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <label>Banner</label>
                        <input type="text" name="image" class="form-control" value="{{$slider->image}}"> <br>
                        <div class="error-message">
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('image') }}</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-file-upload"></i>Sửa</button>
                        <a href="{{ route('sliders.index') }}" class="btn btn-danger">Hủy</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection