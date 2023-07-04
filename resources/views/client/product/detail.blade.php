@extends('client.layouts.main')
@section('title','Product Detail')
@section('client.content')
{{--    <div class="breadcrumb-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="breadcrumb-wrap">--}}
{{--                        <h3 class="page-title">Shop Details</h3>--}}
{{--                        <ul class="page-switcher">--}}
{{--                            <li><a href="index-2.html">Home <i class="bi bi-chevron-right"></i></a></li>--}}
{{--                            <li>Shop Details</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="product-details-area mt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 col-sm-10">
                    <div class="product-details-wrapper">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                                <div class="product-switcher-wrap">
                                    <div class="nav product-tab" id="v-pills-tab" role="tablist"
                                         aria-orientation="vertical">
                                        <div class="product-variation active" id="v-pills-home-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home">
                                            <div class="pd-showcase-img">
                                                <img src="assets/images/product/pd-sm1.png" alt>
                                            </div>
                                        </div>
                                        <div class="product-variation" id="v-pills-profile-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile">
                                            <div class="pd-showcase-img">
                                                <img src="assets/images/product/pd-sm2.png" alt>
                                            </div>
                                        </div>
                                        <div class="product-variation" id="v-pills-messages-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages">
                                            <div class="pd-showcase-img">
                                                <img src="assets/images/product/pd-sm3.png" alt>
                                            </div>
                                        </div>
                                        <div class="product-variation" id="v-pills-settings-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings">
                                            <div class="pd-showcase-img">
                                                <img src="assets/images/product/pd-sm4.png" alt>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                             aria-labelledby="v-pills-home-tab">
                                            <div class="pd-preview-img">
                                                <img src="assets/images/product/pd-xl1.png" alt>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                             aria-labelledby="v-pills-profile-tab">
                                            <div class="pd-preview-img">
                                                <img src="assets/images/product/pd-xl2.png" alt>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                             aria-labelledby="v-pills-messages-tab">
                                            <div class="pd-preview-img">
                                                <img src="assets/images/product/pd-xl3.png" alt>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                             aria-labelledby="v-pills-settings-tab">
                                            <div class="pd-preview-img">
                                                <img src="assets/images/product/pd-xl4.png" alt>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="product-details-wrap">
                                    <div class="pd-top">
                                        <ul class="product-rating d-flex align-items-center">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li class="count-review">(<span>23</span> Review)</li>
                                        </ul>
                                        <h3 class="pd-title">Ghost Mannequin Winter Dress</h3>
                                        <h5 class="pd-price">$41.36</h5>
                                        <p class="pd-small-info"><strong>RIBCAGE STR ANK RAINBOW -</strong> B lue
                                            High-rise
                                            straight-leg jeans Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="pd-quick-discription">
                                        <ul>
                                            <li class="d-flex align-items-center">
                                                <span>Color :</span>
                                                <div class="color-option d-flex align-items-center">
                                                    <input type="radio" name="color" id="color1" value="red" checked>
                                                    <label for="color1"><span class="c1 p-color"></span></label>
                                                    <input type="radio" name="color" id="color2" value="red">
                                                    <label for="color2"><span class="c2 p-color"></span></label>
                                                    <input type="radio" name="color" id="color4" value="red">
                                                    <label for="color4"><span class="c4 p-color"></span></label>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <span>Size :</span>
                                                <div class="size-option d-flex align-items-center">
                                                    <input type="radio" name="size" id="size1" value="red" checked>
                                                    <label for="size1">
                                                        <span class="p-size">M</span>
                                                    </label>
                                                    <input type="radio" name="size" id="size2" value="red">
                                                    <label for="size2">
                                                        <span class="p-size">L</span>
                                                    </label>
                                                    <input type="radio" name="size" id="size3" value="red">
                                                    <label for="size3">
                                                        <span class="p-size">XL</span>
                                                    </label>
                                                    <input type="radio" name="size" id="size4" value="red">
                                                    <label for="size4">
                                                        <span class="p-size">XXL</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center pd-cart-btns">
                                                <div class="quantity">
                                                    <input type="number" min="1" max="90" step="10" value="1">
                                                </div>
                                                <button type="submit" class="pd-add-cart">Add to cart</button>
                                            </li>
                                            <li class="pd-type">Product Type: <span>Woman Winter Dress</span></li>
                                            <li class="pd-type">Catagories: <span> Clothing, Hoodies</span></li>
                                            <li class="pd-type">Availabile: <span>89</span></li>
                                            <li class="pd-type">Material : <span>100% Cotton, Jens</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-discription-wrapper mt-100">
                <h3 class="details-title">Product Details</h3>
                <div class="row ">
                    <div class="col-xxl-3 col-xl-3 mt-24">
                        <div class="nav flex-column nav-pills discription-bar" id="v-pills-tab2" role="tablist"
                             aria-orientation="vertical">
                            <button class="nav-link active" id="pd-discription3" data-bs-toggle="pill"
                                    data-bs-target="#pd-discription-pill3" role="tab" aria-controls="pd-discription-pill3">
                                Discription
                            </button>
                            <button class="nav-link" id="pd-discription2" data-bs-toggle="pill"
                                    data-bs-target="#pd-discription-pill2" role="tab" aria-controls="pd-discription-pill2">
                                Additional
                                Information
                            </button>
                            <button class="nav-link" id="pd-discription1" data-bs-toggle="pill"
                                    data-bs-target="#pd-discription-pill1" role="tab" aria-controls="pd-discription-pill1">
                                Our Review (2)
                            </button>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-9 mt-24">
                        <div class="tab-content discribtion-tab-content" id="v-pills-tabContent2">
                            <div class="tab-pane fade show active" id="pd-discription-pill3" role="tabpanel"
                                 aria-labelledby="pd-discription3">
                                <div class="discription-texts">
                                    <p>Aenean dolor massa, rhoncus ut tortor in, pretium tempus neque. Vestibulum
                                        venenatis leo et dictum finibus. Nulla vulputate dolor sit amet tristique
                                        dapibus. Maecenas posuere luctus leo, non consequat felis ullamcorper non.
                                        Aliquam erat volutpat. Donec vitae porta enim. Cras eu volutpat dolor, vitae
                                        accumsan tellus. Donec pulvinar auctor nunc, et gravida elit porta non. Aliquam
                                        erat volutpat. Proin facilisis interdum felis, sit amet pretium purus feugiat
                                        ac. Donec in leo metus. Sed quis dui nec justo ullamcorper molestie. Mauris
                                        consequat lacinia est, eget tincidunt leo ornare sed
                                    </p>
                                    <p>Aenean dolor massa, rhoncus ut tortor in, pretium tempus neque. Vestibulum
                                        venenatis leo et dictum finibus.dapibus. Maecenas posuere luctus leo, non
                                        consequat felis ullamcorper non.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pd-discription-pill2" role="tabpanel"
                                 aria-labelledby="pd-discription2">
                                <div class="additional-discription">
                                    <ul>
                                        <li>
                                            <h5 class="additition-name">Color</h5>
                                            <div class="additition-variant"><span>:</span>Red, Green, Blue, Yellow,
                                                pink,
                                            </div>
                                        </li>
                                        <li>
                                            <h5 class="additition-name">Size</h5>
                                            <div class="additition-variant"><span>:</span>S, M, L, Xl, XXL</div>
                                        </li>
                                        <li>
                                            <h5 class="additition-name">Material</h5>
                                            <div class="additition-variant"><span>:</span>100% Cotton, Jens</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="pd-discription-pill1" role="tabpanel"
                                 aria-labelledby="pd-discription1">
                                <div class="discription-review">
                                    <div class="clients-review-cards">
                                        <div class="client-review-card">
                                            <div class="review-card-head">
                                                <div class="client-img">
                                                    <img src="assets/images/product/reviewer.png" alt>
                                                </div>
                                                <div class="client-info">
                                                    <h5 class="client-name">Jenny Wilson <span class="review-date">- 8th
Jan 2021</span></h5>
                                                    <ul class="review-rating d-flex">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="review-text">
                                                Aenean dolor massa, rhoncus ut tortor in, pretium tempus neque.
                                                Vestibulum venenatis leo et dictum finibus. Nulla vulputate dolor sit
                                                amet tristique dapibus.Gochujang ugh viral, butcher pabst put a bird on
                                                it meditation austin.
                                            </p>
                                            <ul class="review-actions d-flex align-items-center">
                                                <li><a href="#"><i class="flaticon-like"></i></a></li>
                                                <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                                <li><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                        <div class="client-review-card">
                                            <div class="review-card-head">
                                                <div class="client-img">
                                                    <img src="assets/images/product/reviewer.png" alt>
                                                </div>
                                                <div class="client-info">
                                                    <h5 class="client-name">John Smith <span class="review-date">- 8th
Jan 2021</span></h5>
                                                    <ul class="review-rating d-flex">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="review-text">
                                                Aenean dolor massa, rhoncus ut tortor in, pretium tempus neque.
                                                Vestibulum venenatis leo et dictum finibus. Nulla vulputate dolor sit
                                                amet tristique dapibus.Gochujang ugh viral, butcher pabst put a bird on
                                                it meditation austin.
                                            </p>
                                            <ul class="review-actions d-flex align-items-center">
                                                <li><a href="#"><i class="flaticon-like"></i></a></li>
                                                <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                                <li><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="review-form-wrap">
                                        <h3>Leave A Comment</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <form action="#" method="POST" class="review-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="review-input-group">
                                                        <label for="fname">First Name</label>
                                                        <input type="text" name="fname" id="fname"
                                                               placeholder="Your first name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="review-input-group">
                                                        <label for="lname">Last Name</label>
                                                        <input type="text" name="lname" id="lname"
                                                               placeholder="Your last name ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="review-input-group">
                                                    <textarea name="review-area" id="review-area" cols="30" rows="7"
                                                              placeholder="Your message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="review-rating">
                                                        <p>Your Rating</p>
                                                        <ul class="d-flex">
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="submit-btn">
                                                        <input type="submit" value="Post Comment">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related-product-wrapper mt-120">
                <h3 class="details-title">Best Related Product</h3>
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
                                <h3 class="product-title"><a href="product-details.html">UNIQLO Man Mid Rise</a></h3>
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
                                <h3 class="product-title"><a href="product-details.html">Man Casul Summer Dress</a></h3>
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
                                <h3 class="product-title"><a href="product-details.html">Women Renta Silk Dress</a></h3>
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
                                <h3 class="product-title"><a href="product-details.html">Simple Man Mid Rise</a></h3>
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
@endsection
