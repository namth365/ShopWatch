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
<!--/head-->
<body>
    <header id="header">
        <!--header-->
        <!--header_top-->
        <!--/header_top-->
        @include('Frontend.Layouts.Header')
        <!--/header-->
        <!--slider-->
       
        <!--/slider-->
        <section>
            <div class="container">
                <div class="row">
                    @yield('content')
                    @include('Frontend.Layouts.Footer')
                    <!--/Footer-->
                    <script src="{{asset('js/jquery.js')}}"></script>
                    <script src="{{asset('js/bootstrap.min.js')}}"></script>
                    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
                    <script src="{{asset('js/price-range.js')}}"></script>
                    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
                    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>