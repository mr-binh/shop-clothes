@extends('client.layouts.main')
@section('title', 'Home')
@section('client.content')
<!--start search-->

<!--end cart-->

<!--<div class="topbar-area">-->
<!--    <div class="container">-->
<!--        <div class="row align-items-center">-->
<!--            <div class="col-lg-4 ">-->
<!--                <ul class="topbar-social-icons d-flex align-items-center">-->
<!--                    <li class="follow-text">Follow Us</li>-->
<!--                    <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>-->
<!--                    <li><a href="#"><i class="flaticon-twitter-1"></i></a></li>-->
<!--                    <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>-->
<!--                    <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-lg-center">-->
<!--                <div class="topbar-mobil-contact">-->
<!--                    <a href="tel:+8801761111456">Hot Line : +880 176 1111 456</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                <ul class="topbar-right d-flex align-items-center justify-content-end">-->
<!--                    <li class="order-track">-->
<!--                        <a href="#"><i class="flaticon-pin"></i> Track Order</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <select class="languege-select" aria-label="Default select example">-->
<!--                            <option selected>USD</option>-->
<!--                            <option value="1">URU</option>-->
<!--                            <option value="2">CSD</option>-->
<!--                        </select>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--start header-->

<!--end header area-->
<!--start banner-->
<div class="hero-area position-relative">
    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-slide-item">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                            <div class="slide-item-content">
                                <h5>Sale up 75% off</h5>
                                <h2 class="slide-item-title">Imagine the next level of <span>Fashion</span></h2>
                                <div class="slide-item-btn">
                                    <a href="product.html" class="primary-btn-xl">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-lg-end">
                            <div class="slide-item-figure">
                                <img src="assets/images/banner/banner-figure11.png" alt class="img-fluid figure">
                                <div class="figure-shape">
                                    <img src="assets/images/shape/banner-shape.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero-slide-item">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                            <div class="slide-item-content">
                                <h5>Sale up 75% off</h5>
                                <h2 class="slide-item-title">Imagine is the best way <span>Fashion</span></h2>
                                <div class="slide-item-btn">
                                    <a href="product.html" class="primary-btn-xl">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-lg-end">
                            <div class="slide-item-figure">
                                <img src="assets/images/banner/banner-figure2.png" alt class="img-fluid figure">
                                <div class="figure-shape">
                                    <img src="assets/images/shape/banner-shape.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><span>Next</span><i
            class="flaticon-arrow-pointing-to-right"></i></div>
    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i
            class="flaticon-arrow-pointing-to-left"></i><span>Back</span></div>
    <div class="fixed-social-icons d-xl-block d-none">
        <ul>
            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
            <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li>
            <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
        </ul>
        <h5>Special Edition</h5>
    </div>
</div>
<!--end banner-->

<div class="features-area mt-96">
    <div class="container">
        <div class="row features-row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-box">
                    <div class="feature-timeline">
                        <span>01</span>
                    </div>
                    <div class="single-feature">
                        <div class="feature-icon">
                            <i class="flaticon-shipping"></i>
                            <span>Our Quality</span>
                        </div>
                        <h5>Most Advanced Features</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-box">
                    <div class="feature-timeline">
                        <span>02</span>
                    </div>
                    <div class="single-feature">
                        <div class="feature-icon">
                            <i class="flaticon-price-tag"></i>
                            <span>Our Price</span>
                        </div>
                        <h5>Very Reasonable Price</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-box">
                    <div class="feature-timeline">
                        <span>03</span>
                    </div>
                    <div class="single-feature">
                        <div class="feature-icon">
                            <i class="flaticon-puzzle"></i>
                            <span>Our Delivery</span>
                        </div>
                        <h5>Product Frist Delivery</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-box">
                    <div class="feature-timeline">
                        <span>04</span>
                    </div>
                    <div class="single-feature">
                        <div class="feature-icon">
                            <i class="flaticon-headphones"></i>
                            <span>Our Support</span>
                        </div>
                        <h5>24/7 Live Support</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--start category-->
<div class="medium-banner-area mt-96">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="banner-md-wrap">
                    <div class="banner-image">
                        <a href="#"><img src="assets/images/banner/banner-md2.png" alt></a>
                    </div>
                    <div class="banner-content-wrap banner-left">
                        <div class="banner-content">
                            <h3>Woman <br>Collection 2021</h3>
                            <div class="banner-btn">
                                <a href="product.html" class="banner-md-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="banner-md-wrap ">
                    <div class="banner-image">
                        <a href="#"><img src="assets/images/banner/banner-md1.png" alt></a>
                    </div>
                    <div class="banner-content-wrap text-end justify-content-end banner-right">
                        <div class="banner-content">
                            <h3>Men’s <br>Collection 2021</h3>
                            <div class="banner-btn">
                                <a href="product.html" class="banner-md-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end category-->

