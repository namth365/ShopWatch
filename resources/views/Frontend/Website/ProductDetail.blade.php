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
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{asset('images/product-details/'.$product->image)}}" alt="" />
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href=""><img src="" alt=""></a>
                                </div>

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
                            <img src="{{asset('images/'.$product->image)}}" class="newarrival" alt="" />
                            <h2> {{$product->name}}</h2>
                            <span>
                                <span>Giá: {{number_format($product->price)."đ"}}</span>
                                <label>Số Lượng: </label>
                                <input type="text" value="3" />

                            </span>
                            <p><b>Chỉ Còn:</b>{{$product->quantily}} Sản Phẩm</p>
                            <p><b>Mô Tả:</b> {{$product->description}}</p>
                            <button type="button" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Thêm Vào Giỏ
                            </button>
                        </div>
                        <!--/product-information-->
                    </div>
                </div>
                <!--/product-details-->

                <div class="category-tab shop-details-tab">
                    <!--category-tab-->

                    <div class="tab-content">
                        <div class="tab-pane fade" id="details">
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/gallery1.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>




                        <div class="tab-pane fade active in" id="reviews">
                            <div class="col-sm-12">


                                <form action="#">



                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/category-tab-->

                <div class="recommended_items">
                    <!--recommended_items-->
                    <h2 class="title text-center">Sản Phẩm Liên Quan</h2>

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
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</button>
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

            </div>
        </div>
    </div>
</section>
@endsection