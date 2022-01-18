@extends('Backend.Index')

@section('content')

<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Thêm slider</h1>
        </div>
    </div>
    @if (Session::has('success'))
    <div class="alert alert-success"> <i class="fas fa-check-square"></i> {{session::get('success')}}</div>
    @endif

    <div class="col-lg-12 mt-3">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="container" style="width:600px">
                    <div class="form-group">
                        <form method="POST" action="{{route('sliders.store')}}" enctype="multipart/form-data">
                            @csrf
                            <label>Tên Slider:</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}"> <br>
                            <div class="error-message">
                                @if ($errors->any())
                                <p style="color:red">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <label>Hình Ảnh</label>
                            <input type="file" name="image" class="form-control" value="{{ old('image') }}"> <br>
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
</div>
@endsection