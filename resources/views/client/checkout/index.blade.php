@extends('client.layouts.main')
@section('title','Checkout')
@section('client.content')
    {{--    <div class="breadcrumb-area">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12">--}}
    {{--                    <div class="breadcrumb-wrap">--}}
    {{--                        <h3 class="page-title">Checkout</h3>--}}
    {{--                        <ul class="page-switcher">--}}
    {{--                            <li><a href="index-2.html">Home <i class="bi bi-chevron-right"></i></a></li>--}}
    {{--                            <li>Checkout</li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="checkout-area mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form class="billing-from">
                        <h5 class="checkout-title">
                            Billing Details
                        </h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" name="name" id="name" placeholder="Your full name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label>Address</label>
                                    <select name="province-select" class="province-select" id="category-sort">
                                        <option >Province / City</option>
                                        <option value="Hà Nội" data-id="01">TP Hà Nội</option>
                                        <option value="TP Hồ Chí Minh" data-id="79">TP Hồ Chí Minh</option>
                                    </select>
                                </div>

                                <div class="eg-input-group">
                                    <select name="district-select" class="district-select" id="category-sort">
                                        <option >District / Town</option>
                                        {{--                                        <option value="1">Cumilla</option>--}}
                                        {{--                                        <option value="2">Dhaka</option>--}}
                                        {{--                                        <option value="3">Khulna</option>--}}
                                    </select>
                                </div>
                                <div class="eg-input-group">
                                    <select name="commune-select" class="commune-select" id="category-sort">
                                        <option >Commune / Ward / Villaged</option>
                                        {{--                                        <option value="1">Cumilla</option>--}}
                                        {{--                                        <option value="2">Dhaka</option>--}}
                                        {{--                                        <option value="3">Khulna</option>--}}
                                    </select>
                                    <div class="eg-input-group">
                                        <input type="text" name="street-name" class="street-name"
                                               placeholder="House and street name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="eg-input-group">
                                        <label>Additional Information</label>
                                        <input type="text" placeholder="Your Phone Number" name="phone">
                                    </div>
                                    <div class="eg-input-group">
                                        <input type="text" placeholder="Your Email Address" name="email">
                                    </div>
                                    <div class="eg-input-group mb-0">
                                        <textarea cols="30" rows="7" name="note" placeholder="Order Notes (Optional)"></textarea>
                                    </div>
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
                            {{--                            start product order--}}
                            <ul class="added-products">
                                @php $total = 0 @endphp
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $product)
                                        @php $total += $product['price'] * $product['quantity'] @endphp
                                        <li class="single-product cart-{{$id}}" data-id="{{$id}}">
                                            <div class="product-img">
                                                <img src="assets/images/product/added-p1.png" alt>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-title"><a
                                                        href="{{route('client.product.detail',$product['slug'])}}">{{$product['name']}}</a>
                                                </h5>
                                                <p>Color: <span>{{$product['color']}}</span> | Size:
                                                    <span>{{$product['size']}}</span></p>
                                                <div class="product-total">
                                                    <div class="quantity">
                                                        <input type="number" name="quantity" min="1" max="90" step="10"
                                                               value="{{$product['quantity']}}">
                                                    </div>
                                                    <strong> <i class="bi bi-x-lg"></i><span
                                                            class="price">{{number_format($product['price'])}} đ</span></strong>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            {{--                            end product order--}}
                        </div>
                        <div class="total-cost-summary">
                            <ul>
                                <li class="subtotal">Subtotal <span class="total-tol">{{number_format($total)}}</span>
                                </li>
                                <li>Tax <span>$5</span></li>
                                <li>Total ( tax excl.) <span>$15</span></li>
                                <li>Total ( tax incl.) <span>$15</span></li>
                            </ul>
                        </div>
                        <div class="total-cost">
                            <ul>
                                <li class="d-flex justify-content-between">Subtotal <span
                                        class="total-tol">{{number_format($total)}}</span></li>
                            </ul>
                        </div>

                        <form class="payment-form">
                            <div class="payment-methods">
                                {{--                                <div class="form-check payment-check">--}}
                                {{--                                    <input class="form-check-input" type="radio" name="flexRadioDefault"--}}
                                {{--                                           id="flexRadioDefault2" checked>--}}
                                {{--                                    <label class="form-check-label" for="flexRadioDefault2">--}}
                                {{--                                        Cash on delivery--}}
                                {{--                                    </label>--}}
                                {{--                                    <p>Pay with cash upon delivery.</p>--}}
                                {{--                                </div>--}}
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
                                    <input type="checkbox" id="terms" name="terms">
                                    <label for="terms">I have read and agree to the website <a href="#">Terms and
                                            conditions</a></label>
                                </div>
                            </div>
                            <div class="place-order-btn">
{{--                                <a href="{{route('client.checkout.store')}}">--}}
                                    <button type="button" class="btn-place-order">Place Order</button>
{{--                                </a>--}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('client.page-script')
    <script>
        $(document).ready(function () {

            $("input[name='quantity']").change(function (e) {
                e.preventDefault();
                let id = $(this).parents(".single-product").attr("data-id");
                let price = parseInt($(this).parents(".single-product").find(".price").text().replace(/,/g, ""));
                let quantity = $(this).parents(".single-product").find("input[name='quantity']").val();
                // let subtotal = price * quantity;
                $.ajax({
                    url: '{{ route('client.cart.update') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        quantity: quantity
                    },
                    success: function (response) {
                        $(".has-count").text(response.count);
                        // $(".cart-" + id).find(".total").text(subtotal.toLocaleString() + " đ");
                        $(".total-tol").text(response.total.toLocaleString() + " đ");
                    }
                });
            });
            $(".cart_remove").click(function (e) {
                e.preventDefault();
                let id = $(this).parents("tr").attr("data-id");
                if (confirm("Do you really want to remove?")) {
                    $.ajax({
                        url: '{{ route('client.cart.remove') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: $(this).parents("tr").attr("data-id")
                        },
                        success: function (response) {
                            $(".has-count").text(response.count);
                            $(".cart-" + id).remove();
                            $(".total-tol").text(response.total.toLocaleString() + " đ");
                        }
                    });
                }
            });

            $.ajax({
                url: 'https://api.mysupership.vn/v1/partner/areas/province',
                method: "GET",
                success: function (response) {
                    $(".province-select").html("");
                    $(".province-select").append(` <option>Province / City</option>`)
                    $.each(response.results, function (index, item) {
                        let code = item.code;
                        let name = item.name;
                        $(".province-select").append('<option value="' + name + '" data-id="' + code + `" ${index==0?"checked":""}>` + name + '</option>');
                    });
                }
            });
            $(".province-select").change(function (e) {
                e.preventDefault();
                let id = $(this).find("option:selected").attr("data-id");
                $.ajax({
                    url: 'https://api.mysupership.vn/v1/partner/areas/district?province=' + id,
                    method: "GET",
                    success: function (response) {
                        // console.log(response.results);
                        $(".district-select").html("");
                        $(".district-select").append(`<option selected>District / Town</option>`)
                        $.each(response.results, function (index, item) {
                            let code = item.code;
                            let name = item.name;
                            $(".district-select").append('<option value="' + name + '" data-id="' + code + `" ${index==0?"checked":""}>` + name + '</option>');
                        });
                    }
                });
            });
            $(".district-select").change(function (e) {
                e.preventDefault();
                let id = $(this).find("option:selected").attr("data-id");
                $.ajax({
                    url: 'https://api.mysupership.vn/v1/partner/areas/commune?district=' + id,
                    method: "GET",
                    success: function (response) {
                        // console.log(response.results);
                        $(".commune-select").html("");
                        $(".commune-select").append(`<option selected>Commune / Ward / Village</option>`)
                        $.each(response.results, function (index, item) {
                            let code = item.code;
                            let name = item.name;
                            $(".commune-select").append('<option value="' + name + '" data-id="' + code + '">' + name + '</option>');
                        });
                    }
                });
            });

            $(".btn-place-order").click(function (e) {
                e.preventDefault();
                let name = $("input[name='name']").val();
                let phone = $("input[name='phone']").val();
                let email = $("input[name='email']").val();
                let street = $("input[name='street-name']").val();
                let province = $(".province-select").find("option:selected").val()=="Province / City"?"":$(".province-select").find("option:selected").val();
                let district = $(".district-select").find("option:selected").val()=="District / Town"?"":$(".district-select").find("option:selected").val();
                let commune = $(".commune-select").find("option:selected").val()=="Commune / Ward / Villaged"?"":$(".commune-select").find("option:selected").val();
                let note = $("textarea[name='note']").val();
                let total = {{$total}};
                let terms = $("input[name='terms']").is(":checked");
                // let cart = [];
                // let address=street+", "+commune+", "+district+", "+province;
                // $(".single-product").each(function (index, item) {
                //     let id = $(this).attr("data-id");
                //     let quantity = $(this).find("input[name='quantity']").val();
                //     cart.push({
                //         id: id,
                //         quantity: quantity
                //     });
                // });
                $.ajax({
                    url: '{{ route('client.checkout.store') }}',
                    method: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        name: name,
                        phone: phone,
                        email: email,
                        street: street,
                        province: province,
                        district: district,
                        commune: commune,
                        note: note,
                        total: total,
                        terms: terms
                    },
                    success: function (response) {
                        if (response.status == "success") {
                            window.location.href = response.urlCheckout;
                        } else {
                            alert("Order failed!");
                        }
                    }
                });
            });
        });
    </script>
@endsection
