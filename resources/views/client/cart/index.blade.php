@extends('client.layouts.main')
@section('title', 'Cart')
@section('client.content')
    {{--<div class="breadcrumb-area">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-12">--}}
    {{--                <div class="breadcrumb-wrap">--}}
    {{--                    <h3 class="page-title">Cart</h3>--}}
    {{--                    <ul class="page-switcher">--}}
    {{--                        <li><a href="index-2.html">Home <i class="bi bi-chevron-right"></i></a></li>--}}
    {{--                        <li>Cart</li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    {{--start cart--}}
    <div class="cart-area mt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-8">
                    <table class="table cart-table">
                        <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $total = 0 @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $product)
                                @php $total += $product['price'] * $product['quantity'] @endphp
                                <tr data-id="{{$id}}" class="cart-{{$id}}">
                                    <td class="image-col">
                                        <img src="assets/images/product/cart-p4.png" alt>
                                    </td>
                                    <td class="product-col"><a href="{{route('client.product.detail', $product['slug'])}}"
                                                               class="product-title">{{$product['name']}}</a></td>
                                    <td class="product-col">{{$product['color']}}</td>
                                    <td class="product-col">{{$product['size']}}</td>
                                    <td class="discount-col"><span
                                            class="price">{{number_format($product['price'])}}</span></td>
                                    <td class="quantity-col">
                                        <div class="quantity">
                                            <input type="number" name="quantity" min="1" max="90" step="10"
                                                   value="{{$product['quantity']}}">
                                        </div>
                                    </td>
                                    <td class="total-col">{{number_format($product['price'] * $product['quantity'])}} đ</td>
                                    <td class="delete-col">
                                        <div class="delete-icon">
                                           <i class="flaticon-letter-x cart_remove"></i>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
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
                            <td class="tt-right total">{{number_format($total)}} đ</td>
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
                            <td class="tt-left">Total</td>
                            <td>
                            </td>
                            <td class="tt-right total">{{number_format($total)}} đ</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="cart-proceed-btns">
                        <a href="{{route('client.checkout.index')}}" class="cart-proceed">Proceed to Checkout</a>
                        <a href="{{route('client.product.index')}}" class="continue-shop">Continue to shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area end -->
@endsection
@section('client.page-script')
    <script>
        $(document).ready(function () {
            $("input[name='quantity']").change(function (e) {
                e.preventDefault();
                let id = $(this).parents("tr").attr("data-id");
                let price = parseInt($(this).parents("tr").find(".price").text().replace(/,/g, ""));
                console.log(price);
                let quantity = $(this).parents("tr").find("input[name='quantity']").val();
                let subtotal = price * quantity;
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
                        $(".cart-" + id).find(".total-col").text(subtotal.toLocaleString()+" đ");
                        $(".total").text(response.total.toLocaleString()+" đ");
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
                            $(".tt-right").text(response.total.toLocaleString()+" đ");
                        }
                    });
                }
            });
        });
    </script>
@endsection
