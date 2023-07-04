<!doctype html>
<html lang="en">
<head>
    <base href="/">
    <title>Shop Clothes</title>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link rel="shortcut icon" href="{{ asset('assets/media/logos/poly-favicon.ico') }}"/>--}}
    @include('client.layouts._style')
    @yield('client.page-style')
</head>
<body>
<div class="mobil-sidebar d-sm-none">
    <ul class="mobil-sidebar-icons">
        <li class="category-icon"><a href="#"><i class="flaticon-menu"></i></a></li>
        <li><a href="dashboard.html"><i class="flaticon-user"></i></a></li>
        <li><a href="#"><i class="flaticon-heart"></i></a></li>
        <li class="cart-icon">
            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
            <div class="cart-count"><span>10</span></div>
        </li>
    </ul>
</div>
@include('client.layouts._aside')
@include('client.layouts._header')
@yield('client.content')

<!-- footer-area start -->
<div class="footer-area mt-120">
    <div class="footer-wrap">
        <div class="footer-shape">
            <img src="{{asset("assets/images/shape/footer-vactor.png")}}" alt>
        </div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <a href="index-2.html"><img src="{{asset("assets/images/logo-v2.png")}}" alt></a>
                        </div>
                        <p class="about-text">EG STORE - worldwide fashion store since 2021. We sell over 200+ branded
                            products on our web-site.</p>
                        <div class="footer-contact">
                            <a href="#">Add. 168/170, Avenue 01, Mirpur DOHS, Bangladesh.</a>
                            <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#85ecebe3eac5e0fde4e8f5e9e0abe6eae8">Email:
                                <span class="__cf_email__" data-cfemail="462f28202906233e272b362a236825292b">[email&#160;protected]</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h5 class="footer-widget-title">Quick Links</h5>
                                <ul class="footer-links">
                                    <li><a href="about.html">About EG STORE</a></li>
                                    <li><a href="product.html">New Collection</a></li>
                                    <li><a href="product.html">Woman Dress</a></li>
                                    <li><a href="product.html">Man Dress</a></li>
                                    <li><a href="blog.html">Our Latest News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h5 class="footer-widget-title">Company</h5>
                                <ul class="footer-links">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Returns </a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Our Support</a></li>
                                    <li><a href="#">Terms &amp; Service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 ">
                            <div class="footer-widget">
                                <h5 class="footer-widget-title">We Accepts:</h5>
                                <ul class="footer-payment d-flex flex-wrap">
                                    <li><img src="{{asset("assets/images/payment/pay1.png")}}" alt></li>
                                    <li><img src="{{asset("assets/images/payment/pay2.png")}}" alt></li>
                                    <li><img src="{{asset("assets/images/payment/pay3.png")}}" alt></li>
                                    <li><img src="{{asset("assets/images/payment/pay3.png")}}" alt></li>
                                    <li><img src="{{asset("assets/images/payment/pay2.png")}}" alt></li>
                                    <li><img src="{{asset("assets/images/payment/pay1.png")}}" alt></li>
                                </ul>
                                <div class="footer-social-links">
                                    <h5>Follow Us:</h5>
                                    <ul class="social-icons d-flex">
                                        <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                        <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter-1"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <p>Copyright 2021 EG Shop Fashion | Design By <a href="#">Egens Lab</a></p>
    </div>
</div>
@include('client.layouts._script')
@yield('client.page-script')
</body>
</html>
