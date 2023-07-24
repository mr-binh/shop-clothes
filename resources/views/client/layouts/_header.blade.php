<header>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo d-flex justify-content-between align-items-center h-100">
                        <a href="{{route('client.home.index')}}"><img src="assets/images/logo.png" alt="logo"></a>
                        <div class="mobile-menu d-flex ">
                            <ul class="d-flex mobil-nav-icons align-items-center">
                                <li class="search-icon global-top"><a href="javascript:void(0)"><i
                                            class="flaticon-search-1"></i></a></li>
                                <li><a href="{{route('client.dashboard.index')}}"><i class="flaticon-user"></i></a></li>
                                <li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a>
                                </li>
                                <li class="cart-icon"><a href="javascript:void(0)"><i
                                            class="flaticon-shopping-cart"></i></a>
                                    <div class="has-count">0</div>
                                </li>
                            </ul>
                            <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                <span class="h-top"></span>
                                <span class="h-middle"></span>
                                <span class="h-bottom"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6">
                    <nav class="main-nav">
                        <div class="inner-logo d-xl-none">
                            <a href="{{route('client.home.index')}}">
                                <img src="assets/images/logo-v2.png" alt>
                            </a>
                        </div>
                        <ul>
                            <li>
                                <a href="{{route('client.home.index')}}">Home</a>
                            </li>
                            <li><a href="{{route('client.about.index')}}">About Us</a></li>
                            <li class="has-child-menu">
                                <a href="{{route('client.product.index')}}">Shop</a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="{{route('client.product-category.index','men')}}">Men</a></li>
                                    <li><a href="{{route('client.product-category.index','women')}}">Women</a></li>
                                    <li><a href="{{route('client.product-category.index','kid')}}">Kid</a></li>
                                </ul>
                            </li>

                            <li><a href="{{route('client.contact.index')}}">Contact Us</a></li>
                        </ul>
                        <ul class="inner-social-icons d-xl-none d-flex flex-wrap">
                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                            <li><a href="#"><i class="flaticon-twitter-1"></i></a></li>
                            <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
                            <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li>
                        </ul>
                    </nav>
                </div>
{{--               start icon--}}
                <div class="col-xl-3 col-2 d-none d-xl-block ">
                    <div class="nav-right h-100 d-flex align-items-center justify-content-end">
                        <ul class="d-flex nav-icons">
                            <li class="search-icon"><a href="javascript:void(0)"><i class="flaticon-search-1"></i></a>
                            </li>
                            <li><a href="{{route('client.dashboard.index')}}"><i class="flaticon-user"></i></a></li>
                            <li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a>
                            </li>
                            <li class="cart-icon"><a href="javascript:void(0)"><i
                                        class="flaticon-shopping-cart"></i></a>
                                <div class="has-count">{{ count((array) session('cart')) }}</div>
                            </li>
                        </ul>
                    </div>
                </div>
{{--                end icon--}}
            </div>
        </div>
    </div>
</header>
{{--start search--}}
<div class="main-searchbar">
    <div class="searchbar-wrap">
        <div class="container">
            <form action="#" method="POST" class="main-searchbar-form">
                <h5>What are you lookking for?</h5>
                <div class="searchbar-input">
                    <div class="input-wrap w-100 position-relative">
                        <input type="text" placeholder="Search Products, Category, Brands....">
                    </div>
                    <div class="search-close"><i class="flaticon-close"></i></div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end search-->

<!--start cart-->
@include('client.layouts._cart')
