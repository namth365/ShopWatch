@extends('Frontend.Layouts.Master')
@section('content')

<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Thể Loại</h2>
        <div class="panel-group category-products" id="accordian">
            <!--category-productsr-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    @foreach($categories as $category)
                    <h4 class="panel-title">
                        <a href="{{route('category',$category->id)}}">
                            <br>
                            {{$category->name}}
                        </a>
                    </h4>
                    @endforeach
                </div>
            </div>
        </div>
        <!--/category-products-->
        <div class="shipping text-center">
            <!--shipping-->
            <img src="{{ asset('images/home/pr2.jpg')}}" alt="" height="290px" ; width="250px" ; />
        </div>
        <br>
        <!--/shipping-->

    </div>
</div>
<div class="col-sm-9 padding-right">
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Tất cả sản phẩm</h2>
        @foreach($products as $product)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{asset('images/product-details/'.$product->image)}}" alt="" />
                        <h2>{{number_format($product->price)."đ"}}</h2>
                        <p>{{$product->name}}</p>
                        <a href="{{route('product_detail', $product->id)}}" class="btn btn-warning">Xem Chi Tiết</a>
                        <!-- <a href="{{route('addtocart',$product->id)}}" class="btn btn-default add-to-cart" style="display:inline"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a> -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class=" d-flex justify-content-end text-center">
        {{ $products->links() }}
    </div>
    <!--features_items-->
    @endsection