<div class="product-area mt-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header">
                    <h2>Select your best</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab-buttons">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Top Sale
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">NEW ARRIVAL
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Best seller
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-content product-tab" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-1a.png" alt>
                                            <img src="assets/images/product/product-1b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">

                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">UNIQLO Man Mid Rise</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-8a.png" alt>
                                            <img src="assets/images/product/product-8b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Man Casul Summer
                                                Dress</a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-7a.png" alt>
                                            <img src="assets/images/product/product-7b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                            <span class="discount">-40%</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Women Renta Silk
                                                Dress</a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-6a.png" alt>
                                            <img src="assets/images/product/product-6a.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Simple Man Mid Rise</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-5a.png" alt>
                                            <img src="assets/images/product/product-5b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                            <span class="sold-out">Sold Out</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Buy khaki polo neck
                                                jumper </a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-4a.png" alt>
                                            <img src="assets/images/product/product-4b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">kid's Summer Shirt</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-3a.png" alt>
                                            <img src="assets/images/product/product-3b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Men’s Renta Silk
                                                Dress</a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-2b.png" alt>
                                            <img src="assets/images/product/product-2b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                            <span class="new">New</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Women Renta Silk
                                                Dress</a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-7a.png" alt>
                                            <img src="assets/images/product/product-7b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                            <span class="discount">-40%</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Women Renta Silk
                                                Dress</a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-6a.png" alt>
                                            <img src="assets/images/product/product-6a.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Simple Man Mid Rise</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-5a.png" alt>
                                            <img src="assets/images/product/product-5b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                            <span class="sold-out">Sold Out</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Buy khaki polo neck
                                                jumper </a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-4a.png" alt>
                                            <img src="assets/images/product/product-4b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">kid's Summer Shirt</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-3a.png" alt>
                                            <img src="assets/images/product/product-3b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Men’s Renta Silk
                                                Dress</a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-2b.png" alt>
                                            <img src="assets/images/product/product-2b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                            <span class="new">New</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Women Renta Silk
                                                Dress</a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-1a.png" alt>
                                            <img src="assets/images/product/product-1b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">

                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">UNIQLO Man Mid Rise</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-8a.png" alt>
                                            <img src="assets/images/product/product-8b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Man Casul Summer
                                                Dress</a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-7a.png" alt>
                                            <img src="assets/images/product/product-7b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                            <span class="discount">-40%</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Women Renta Silk
                                                Dress</a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-6a.png" alt>
                                            <img src="assets/images/product/product-6a.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Simple Man Mid Rise</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-5a.png" alt>
                                            <img src="assets/images/product/product-5b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                            <span class="sold-out">Sold Out</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Buy khaki polo neck
                                                jumper </a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-4a.png" alt>
                                            <img src="assets/images/product/product-4b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">kid's Summer Shirt</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-card-l">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-3a.png" alt>
                                            <img src="assets/images/product/product-3b.png" alt class="hover-img">
                                        </a>
                                        <div class="product-lavels">
                                        </div>
                                        <div class="product-actions">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="product-details.html"><i class="flaticon-search"></i></a>
                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <ul class="d-flex product-rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li>(<span>8</span> Review)</li>
                                        </ul>
                                        <h3 class="product-title"><a href="product-details.html">Men’s Renta Silk
                                                Dress</a></h3>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del>
                                            <ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="wide-banner-area mt-120">
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-xxl-6">
                <div class="banner-content">
                    <h5>Biggest Offer</h5>
                    <h2 class="banner-title">Fashion Online at The most affordable price</h2>
                    <div class="banner-quote">
                        Sale 30% off <br> your First Order
                    </div>
                    <div class="banner-btn">
                        <a href="product.html" class="primary-btn-md">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="category-area position-relative mt-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header">
                    <h2>All Category</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="swiper-container category-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="single-category">
                            <div class="category-thumb">
                                <img src="assets/images/category/ct-1.png" alt>
                            </div>
                            <div class="category-content">
                                <h5 class="category-title">
                                    <a href="product.html">DRESSES | JUMPSUITS</a>
                                </h5>
                                <p>Jumpsuits Mini Midi Maxi</p>
                                <div class="category-btn">
                                    <a href="product.html">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-category">
                            <div class="category-thumb">
                                <img src="assets/images/category/ct-2.png" alt>
                            </div>
                            <div class="category-content">
                                <h5 class="category-title">
                                    <a href="product.html">Diamonds RING</a>
                                </h5>
                                <p>Midi Maxi</p>
                                <div class="category-btn">
                                    <a href="product.html">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-category">
                            <div class="category-thumb">
                                <img src="assets/images/category/ct-3.png" alt>
                            </div>
                            <div class="category-content">
                                <h5 class="category-title">
                                    <a href="product.html">Woman Set jewelry</a>
                                </h5>
                                <p>Jumpsuits Mini Midi Maxi</p>
                                <div class="category-btn">
                                    <a href="product.html">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-category">
                            <div class="category-thumb">
                                <img src="assets/images/category/ct-4.png" alt>
                            </div>
                            <div class="category-content">
                                <h5 class="category-title">
                                    <a href="product.html">Kid’s School Bag</a>
                                </h5>
                                <p>Midi Maxi</p>
                                <div class="category-btn">
                                    <a href="product.html">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i
                    class="flaticon-arrow-pointing-to-right"></i></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i
                    class="flaticon-arrow-pointing-to-left"></i></div>
        </div>
    </div>
