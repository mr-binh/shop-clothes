@extends('client.layouts.main')
@section('title','Checkout')
@section('client.content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <h3 class="page-title">Checkout</h3>
                        <ul class="page-switcher">
                            <li><a href="index-2.html">Home <i class="bi bi-chevron-right"></i></a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout-area mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form class="billing-from">
                        <h5 class="checkout-title">
                            Billing Details
                        </h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="eg-input-group">
                                    <label for="first-name1">First Name</label>
                                    <input type="text" id="first-name1" placeholder="Your first name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="eg-input-group">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" id="last-name" placeholder="Your last name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="country">Country / Region</label>
                                    <input type="text" id="country" placeholder="Your country name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label>Street Address</label>
                                    <input type="text" placeholder="House and street name">
                                </div>

                                <div class="eg-input-group">
                                    <select name="city-select" id="category-sort">
                                        <option selected>Town / City</option>
                                        <option value="1">Cumilla</option>
                                        <option value="2">Dhaka</option>
                                        <option value="3">Khulna</option>
                                    </select>
                                </div>
                                <div class="eg-input-group">
                                    <input type="text" placeholder="Post Code">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label>Additional Information</label>
                                    <input type="text" placeholder="Your Phone Number">
                                </div>
                                <div class="eg-input-group">
                                    <input type="text" placeholder="Your Email Address">
                                </div>
                                <div class="eg-input-group mb-0">
                                    <textarea cols="30" rows="7" placeholder="Order Notes (Optional)"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form class="different-address-form">
                        <h5 class="checkout-title">
                            Ship to a Different Address?
                        </h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="first-name-d">First Name</label>
                                    <input type="text" id="first-name-d" placeholder="Your first name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="last-name-d">Last Name</label>
                                    <input type="text" id="last-name-d" placeholder="Your last name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group mb-0">
                                    <label for="last-name-d">Last Name</label>
                                    <textarea cols="30" rows="6" placeholder="Order Notes (Optional)"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="order-summary">
                        <div class="added-product-summary">
                            <h5 class="checkout-title">
                                Order Summary
                            </h5>
                            <ul class="added-products">
                                <li class="single-product">
                                    <div class="product-img">
                                        <img src="assets/images/product/added-p1.png" alt>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-title"><a href="#">Something Yellow Party Dress</a></h5>
                                        <div class="product-total">
                                            <div class="quantity">
                                                <input type="number" min="1" max="90" step="10" value="1">
                                            </div>
                                            <strong> <i class="bi bi-x-lg"></i> <span
                                                    class="product-price">$22.36</span></strong>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-product">
                                    <div class="product-img">
                                        <img src="assets/images/product/added-p2.png" alt>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-title"><a href="#">Men Casual Summer Sale</a></h5>
                                        <div class="product-total">
                                            <div class="quantity">
                                                <input type="number" min="1" max="90" step="10" value="1">
                                            </div>
                                            <strong> <i class="bi bi-x-lg"></i> <span
                                                    class="product-price">$22.36</span></strong>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-product">
                                    <div class="product-img">
                                        <img src="assets/images/product/added-p3.png" alt>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-title"><a href="#">Woamn Something Navy Jens</a></h5>
                                        <div class="product-total">
                                            <div class="quantity">
                                                <input type="number" min="1" max="90" step="10" value="1">
                                            </div>
                                            <strong> <i class="bi bi-x-lg"></i> <span
                                                    class="product-price">$22.36</span></strong>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="total-cost-summary">
                            <ul>
                                <li class="subtotal">Subtotal <span>$128.70</span></li>
                                <li>Tax <span>$5</span></li>
                                <li>Total ( tax excl.) <span>$15</span></li>
                                <li>Total ( tax incl.) <span>$15</span></li>
                            </ul>
                        </div>
                        <div class="total-cost">
                            <ul>
                                <li class="d-flex justify-content-between">Subtotal <span>$128.70</span></li>
                            </ul>
                        </div>
                        <form class="payment-form">
                            <div class="payment-methods">
                                <div class="form-check payment-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Check payments
                                    </label>
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State /
                                        County, Store Postcode.</p>
                                </div>
                                <div class="form-check payment-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Cash on delivery
                                    </label>
                                    <p>Pay with cash upon delivery.</p>
                                </div>
                                <div class="form-check payment-check paypal">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault3" checked>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        PayPal
                                    </label>
                                    <img src="assets/images/payment/payment-cards.png" alt>
                                    <a href="#" class="about-paypal">What is PayPal</a>
                                </div>
                                <div class="payment-form-bottom d-flex align-items-center">
                                    <input type="checkbox" id="terms">
                                    <label for="terms">I have read and agree to the website <a href="#">Terms and
                                            conditions</a></label>
                                </div>
                            </div>
                            <div class="place-order-btn">
                                <button type="submit">Place Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
