@extends('Frontend.Layouts.Master')
@section('content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">Thanh toán</li>
            </ol>
        </div>
        <!--/breadcrums-->
        <!--/checkout-options-->

        <div class="review-payment">
            <h2>Xác nhận mua hàng</h2>
        </div>
       
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Hình Ảnh</td>
                            <td class="description">Sản phẩm</td>
                            <td class="price">Giá</td>
                            <td class="quantity">Số Lượng</td>
                            <td class="total">Tổng Tiền</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart_code as $cart)
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="{{asset('images/product-details/'. $cart->image)}}" width="100px"
                                        height="100px" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{$cart->name}}</a></h4>
                                <p>Mã sản phẩm: {{$cart->code}}</p>
                            </td>
                            <td class="cart_price">
                                <p>{{number_format($cart->price)."đ"}}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                   
                                
                                        <input type="text" class="hidden" name="product_id[]" value="{{ $cart->name }}">
                                        <a class="cart_quantity_up" href=""> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity[]"
                                            value="{{$cart->quantity}}" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{{number_format($cart->total)."đ"}}</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{route('delete-cart',$cart->id)}}"
                                    onclik="return confirm('Xóa sản phẩm {{$cart->name}}')" class="btn btn-danger"><i
                                        class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-5 clearfix">
                        <div class="bill-to">
                        <form action="{{ route('postRegister') }}" method="post">
            @csrf
            @method('post')
                            <p style="color:red">Thông Tin Đặt Hàng</p>
                            <div class="form-one">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div>
                                            <label>Tên Khách Hàng <span>*</span></label>
                                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                            <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                                        </div>
                                        <div>
                                            <label>Địa chỉ <span>*</span></label>
                                            <input type="text" name="address" value="{{old('address')}}" class="form-control">
                                            <span style="color:red;">@error("address"){{ $message }} @enderror</span>
                                        </div>
                                        <div>
                                            <label>Số điện thoại<span>*</span></label>
                                            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
                                            <span style="color:red;">@error("phone"){{ $message }} @enderror</span>
                                        </div>
                                        <div>
                                            <label>Giới Tính <span>*</span></label>
                                            <input type="text" name="gender" value="{{old('gender')}}" class="form-control">
                                            <span style="color:red;">@error("gender"){{ $message }} @enderror</span>
                                        </div>
                                        <!-- <div>
                                            <label>Ngày Sinh <span>*</span></label>
                                            <input type="date" name="birthday" value="{{old('birthday')}}">
                                            <span style="color:red;">@error("birthday"){{ $message }} @enderror</span>
                                        </div> -->
                                        <div>
                                            <label> Email <span>*</span></label>
                                            <input type="email" name="email" value="{{old('email')}}" class="form-control">
                                            <span style="color:red;">@error("email"){{ $message }} @enderror</span>
                                        </div>
                                        <div>
                                            <label> Mật khẩu <span>*</span></label>
                                            <input type="password" name="password" value="{{old('password')}}" class="form-control">
                                            <span style="color:red;">@error("password"){{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        <div class="payment-options">
            <span>
                <label><input type="checkbox">Chuyển Khoản</label>
            </span>
            <span>
                <label><input type="checkbox">Thanh Toán Khi Nhận Hàng</label>
            </span>
            <div class="success">
                <button  class="btn btn-default get" >Xác Nhận</button>
            </div>
        </div>
        </form>
    </div>
</section>
<!--/#cart_items-->
@endsection