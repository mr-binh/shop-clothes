@extends('client.layouts.main')
@section('title','Checkout')
@section('client.content')
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
                                <p class="error error-name"></p>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label>Address</label>
                                    <select name="province-select" class="province-select" id="category-sort">
                                        <option>Province / City</option>
                                        <option value="Hà Nội" data-id="01">TP Hà Nội</option>
                                        <option value="TP Hồ Chí Minh" data-id="79">TP Hồ Chí Minh</option>
                                    </select>
                                    <p class="error error-province"></p>
                                </div>

                                <div class="eg-input-group">
                                    <select name="district-select" class="district-select" id="category-sort">
                                        <option>District / Town</option>
                                    </select>
                                    <p class="error error-district"></p>
                                </div>
                                <div class="eg-input-group">
                                    <select name="commune-select" class="commune-select" id="category-sort">
                                        <option>Commune / Ward / Villaged</option>
                                    </select>
                                    <p class="error error-commune"></p>
                                    <div class="eg-input-group">
                                        <input type="text" name="street-name" class="street-name"
                                               placeholder="House and street name">
                                    </div>
                                    <p class="error error-street"></p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="eg-input-group">
                                        <label>Additional Information</label>
                                        <input type="text" placeholder="Your Phone Number" name="phone">
                                        <p class="error error-phone"></p>
                                    </div>
                                    <div class="eg-input-group">
                                        <input type="text" placeholder="Your Email Address" name="email">
                                        <p class="error error-email"></p>
                                    </div>
                                    <div class="eg-input-group mb-0">
                                        <textarea cols="30" rows="7" name="note"
                                                  placeholder="Order Notes (Optional)"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        @if($errors->any())--}}
                        {{--                            @foreach($errors->all() as $error)--}}
                        {{--                                <p class="error">{{$error}}</p>--}}
                        {{--                            @endforeach--}}
                        {{--                        @endif--}}
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
                        {{--                        <div class="">--}}
                        <div class="cart-coupon-input">
                            <h5 class="coupon-title">Coupon Code</h5>
                            <form class="coupon-input d-flex align-items-center">
                                <input type="text" name="coupon_code" placeholder="Coupon Code">
                                <button type="button" class="btn-coupon">Apply Code</button>
                            </form>
                            <p class="notification d-none"></p>
                        </div>
                        {{--                        </div>--}}
                        <div class="total-cost-summary">
                            <ul>
                                <li class="subtotal">Subtotal <span class="total-tol">{{number_format($total)}} đ</span>
                                </li>
                                <li>Tax <span>0 đ</span></li>
                                <li>Discount <span class="discount">0 đ</span></li>
                            </ul>
                        </div>
                        <div class="total-cost">
                            <ul>
                                <li class="d-flex justify-content-between">Total <span
                                        class="total-tol" id="total">{{number_format($total)}} đ</span></li>
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
                                        VNPAY
                                    </label>
                                    <img src="{{asset('image/payment/vnpay.png')}}" alt="vnpay" height="30" width="30">
                                    <a href="#" class="about-paypal">What is VNPAY</a>
                                </div>
                                <div class="payment-form-bottom d-flex align-items-center">
                                    <input type="checkbox" id="terms" name="terms">
                                    <label for="terms">I have read and agree to the website <a href="#">Terms and
                                            conditions</a></label>
                                </div>
                                <p class="error error-terms"></p>
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
                let quantity = $(this).parents(".single-product").find("input[name='quantity']").val();
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
                        $(".total-tol").text(response.total.toLocaleString() + " đ");
                        if (response.cart !== []) {
                            let total = 0;
                            let cart = response.cart;
                            $(".cart-product-grid").html("");
                            $.each(cart, function (id, product) {
                                total += product['price'] * product['quantity']
                                $(".cart-product-grid").append(`
                            <li class="single-cart-product cart-${id}" data-id="${id}}">
                            <div class="cart-product-info d-flex align-items-center">
                                <div class="product-img"><img src="${product['image']}" alt
                                                              class="img-fluid">
                                </div>
                                <div class="product-info">
                                    <a href=""><h5 class="product-title">${product['name']}</h5><p> Color: ${product['color']} | Size: ${product['size']}</p></a>
                                    <p class="product-price"><span>${product['quantity']}</span>x <span class="p-price">${product['price']} đ</span>
                                    </p>
                                </div>
                            </div>
                            <div class="cart-product-delete-btn">
                                <i class="flaticon-letter-x cart-remove-header"></i>
                            </div>
                        </li>
                            `);
                            });
                            $(".total-cart-index").text(total.toLocaleString('vn-VN', {
                                style: 'currency',
                                currency: 'VND'
                            }));
                        }
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
                        $(".province-select").append('<option value="' + name + '" data-id="' + code + `" ${index == 0 ? "checked" : ""}>` + name + '</option>');
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
                            $(".district-select").append('<option value="' + name + '" data-id="' + code + `" ${index == 0 ? "checked" : ""}>` + name + '</option>');
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
                let province = $(".province-select").find("option:selected").val() == "Province / City" ? "" : $(".province-select").find("option:selected").val();
                let district = $(".district-select").find("option:selected").val() == "District / Town" ? "" : $(".district-select").find("option:selected").val();
                let commune = $(".commune-select").find("option:selected").val() == "Commune / Ward / Villaged" ? "" : $(".commune-select").find("option:selected").val();
                let note = $("textarea[name='note']").val();
                let total = {{$total}};
                let terms = $("input[name='terms']").is(":checked");
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
                    },
                    error: function (response) {
                        let message = response.responseJSON.errors;
                        let error = {
                            'name': true,
                            'phone': true,
                            'email': true,
                            'street': true,
                            'province': true,
                            'district': true,
                            'commune': true,
                            'terms': true
                        };
                        $.each(message, function (index, item) {
                            if (index) {
                                error[index] = false;
                                $(`.error-${index}`).html("");
                                $(`.error-${index}`).append(`<span class="text-danger">${item}</span>`);
                                $(`.error-${index}`).css("display", "block");
                                $(`.error-${index}`).css("margin-bottom", "10px");
                            }
                            if (error[index]) {
                                $(`.error-${index}`).html("");
                                $(`.error-${index}`).css("display", "none");
                            }
                        });
                        // console.log(error);
                    }
                });
            });

            $(".btn-coupon").click(function (e) {
                let coupon_code = $("input[name='coupon_code']").val();
                $.ajax({
                    url: "{{route('client.coupon.check')}}",
                    method: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        coupon_code: coupon_code
                    },
                    success: function (response) {
                        if (response.status == "success") {
                            $(".notification").removeClass("d-none");
                            $(".notification").addClass("d-block");
                            $(".notification").html("");
                            $(".notification").append(`<span class="text-success">${response.message}</span>`);
                            $(".notification").css("margin-bottom", "10px");
                            setTimeout(function () {
                                $(".notification").removeClass("d-block");
                                $(".notification").addClass("d-none"); // Ẩn phần tử sau khi đã hiển thị trong 5 giây
                            }, 15000);;

                            $(".discount").text(response.discount.toLocaleString() + " đ");
                            $("#total").text(response.total.toLocaleString() + " đ");
                            console.log(response);
                        } else {
                            $(".notification").removeClass("d-none");
                            $(".notification").addClass("d-block");
                            $(".notification").html("");
                            $(".notification").append(`<span class="text-danger">${response.message}</span>`);
                            $(".notification").css("margin-bottom", "10px");
                        }
                    },
                })
            })
        });
    </script>
@endsection
