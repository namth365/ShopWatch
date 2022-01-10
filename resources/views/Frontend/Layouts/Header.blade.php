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
                    <a href="/" style="color:black"><img src="images/home/logo-shop.jpg" width= "100px" alt="" /></a>
                </div>
                <div class="btn-group pull-right">

                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href=""><i class="fas fa-user"></i>Tài khoản</a></li>
                        <li><a href="/checkout"><i class="fa fa-crosshairs"></i>Thanh Toán</a></li>  
                        <li>
					    <a  class = "display" href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i> <small style="color:red">({{ $count }})</small> Giỏ hàng</a> 
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
            <div class="col-sm-9">
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
                        <li class="dropdown"><a href="#">Danh Mục<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="shop.html">Products</a></li>
                            </ul>
                        </li>
                        <li><a href="/lien-he">Liên Hệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Tìm kiếm" />
                </div>
            </div>
        </div>
    </div>
</div>
<!--/header-bottom-->
</header>