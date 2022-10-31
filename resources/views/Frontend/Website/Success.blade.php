<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
    <div class="header_top">

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +84 981 56 88 89</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> SHN@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/" style="color:black"><img src="{{ asset('images/home/logo-shop.jpg')}}" width="100px" alt="" /><b style="color:orange;font-size:40px">WATCH</b> - SHOP <p style="margin-left: 113px;margin-top: -36px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                Khẳng định đẳng cấp phái mạnh</p></a>
                    </div>
                    <div class="btn-group pull-right">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="/"><i class="fas fa-home"></i>Trang chủ</a></li>

                            <li><a href=""><i class="fas fa-user"></i>Tài khoản</a></li>
                            <li>
                                <a class="display" href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i> <small style="color:red"></small> Giỏ hàng</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--/header-middle-->
    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active">Trang Chủ</a></li>
                            <li><a href="/lien-he">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">

                </div>

            </div>
        </div>
    </div>
    <!--/header-bottom-->
    </header>
    <div class="container">
        <div class="table-responsive cart_info">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background:rgba(255, 102, 0, 1);color:white">
                                <td>Sản phẩm</td>
                               
                                <td>Hình Ảnh</td>
                                <td>Giá</td>
                                <td>Số Lượng</td>
                                <td>Tổng Tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order_details as $order_detail)
                            <tr>
                                <td>
                                    <h4><a href="{{route('product_detail',$order_detail->id)}}">{{$order_detail->product->name}}</a></h4>
                                </td>
                            
                                <td>
                                    <a href=""><img src="{{asset('images/product-details/'. $order_detail->product->image)}}" width="100px" height="100px" alt=""></a>
                                </td>
                                <td>
                                    {{number_format($order_detail->product->price)."đ"}}
                                </td>
                                <td>
                                    {{$order_detail->quantity}}
                                </td>
                                <td>
                                    <p class="cart_total_price">{{number_format($order_detail->total)."đ"}}</p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6 mx-auto mt-5">
                <div class="payment">
                    <div class="payment_header">
                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <div class="content">
                        <h1>Thanh toán thành công !</h1>
                        <p>Cảm ơn bạn đã mua sản phẩm của shop </p>
                        <a href="/">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .payment {
                    border: 1px solid #f2f2f2;
                    height: 280px;
                    border-radius: 20px;
                    background: #fff;
                }

                .payment_header {
                    background: rgba(255, 102, 0, 1);
                    padding: 20px;
                    border-radius: 20px 20px 0px 0px;

                }

                .check {
                    margin: 0px auto;
                    width: 50px;
                    height: 50px;
                    border-radius: 100%;
                    background: #fff;
                    text-align: center;
                }

                .check i {
                    vertical-align: middle;
                    line-height: 50px;
                    font-size: 30px;
                }

                .content {
                    text-align: center;
                }

                .content h1 {
                    font-size: 25px;
                    padding-top: 25px;
                }

                .content a {
                    width: 200px;
                    height: 35px;
                    color: #fff;
                    border-radius: 30px;
                    padding: 5px 10px;
                    background: rgba(255, 102, 0, 1);
                    transition: all ease-in-out 0.3s;
                }

                .content a:hover {
                    text-decoration: none;
                    background: #000;
                }
            </style>
        </div>
    </div>
    <br> <br>
    </section>
    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Watch</span>-shop</h2>
                            <p>Chuyên cung cấp các mẫu đồng hồ thời trang</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>133 Lý Thường Kiệt, Tp Đông Hà</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính Sách Chung</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Giới thiệu chung</a></li>
                                <li><a href="#">Hướng dẫn thanh toán</a></li>
                                <li><a href="#">Chính sách giao hàng</a></li>
                                <li><a href="#">Chính sách đổi trả</a></li>
                                <li><a href="#">Chính sách bảo hành</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Liên hệ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Hotline:</a></li>
                                <li><a href="#">Fax</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Nhận thông tin</h2>
                            <form action="#" class="searchform" style="display: table-footer-group;">
                                <input type="text" placeholder="Nhập địa chỉ email" />
                                <button type="submit" class="btn btn-default"><i class="fas fa-arrow-alt-circle-right"></i></button>
                                <p>Nhận thông tin khuyến mãi <br />...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
    </footer>

</body>

</html>