@extends('Backend.Index')
@section('content')

<div class="main">
    <div class="container" style="width:800px">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>Thêm Nhân Viên</h1>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="{{route('users.store')}}">
                            <div class="row" style="margin-right:15px; margin-left:15px">
                                @csrf
                                <label>Tên nhân viên</label>
                                <input type="text" name="name" class="form-control"> <br>
                                <div class="error-message">
                                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <br>
                                <label>Chức vụ</label>
                                <input type="text" name="position" class="form-control"> <br>
                                <div class="error-message">
                                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('position') }}</p>
                                    @endif
                                </div>

                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control"> <br>
                                <div class="error-message">
                                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <br>

                                <label>Mật khẩu</label>
                                <input type="password" name="password" class="form-control"> <br>
                                <div class="error-message">
                                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <br>
                                <label for="">Địa chỉ</label>
                                <input name="address" class="form-control">
                                <div class="error-message">
                                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('address') }}</p>
                                    @endif
                                </div>
                                <br>
                                <label>Giới tính</label>
                                <select name="gender">
                                    <option value="Name">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                                <div class="error-message">
                                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('gender') }}</p>
                                    @endif
                                </div>
                                <br>
                                <label for="">Ngày sinh</label>
                                <input type="date" name="birthday" class="form-control">
                                <div class="error-message">
                                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('birthday') }}</p>
                                    @endif
                                </div>
                                <br>

                                <label>Số điện thoại</label>
                                <input type="number" class="form-control" name="phone">
                                <div class="error-message">
                                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                                <br>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Lưu</button>
                                    <a class="btn btn-danger" href="{{ route('users.index') }}"><i class="fas fa-undo"></i> Hủy</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection