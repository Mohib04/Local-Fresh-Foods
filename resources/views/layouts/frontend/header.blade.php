<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="MediaCenter, Template, eCommerce" />
    <meta name="robots" content="all" />
    <title>Local Fresh Foods</title>

    {{--    favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }}">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />

    {{-- Tailwind Css --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/blue.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rateit.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}" />

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.css') }}" />
    <script src="https://kit.fontawesome.com/ec58576b82.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
</head>

<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
   @include('layouts.frontend.topmenu')
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img style="width: 80px;" src="{{ asset('frontend/assets/images/logo.png') }}" alt="logo" />
                        </a>
                    </div>
                    <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories <b class="caret"></b
                                            ></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="category.html">- Clothing</a
                                                >
                                            </li>
                                            <li role="presentation">
                                                <a
                                                    role="menuitem"
                                                    tabindex="-1"
                                                    href="category.html"
                                                >- Electronics</a
                                                >
                                            </li>
                                            <li role="presentation">
                                                <a
                                                    role="menuitem"
                                                    tabindex="-1"
                                                    href="category.html"
                                                >- Shoes</a
                                                >
                                            </li>
                                            <li role="presentation">
                                                <a
                                                    role="menuitem"
                                                    tabindex="-1"
                                                    href="category.html"
                                                >- Watches</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field" placeholder="Search here..." />
                                <a class="search-button" href="#"></a>
                            </div>
                        </form>
                    </div>
                    <!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div>
                <!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart">
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count">
                                    <span class="count">2</span>
                                </div>
                                <div class="total-price-basket">
                                    <span class="lbl">cart -</span>
                                    <span class="total-price">
                        <span class="sign">$</span
                        ><span class="value">600.00</span>
                                        </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="detail.html"><img src="{{ asset('frontend/assets/images/cart.jpg') }}" alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <h3 class="name">
                                                <a href="index.php?page-detail">Simple Product</a>
                                            </h3>
                                            <div class="price">$600.00</div>
                                        </div>
                                        <div class="col-xs-1 action">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr />
                                <div class="clearfix cart-total">
                                    <div class="pull-right">
                                            <span class="text">Sub Total :</span
                                            ><span class="price">$600.00</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a
                                    >
                                </div>
                                <!-- /.cart-total-->
                            </li>
                        </ul>
                        <!-- /.dropdown-menu-->
                    </div>
                    <!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div>
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-header -->

   @include('layouts.frontend.navbar')
</header>

<!-- ============================================== HEADER : END ============================================== -->
