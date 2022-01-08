@extends('Frontend.Layouts.Master')
@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Thể Loại</h2>
					<div class="panel-group category-products" id="accordian">
						<!--category-productsr-->
						<div class="panel panel-default">
							<div class="panel-heading">
								@foreach($categories as $category)
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="{{route('category',$category->id)}}">
										<br>
										{{$category->name}}
									</a>
								</h4>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-9 padding-right">
				<div class="product-details">
					<!--product-details-->
					<div class="col-sm-5">
						<div class="view-product">
							<img src="{{asset('images/product-details/'.$product->image)}}" alt="" />
						</div>
						<div id="similar-product" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">

							</div>
							<!-- Controls -->
							<a class="left item-control" href="#similar-product" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right item-control" href="#similar-product" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="product-information">
							<!--/product-information-->
							<img src="{{asset('images/product-details'.$product->image)}}" class="newarrival" alt="" />
							<h2> {{$product->name}}</h2>
							<span>
								<span>Giá: {{number_format($product->price)."đ"}}</span>
								<label>Số Lượng: </label>
								<form action="">
									<input type="text" value="3" />
								</form>
							</span>
							<p><b>Chỉ Còn: </b>{{$product->quantily}} Sản Phẩm</p>
							<p><b>Mô Tả:</b> {{$product->description}}</p>
							<br>
							<a href="{{route('cart')}}" type="button" class="btn btn-fefault cart">
								<i class="fa fa-shopping-cart"></i>
								Thêm Vào Giỏ
							</a>
							<button href="" type="button" class="btn btn-primary" style="display:inline;margin-top:-10px">
								Tiếp tục mua hàng
							</button>
						</div>
					</div>
				</div>
				<div class="recommended_items">
					<!--recommended_items-->
					<h2 class="title text-center">Sản Phẩm Liên Quan</h2>

					<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
							@foreach($related_products as $related_product)
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/product-details/'.$related_product->image)}}" alt="" />
												<h2>{{number_format($related_product->price)."đ"}}</h2>
												<p>{{$related_product->name}}</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							</div>

						</div>
						<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
				<!--/recommended_items-->

			</div>
		</div>
	</div>
</section>
@endsection