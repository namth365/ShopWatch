@extends('Frontend.Layouts.Master')
@section('content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div>
        <!--/breadcrums-->
        <!--/checkout-options-->

        <div class="review-payment">
            <h2>Kiểm Tra Đơn Hàng Và Thông Tin </h2>
        </div>

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Hình Ảnh</td>
                        <td class="description">Mô Tả</td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số Lượng</td>
                        <td class="total">Tổng Tiền</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/cart/one.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Colorblock Scuba</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>$59</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1"
                                    autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$59</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Sản Phẩm</td>
                                    <td>$59</td>
                                </tr>
                                <tr>
                                    <td>Thuế</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>Tổng Tiền</td>
                                    <td><span>$61</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
		<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Thông Tin Đặt Hàng</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Tên Khách hàng">
									<input type="text" placeholder="Số Điện Thoại">
									<input type="text" placeholder="Địa Chỉ">
									<input type="text" placeholder="Email">
									<input type="text" placeholder="Giới Tính">
								</form>
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
		<a type="button" class="btn btn-default get" href="/success">Xác Nhận</a>
		</div>
        </div>
		
    </div>
</section>
<!--/#cart_items-->
@endsection