@extends('Frontend.Layouts.Master')
@section('content')
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="/"> Trang Chủ >></a></li>
				<li><a>Giỏ Hàng</a></li>
			</ol>
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
					@if(count($cart_code) === 0)
					<tr>
						<td colspan="6" class="cart_product">
							<b>Chưa có sản phẩm được thêm vào giỏ hàng</b>
						</td>
					</tr>
					@endif
					@foreach($cart_code as $cart)
					<tr>
						<td class="cart_product">
							<a href=""><img src="{{asset('images/product-details/'. $cart->image)}}" width="100px" height="100px" alt=""></a>
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
								<form action="{{route('edit-cart')}}" method="post">
									@csrf
									<input type="text" class="hidden" name="product_id[]" value="{{ $cart->name }}">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity[]" value="{{$cart->quantity}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">{{number_format($cart->total)."đ"}}</p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href="{{route('delete-cart',$cart->id)}}" onclik="return confirm('Xóa sản phẩm {{$cart->name}}')" class="btn btn-danger"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
<!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="heading">

			<p><b>Thông tin đơn hàng</b></p>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="total_area">
					<ul>
						<li>Tổng <span>{{ number_format($total->total)."đ" }}</span></li>
						<li>Phí vận chuyển <span>Free</span></li>
						<li>Tổng tiền phải thanh toán <span>{{ number_format($total->total)."đ" }}</span></li>
					</ul>
					<button type="submit" class="btn btn-default update">Cập nhật</button>
					</form>
					<a class="btn btn-default check_out" href="{{ route('check-out') }}">Thanh toán</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/#do_action-->
@endsection