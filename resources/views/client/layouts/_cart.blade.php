<div class="cart-sidebar-wrappper">
    <div class="main-cart-sidebar">
        <div class="cart-top">
            <div class="cart-close-icon">
                <i class="flaticon-letter-x"></i>
            </div>

            <ul class="cart-product-grid">
                @php $total = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $product)
                        @php $total += $product['price'] * $product['quantity'] @endphp
{{--                                        start info product--}}
                        <li class="single-cart-product cart-{{$id}}" data-id="{{$id}}">
                            <div class="cart-product-info d-flex align-items-center">
                                <div class="product-img"><img src="{{asset($product['image'])}}" alt
                                                              class="img-fluid">
                                </div>
                                <div class="product-info">
                                    <a href="{{route('client.product.detail',$product['slug'])}}"><h5 class="product-title">{{$product['name']}}</h5><p> Color: {{$product['color']}} | Size: {{$product['size']}}</p></a>
                                    <p class="product-price"><span>{{$product['quantity']}}</span>x <span class="p-price">{{number_format($product['price'])}} đ</span>
                                    </p>
                                </div>
                            </div>
                            <div class="cart-product-delete-btn">
                                <i class="flaticon-letter-x cart-remove-header"></i>
                            </div>
                        </li>
{{--                        end info product--}}
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="cart-bottom">
            <div class="cart-total d-flex justify-content-between">
                <label>Subtotal :</label>
                <span class="total-cart-index">{{number_format($total)}} đ</span>
            </div>
            <div class="cart-btns">
                <a href="{{route('client.checkout.index')}}" class="cart-btn checkout">CHECKOUT</a>
                <a href="{{route('client.cart.index')}}" class="cart-btn cart">VIEW CART</a>
            </div>

            {{--            <p class="cart-shipping-text"><strong>SHIPPING:</strong> Continue shopping up to $64.08 and receive free--}}
            {{--                shipping. stay with EG </p>--}}
        </div>

    </div>
</div>
<script src="{{asset("assets/js/jquery-3.6.0.min.js")}}"></script>
<script>
    $(document).ready(function () {
        $(".cart-remove-header").click(function (e) {
            e.preventDefault();
            let id = $(this).parents(".single-cart-product").attr("data-id");
            // if (confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('client.cart.remove') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id:id
                    },
                    success: function (response) {
                        $(".has-count").text(response.count);
                        $(".cart-" + id).remove();
                        $(".total-cart-index").text(response.total.toLocaleString()+" đ");
                    }
                });
            // }
        });

    })
</script>
