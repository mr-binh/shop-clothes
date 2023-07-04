@extends('client.layouts.main')
@section('title', 'Shop')
@section('client.content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <h3 class="page-title">Shop</h3>
                    <ul class="page-switcher">
                        <li><a href="index-2.html">Home <i class="bi bi-chevron-right"></i></a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="product-grid-wrapper mt-96">
    <div class="container">
        <div class="product-sorting">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="show-text"><span>Showing 1-9 of 18 Result</span></div>
                </div>
                <div class="col-lg-6">
                    <div class="category-sort d-flex align-items-center justify-content-end">
                        <select name="category-sort" id="category-sort">
                            <option selected>Default Sorting</option>
                            <option value="1">Sort by Size</option>
                            <option value="2">Sort by Price</option>
                            <option value="3">Sort by Color</option>
                        </select>
                        <div class="product-searchbar">
                            <form action="#" method="POST" class="product-searchbar-form">
                                <input type="text" name="sidebar-search-input" id="sidebar-search-input"
                                       placeholder="Search">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">UNIQLO Man Mid Rise</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Man Casul Summer Dress</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Women Renta Silk Dress</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Simple Man Mid Rise</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Buy khaki polo neck jumper </a>
                        </h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">kid's Summer Shirt</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Men’s Renta Silk Dress</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Women Renta Silk Dress</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="product-card-l">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="assets/images/product/product-1a.png" alt>
                            <img src="assets/images/product/product-1b.png" alt class="hover-img">
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
                        <h3 class="product-title"><a href="product-details.html">UNIQLO Man Mid Rise</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Man Casul Summer Dress</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Women Renta Silk Dress</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Simple Man Mid Rise</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Buy khaki polo neck jumper </a>
                        </h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">kid's Summer Shirt</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Men’s Renta Silk Dress</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
                        <h3 class="product-title"><a href="product-details.html">Women Renta Silk Dress</a></h3>
                        <div class="product-price">
                            <del class="old-price">$302.74</del>
                            <ins class="new-price">$290.05</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="custom-pagination d-flex justify-content-center mt-70">
                    <ul class="d-flex pagination-links">
                        <li><a href="#" class="has-arrow"><i class="flaticon-arrow-pointing-to-left"></i></a></li>
                        <li><a href="#" class="active-page">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" class="has-arrow"><i class="flaticon-arrow-pointing-to-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
