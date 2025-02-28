<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Restaurant Cafe HTML Template">
    <meta name="author" content="ThemeEaster">

    <title>@yield('title') | Caferio </title>

    <link rel="shortcut icon" type="img/png" href="{{ url('frontend/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ url('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/food-icon.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/slider.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/venobox.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/splitting-cells.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/splitting.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/keyframe-animation.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/header.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/blog.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">

    <script src="{{ url('frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>

<body class="header-1">


    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div><!-- /.site-preloader-wrap -->

    <header class="header">
        <div class="primary-header-one primary-header">
            <div class="container">
                <div class="primary-header-inner">
                    <div class="header-logo">
                        <a href="#">
                            <img class="light" src="{{ url('frontend/img/logo-light.png') }}" alt="Logo" />
                            <img class="dark" src="{{ url('frontend/img/logo-dark.png') }}" alt="Logo" />
                        </a>
                    </div><!-- /.header-logo -->
                    <div class="header-menu-wrap">
                        <ul class="slider-menu">
                            <li><a href={{ url('/') }}>Home</a></li>

                            <li><a href={{ url('/about') }}>About Us</a></li>
                            <li><a href={{ url('/foodmenu') }}>FoodMenu</a></li>
                            <li><a href={{ url('/faqs') }}>Faq</a></li>
                            <li><a href={{ url('/shop') }}>Shop</a>
                            </li>
                            <li><a href={{ url('/blog') }}>Blog</a>
                            </li>
                            <li><a href={{ url('/contact') }}>Contact Us</a></li>
                        </ul>
                    </div><!-- /.header-menu-wrap -->
                    <div class="header-right">
                        <div class="search-icon dl-search-icon"><i class="las la-search"></i></div>

                        <div class="mobile-menu-icon">
                            <div class="burger-menu">
                                <div class="line-menu line-half first-line"></div>
                                <div class="line-menu"></div>
                                <div class="line-menu line-half last-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
