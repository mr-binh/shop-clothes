<header>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo d-flex justify-content-between align-items-center h-100">
                        <a href="index-2.html"><img src="assets/images/logo.png" alt="logo"></a>
                        <div class="mobile-menu d-flex ">
                            <ul class="d-flex mobil-nav-icons align-items-center">
                                <li class="search-icon global-top"><a href="javascript:void(0)"><i
                                            class="flaticon-search-1"></i></a></li>
                                <li><a href="dashboard.html"><i class="flaticon-user"></i></a></li>
                                <li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a>
                                </li>
                                <li class="cart-icon"><a href="javascript:void(0)"><i
                                            class="flaticon-shopping-cart"></i></a>
                                    <div class="has-count">12</div>
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
                            <a href="index-2.html">
                                <img src="assets/images/logo-v2.png" alt>
                            </a>
                        </div>
                        <ul>
                            <li>
                                <a href="{{route('client.home.index')}}">Home</a>
{{--                                <i class="fl flaticon-plus">+</i>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li><a href="https://demo.egenslab.com/html/eg-shop-fashion/v1/index.html">EG Shop--}}
{{--                                            Fashion 1</a></li>--}}
{{--                                    <li><a href="index-2.html">EG Shop Fashion 2</a></li>--}}
{{--                                    <li><a href="https://demo.egenslab.com/html/eg-shop-fashion/v3/index.html">EG Shop--}}
{{--                                            Fashion 3</a></li>--}}
{{--                                </ul>--}}
                            </li>
                            <li><a href="{{route('client.about.index')}}">About Us</a></li>
                            <li class="has-child-menu">
{{--                                <a href="javascript:void(0)">Shop</a>--}}
                                <a href="{{route('client.product.index')}}">Shop</a>
{{--                                <i class="fl flaticon-plus">+</i>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li><a href="product.html">Shop</a></li>--}}
{{--                                    <li><a href="product-sidebar.html">Shop Sidebar</a></li>--}}
{{--                                    <li><a href="product-details.html">Shop Details</a></li>--}}
{{--                                </ul>--}}
                            </li>
{{--                            <li class="has-child-menu">--}}
{{--                                <a href="javascript:void(0)">Pages</a>--}}
{{--                                <i class="fl flaticon-plus">+</i>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li><a href="gift-card.html">Gift Cards</a></li>--}}
{{--                                    <li><a href="cart.html">Cart</a></li>--}}
{{--                                    <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                    <li><a href="login.html">Login</a></li>--}}
{{--                                    <li><a href="register.html">Register</a></li>--}}
{{--                                    <li><a href="dashboard.html">Dashboard</a></li>--}}
{{--                                    <li><a href="profile.html">Profile</a></li>--}}
{{--                                    <li><a href="order.html">Orders</a></li>--}}
{{--                                    <li><a href="setting.html">Setting</a></li>--}}
{{--                                    <li><a href="comming-soon.html">Comming Soon</a></li>--}}
{{--                                    <li><a href="faq.html">FAQ</a></li>--}}
{{--                                    <li><a href="404.html">404</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="has-child-menu">--}}
{{--                                <a href="javascript:void(0)">Blog</a>--}}
{{--                                <i class="fl flaticon-plus">+</i>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li><a href="blog.html">Blog Grid</a></li>--}}
{{--                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>--}}
{{--                                    <li><a href="blog-standard.html">Blog Standard</a></li>--}}
{{--                                    <li><a href="blog-details1.html">Blog Details 1</a></li>--}}
{{--                                    <li><a href="blog-details2.html">Blog Details 2</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
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
                                <div class="has-count">12</div>
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
<div class="cart-sidebar-wrappper">
    <div class="main-cart-sidebar">
        <div class="cart-top">
            <div class="cart-close-icon">
                <i class="flaticon-letter-x"></i>
            </div>
            <ul class="cart-product-grid">
                <li class="single-cart-product">
                    <div class="cart-product-info d-flex align-items-center">
                        <div class="product-img"><img src="assets/images/product/cart-p1.png" alt class="img-fluid">
                        </div>
                        <div class="product-info">
                            <a href="product-details.html"><h5 class="product-title">Men Casual Summer Sale</h5></a>
                            <ul class="product-rating d-flex">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star"></i></li>
                            </ul>
                            <p class="product-price"><span>1</span>x <span class="p-price">$10.32</span>
                            </p>
                        </div>
                    </div>
                    <div class="cart-product-delete-btn">
                        <a href="javascript:void(0)"><i class="flaticon-letter-x"></i></a>
                    </div>
                </li>
                <li class="single-cart-product">
                    <div class="cart-product-info d-flex align-items-center">
                        <div class="product-img"><img src="assets/images/product/cart-p3.png" alt class="img-fluid">
                        </div>
                        <div class="product-info">
                            <a href="product-details.html"><h5 class="product-title">Something Yellow Jens</h5></a>
                            <ul class="product-rating d-flex">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star"></i></li>
                            </ul>
                            <p class="product-price"><span>1</span>x <span class="p-price">$10.32</span>
                            </p>
                        </div>
                    </div>
                    <div class="cart-product-delete-btn">
                        <a href="javascript:void(0)"><i class="flaticon-letter-x"></i></a>
                    </div>
                </li>
                <li class="single-cart-product">
                    <div class="cart-product-info d-flex align-items-center">
                        <div class="product-img"><img src="assets/images/product/cart-p2.png" alt class="img-fluid">
                        </div>
                        <div class="product-info">
                            <a href="product-details.html"><h5 class="product-title">Woman Something Navy Top</h5></a>
                            <ul class="product-rating d-flex">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star"></i></li>
                            </ul>
                            <p class="product-price"><span>1</span>x <span class="p-price">$10.32</span>
                            </p>
                        </div>
                    </div>
                    <div class="cart-product-delete-btn">
                        <a href="javascript:void(0)"><i class="flaticon-letter-x"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="cart-bottom">
            <div class="cart-total d-flex justify-content-between">
                <label>Subtotal :</label>
                <span>$64.08</span>
            </div>
            <div class="cart-btns">
                <a href="checkout.html" class="cart-btn checkout">CHECKOUT</a>
                <a href="cart.html" class="cart-btn cart">VIEW CART</a>
            </div>
{{--            <p class="cart-shipping-text"><strong>SHIPPING:</strong> Continue shopping up to $64.08 and receive free--}}
{{--                shipping. stay with EG </p>--}}
        </div>
    </div>
</div>
