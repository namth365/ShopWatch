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
                        <a  href="{{route('category',$category->id)}}">
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
            <img src="images/home/shipping.jpg" alt="" />
        </div>
        <!--/shipping-->
    </div>
</div>
<div class="col-sm-9 padding-right">
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Tất Cả Sản Phẩm</h2>
        @foreach($products as $product)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{asset('images/product-details/'.$product->image)}}" alt=""/>
                        <h2>{{number_format($product->price)."đ"}}</h2>
                        <p>{{$product->name}}</p>
                        <a href="{{route('product_detail', $product->id)}}" class="btn btn-default">Xem Chi Tiết</a>
                        <a href="" class="btn btn-default add-to-cart" style="display:inline"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!--features_items-->
<div class="recommended_items">
        <!--recommended_items-->
        <h2 class="title text-center">Sản Phẩm Nổi Bật</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend1.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend1.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                </div>

                            </div>
                        </div>
                    </div>

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

    @endsection