</div>


<div class="blog-area-start mt-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header">
                    <h2>Fresh news</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-card-md">
                    <div class="blog-thumb">
                        <a href="blog-details1.html"><img src="assets/images/blog/bl-1.png" alt></a>
                        <div class="blog-date-label"><a href="#">19 Jan, 2021</a></div>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title">
                            <a href="blog-details1.html">Benefits of starting a fashion?</a>
                        </h4>
                        <p>Shop the latest clothing, shoes, and handbags from
                            top fashion brands, style icons</p>
                        <div class="blog-btn">
                            <a href="blog-details1.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-card-md">
                    <div class="blog-thumb">
                        <a href="blog-details1.html"><img src="assets/images/blog/bl-2.png" alt></a>
                        <div class="blog-date-label"><a href="#">19 Jan, 2021</a></div>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title">
                            <a href="blog-details1.html">Benefits of starting a fashion?</a>
                        </h4>
                        <p>Shop the latest clothing, shoes, and handbags from
                            top fashion brands, style icons</p>
                        <div class="blog-btn">
                            <a href="blog-details1.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-card-md">
                    <div class="blog-thumb">
                        <a href="blog-details1.html"><img src="assets/images/blog/bl-3.png" alt></a>
                        <div class="blog-date-label"><a href="#">19 Jan, 2021</a></div>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title">
                            <a href="blog-details1.html">Benefits of starting a fashion?</a>
                        </h4>
                        <p>Shop the latest clothing, shoes, and handbags from
                            top fashion brands, style icons</p>
                        <div class="blog-btn">
                            <a href="blog-details1.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="more-blog-btn mt-70 text-center">
                    <a href="blog.html" class="primary-btn-md">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="sponsor-logo-area mt-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-symbols-3"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-massachusetts-institute-of-technology-logotype"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-my-life-social-logo"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-stanford-university-logo"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-club-dante-social-logotype"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-funny-or-die-logo"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-tuenti-social-logo"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-ning-social-logo"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-gather-logo"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-inside-the-hotel-logotype"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-virus-total-text-logo"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                <div class="single-logo">
                    <a href="#"><i class="flaticon-blogbus-logo"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="social-gallary-area mt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-gallary-wrap">
                    <div class="single-gallary-item">
                        <img src="assets/images/gallary/g-item1.png" alt>
                    </div>
                    <div class="gallary-item-link">
                        <a href="#"><i class="flaticon-facebook-app-symbol"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-gallary-wrap">
                    <div class="single-gallary-item">
                        <img src="assets/images/gallary/g-item3.png" alt>
                    </div>
                    <div class="gallary-item-link">
                        <a href="#"><i class="flaticon-facebook-app-symbol"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-gallary-wrap">
                    <div class="single-gallary-item">
                        <img src="assets/images/gallary/g-item2.png" alt>
                    </div>
                    <div class="gallary-item-link">
                        <a href="#"><i class="flaticon-facebook-app-symbol"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-gallary-wrap">
                    <div class="single-gallary-item">
                        <img src="assets/images/gallary/g-item4.png" alt>
                    </div>
                    <div class="gallary-item-link">
                        <a href="#"><i class="flaticon-facebook-app-symbol"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="newslatter-area mt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="newslatter-wrap ">
                    <div class="corner-1 position-absolute top-0 start-0">
                        <img src="assets/images/shape/corner1.png" alt>
                    </div>
                    <div class="corner-2 position-absolute end-0 bottom-0">
                        <img src="assets/images/shape/corner2.png" alt>
                    </div>
                    <div class="newslatter-content position-relative">
                        <h3>NEWSLETTER</h3>
                        <p> Join now and get 20% off your next purchase!</p>
                        <div class="plane-vactor d-lg-block d-none">
                            <img src="assets/images/shape/plane-vactor.png" alt>
                        </div>
                        <form action="#" id="newslatter" class="newslatter">
                            <div class="newslatter-form">
                                <input type="text" name="newslatter-form" placeholder="Type Your Email">
                                <button type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


