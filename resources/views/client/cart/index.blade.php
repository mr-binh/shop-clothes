@extends('client.layouts.main')
@section('title', 'Cart')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <h3 class="page-title">Cart</h3>
                    <ul class="page-switcher">
                        <li><a href="index-2.html">Home <i class="bi bi-chevron-right"></i></a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
{{--start cart--}}
<div class="cart-area mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-8">
                <table class="table cart-table">
                    <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Product Title</th>
                        <th scope="col">Unite Price</th>
                        <th scope="col">Discount Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="image-col">
                            <img src="assets/images/product/cart-p4.png" alt>
                        </td>
                        <td class="product-col"><a href="product-details.html" class="product-title">Something
                                Yellow Party Dress</a></td>
                        <td class="unite-col">
                            <del><span class="unite-price-del">$32.36</span></del>
                            <span class="unite-price"></span></td>
                        <td class="discount-col"><span class="discount-price">$22.36</span></td>
                        <td class="quantity-col">
                            <div class="quantity">
                                <input type="number" min="1" max="90" step="10" value="1">
                            </div>
                        </td>
                        <td class="total-col">$22.36</td>
                        <td class="delete-col">
                            <div class="delete-icon">
                                <a href="#"><i class="flaticon-letter-x"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="image-col">
                            <img src="assets/images/product/cart-p6.png" alt>
                        </td>
                        <td class="product-col"><a href="product-details.html" class="product-title">Woamn
                                Something Navy Jens</a></td>
                        <td class="unite-col">
                            <del><span class="unite-price-del">$32.36</span></del>
                            <span class="unite-price"></span></td>
                        <td class="discount-col"><span class="discount-price">$22.36</span></td>
                        <td class="quantity-col">
                            <div class="quantity">
                                <input type="number" min="1" max="90" step="10" value="1">
                            </div>
                        </td>
                        <td class="total-col">$22.36</td>
                        <td class="delete-col">
                            <div class="delete-icon">
                                <a href="#"><i class="flaticon-letter-x"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="image-col">
                            <img src="assets/images/product/cart-p5.png" alt>
                        </td>
                        <td class="product-col"><a href="product-details.html" class="product-title">Men Casual
                                Summer Sale</a></td>
                        <td class="unite-col">
                            <del><span class="unite-price-del"></span></del>
                            <span class="unite-price">$32.36</span></td>
                        <td class="discount-col"><span class="discount-price">$22.36</span></td>
                        <td class="quantity-col">
                            <div class="quantity">
                                <input type="number" min="1" max="90" step="10" value="1">
                            </div>
                        </td>
                        <td class="total-col">$22.36</td>
                        <td class="delete-col">
                            <div class="delete-icon">
                                <a href="#"><i class="flaticon-letter-x"></i></a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-xxl-4 col-lg-4">
                <div class="cart-coupon-input">
                    <h5 class="coupon-title">Coupon Code</h5>
                    <form class="coupon-input d-flex align-items-center">
                        <input type="text" placeholder="Coupon Code">
                        <button type="submit">Apply Code</button>
                    </form>
                </div>
            </div>
            <div class="col-xxl-8 col-lg-8">
                <table class="table total-table">
                    <tbody>
                    <tr>
                        <td class="tt-left">Cart Totals</td>
                        <td></td>
                        <td class="tt-right">$128.70</td>
                    </tr>
                    <tr>
                        <td class="tt-left">Shipping</td>
                        <td>
                            <ul class="cart-cost-list">
                                <li>Shipping Fee</li>
                                <li>Total ( tax excl.)</li>
                                <li>Total ( tax incl.)</li>
                                <li>Taxes</li>
                                <li>Shipping Enter your address to view shipping options. <a href="#">Calculate
                                        shipping</a>
                                </li>
                            </ul>
                        </td>
                        <td class="tt-right cost-info-td">
                            <ul class="cart-cost">
                                <li>Free</li>
                                <li>$15</li>
                                <li>$15</li>
                                <li>$5</li>
                                <li></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="tt-left">Subtotal</td>
                        <td>
                        </td>
                        <td class="tt-right">$162.70</td>
                    </tr>
                    </tbody>
                </table>
                <div class="cart-proceed-btns">
                    <a href="checkout.html" class="cart-proceed">Proceed to Checkout</a>
                    <a href="product.html" class="continue-shop">Continue to shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-area end -->
@endsection
