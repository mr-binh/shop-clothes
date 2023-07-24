@extends('client.layouts.main')
@section('title', 'Shop')
@section('client.content')
    <div class="product-sidebar-wrapper mt-96">
        <div class="container">
            <div class="product-sorting">
                <div class="row align-items-center">
                    <div class="col-lg-6">
{{--                        <div class="show-text"><span>Showing 1-9 of 18 Result</span></div>--}}
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
                                <form action="{{route('client.product.index')}}" method="get" class="product-searchbar-form">
                                    <input type="text" name="q" id="sidebar-search-input"
                                           placeholder="Search">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="row">
                        @foreach($products as $prod)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="product-card-l">
                                <div class="product-img">
                                    <a href="{{route('client.product.detail',$prod->slug)}}">
                                        <img src="assets/images/product/product-1a.png" alt>
                                        <img src="assets/images/product/product-1b.png" alt class="hover-img">
                                    </a>
                                    <div class="product-lavels">

                                    </div>
                                    <div class="product-actions">
                                        <a href="#"><i class="flaticon-heart"></i></a>
                                        <a href="{{route('client.product.detail',$prod->slug)}}"><i class="flaticon-search"></i></a>
                                        <a href="{{route('client.cart.index')}}"><i class="flaticon-shopping-cart"></i></a>
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
                                    <h3 class="product-title"><a href="{{route('client.product.detail',$prod->slug)}}">{{$prod->name}}</a>
                                    </h3>
                                    <div class="product-price">
{{--                                        <del class="old-price">$302.74</del>--}}
                                        <ins class="new-price">{{number_format($prod->price)}} đ</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
{{--                        end product card--}}
                        <div class="col-lg-12">
                            {{$products->links("client.layouts.pagination")}}
                        </div>

                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <div class="product-sidebar">
                        <div class="sidebar-category">
                            <h5 class="sb-title">SHOP BY CATAGORY</h5>
                            <div class="sb-category-dropdown">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                Woman Collection
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="sb-category-list">
                                                    <li><a href="#">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span>
                                                    </li>
                                                    <li><a href="#">Man Orange Shorts</a> <span
                                                            class="product-amount">(22)</span></li>
                                                    <li><a href="#">Party Dress</a> <span class="product-amount">(08)</span>
                                                    </li>
                                                    <li><a href="#">T-Shirt</a> <span class="product-amount">(41)</span>
                                                    </li>
                                                    <li><a href="#">Ghost Mannequin Black Hoodie</a> <span
                                                            class="product-amount">(15)</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                Kid’s Collection
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                             aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="sb-category-list">
                                                    <li><a href="#">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span>
                                                    </li>
                                                    <li><a href="#">Man Orange Shorts</a> <span
                                                            class="product-amount">(22)</span></li>
                                                    <li><a href="#">Party Dress</a> <span class="product-amount">(08)</span>
                                                    </li>
                                                    <li><a href="#">T-Shirt</a> <span class="product-amount">(41)</span>
                                                    </li>
                                                    <li><a href="#">Ghost Mannequin Black Hoodie</a> <span
                                                            class="product-amount">(15)</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                Man Collection
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                             aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="sb-category-list">
                                                    <li><a href="#">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span>
                                                    </li>
                                                    <li><a href="#">Man Orange Shorts</a> <span
                                                            class="product-amount">(22)</span></li>
                                                    <li><a href="#">Party Dress</a> <span class="product-amount">(08)</span>
                                                    </li>
                                                    <li><a href="#">T-Shirt</a> <span class="product-amount">(41)</span>
                                                    </li>
                                                    <li><a href="#">Ghost Mannequin Black Hoodie</a> <span
                                                            class="product-amount">(15)</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                Health & Beauty
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                             aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="sb-category-list">
                                                    <li><a href="#">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span>
                                                    </li>
                                                    <li><a href="#">Man Orange Shorts</a> <span
                                                            class="product-amount">(22)</span></li>
                                                    <li><a href="#">Party Dress</a> <span class="product-amount">(08)</span>
                                                    </li>
                                                    <li><a href="#">T-Shirt</a> <span class="product-amount">(41)</span>
                                                    </li>
                                                    <li><a href="#">Ghost Mannequin Black Hoodie</a> <span
                                                            class="product-amount">(15)</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                Jewellery & Daimond
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse"
                                             aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="sb-category-list">
                                                    <li><a href="#">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span>
                                                    </li>
                                                    <li><a href="#">Man Orange Shorts</a> <span
                                                            class="product-amount">(22)</span></li>
                                                    <li><a href="#">Party Dress</a> <span class="product-amount">(08)</span>
                                                    </li>
                                                    <li><a href="#">T-Shirt</a> <span class="product-amount">(41)</span>
                                                    </li>
                                                    <li><a href="#">Ghost Mannequin Black Hoodie</a> <span
                                                            class="product-amount">(15)</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sb-pricing-range">
                            <h5 class="sb-title">PRICE</h5>
                            <form action="{{route('client.product.index')}}" method="get">
{{--                                @csrf--}}
                                <div class="price-range-slider">
                                    <div id="slider-range" class="range-bar"></div>
                                    <div class="pricing-range-buttom d-flex align-items-center justify-content-between">
                                        <div class="price-filter-btn">
                                            <input type="hidden" id="filter-min" name="filter-min" class="hide">
                                            <input type="hidden" id="filter-max" name="filter-max" class="hide">
                                            <button type="submit" id="btn-filter">Filter</button>
                                        </div>
                                        <div class="pricing-value">
                                            <span>Price : </span> <input type="text" id="amount" readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="top-sell-cards">
                            <h5 class="sb-title">TOP SALE THIS WEEK</h5>
                            <div class="product-card-m d-flex align-content-center">
                                <div class="product-img-m">
                                    <a href="product-details.html"><img src="assets/images/product/pm-1.png" alt></a>
                                    <div class="product-cart-icon"><a href="#"><i class="flaticon-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-details-m">
                                    <a class="product-title-m" href="product-details.html">Men Casual
                                        Summer Sale</a>
                                    <ul class="d-flex product-rating-m">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                    </ul>
                                    <div class="product-price">
                                        <del class="old-price">$302.74</del>
                                        <ins class="new-price">$290.05</ins>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-m d-flex align-items-center">
                                <div class="product-img-m">
                                    <a href="product-details.html"><img src="assets/images/product/pm-2.png" alt></a>
                                    <div class="product-cart-icon"><a href="#"><i class="flaticon-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-details-m">
                                    <a class="product-title-m" href="product-details.html">Buy khaki polo neck jumper </a>
                                    <ul class="d-flex product-rating-m">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                    </ul>
                                    <div class="product-price">
                                        <del class="old-price">$302.74</del>
                                        <ins class="new-price">$290.05</ins>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-m d-flex align-items-center">
                                <div class="product-img-m">
                                    <a href="product-details.html"><img src="assets/images/product/pm-3.png" alt></a>
                                    <div class="product-cart-icon"><a href="#"><i class="flaticon-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-details-m">
                                    <a class="product-title-m" href="product-details.html">Men Casual
                                        Summer Sale</a>
                                    <ul class="d-flex product-rating-m">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                    </ul>
                                    <div class="product-price">
                                        <del class="old-price">$302.74</del>
                                        <ins class="new-price">$290.05</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sb-tags">
                            <h5 class="sb-title">PRODUCT TAG</h5>
                            <ul class="sb-tag-list">
                                <li><a href="#">Casual</a></li>
                                <li><a href="#">Kurtas & Kurtis</a></li>
                                <li><a href="#">Summer</a></li>
                                <li><a href="#">Spring</a></li>
                                <li><a href="#">Winter</a></li>
                                <li><a href="#">Baby</a></li>
                                <li><a href="#">Man</a></li>
                                <li><a href="#">Coot</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
