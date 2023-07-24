<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Title -->
    <title>Invoice</title>
    {{--    <link rel="stylesheet" href="http://thememarch.com/demo/html/ivonne/assets/css/style.css">--}}
</head>

<body>
<div class="cs-container">
    <div class="cs-invoice cs-style1">
        <div class="cs-invoice_in" id="download_section">
            <div class="cs-invoice_head cs-type1 cs-mb25" style="display: -webkit-box;display: -ms-flexbox;display: flex;
            -webkit-box-pack: justify;-ms-flex-pack: justify;justify-content: space-between;">
                <div class="cs-invoice_left">
                    <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16"><b class="cs-primary_color">Invoice
                            No:</b> {{$order_code}}</p>
                    <p class="cs-invoice_date cs-primary_color cs-m0"><b class="cs-primary_color">Date: </b>{{$date}}
                    </p>
                </div>
{{--                <div class="cs-invoice_right cs-text_right">--}}
{{--                    <div class="cs-logo cs-mb5"><img src="http://thememarch.com/demo/html/ivonne/assets/img/logo.svg"--}}
{{--                                                     alt="Logo"></div>--}}
{{--                </div>--}}
            </div>
            <div class="cs-invoice_head cs-mb10" style="display: -webkit-box;display: -ms-flexbox;display: flex;
            -webkit-box-pack: justify;-ms-flex-pack: justify;justify-content: space-between;">
                <div class="cs-invoice_left" style="text-align: left;">
                    <b class="cs-primary_color" style="color: #111111;">Invoice To:</b>
                    <p>
                       <span>Name: {{$name}}</span><br>
                       <span>Address: {{$address}}</span> <br>
                       <span>Phone: {{$phone}}</span> <br>
                       <span>Email: {{$email}}</span>
                    </p>
                </div>
            </div>
            <div class="cs-table cs-style1">
                <div class="cs-round_border">
                    <div class="cs-table_responsive">
                        <table border="1">
                            <thead>
                            <tr>
                                <th class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Item</th>
                                <th class="cs-width_4 cs-semi_bold cs-primary_color cs-focus_bg">Description</th>
                                <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg">Qty</th>
                                <th class="cs-width_1 cs-semi_bold cs-primary_color cs-focus_bg">Price</th>
                                <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg cs-text_right">Total
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $total = 0 @endphp
                            @if($cart)
                                @foreach($cart as $id => $product)
                                    @php $total += $product['price'] * $product['quantity'] @endphp
                                    <tr>
                                        <td class="cs-width_3">{{$product['name']}}</td>
                                        <td class="cs-width_4"><p>Color: <span>{{$product['color']}}</span> | Size:
                                                <span>{{$product['size']}}</span></p></td>
                                        <td class="cs-width_2">{{$product['quantity']}}</td>
                                        <td class="cs-width_1">{{number_format($product['price'])}} đ</td>
                                        <td class="cs-width_2 cs-text_right">{{number_format($product['price'] * $product['quantity'])}} đ</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="cs-invoice_footer cs-border_top">
                        <div class="cs-left_footer cs-mobile_hide">
                            <p class="cs-mb0"><b class="cs-primary_color">Additional Information:</b></p>
                            <p class="cs-m0">At check in you may need to present the credit <br>card used for payment of
                                this ticket.</p>
                        </div>
                        <div class="cs-right_footer">
                            <table>
                                <tbody>
                                <tr class="cs-border_left">
                                    <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Subtoal: </td>
                                    <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">
                                        {{number_format($total)}} đ
                                    </td>
                                </tr>
                                <tr class="cs-border_left">
                                    <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Discount: </td>
                                    <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">
                                        {{number_format($discount)}} đ
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="cs-invoice_footer">
                    <div class="cs-left_footer cs-mobile_hide"></div>
                    <div class="cs-right_footer">
                        <table>
                            <tbody>
                            <tr class="cs-border_none">
                                <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color">Total Amount: </td>
                                <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color cs-text_right">
                                    {{number_format($total-$discount)}} đ
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cs-note">
                <div class="cs-note_left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <path
                            d="M416 221.25V416a48 48 0 01-48 48H144a48 48 0 01-48-48V96a48 48 0 0148-48h98.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62z"
                            fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/>
                        <path d="M256 56v120a32 32 0 0032 32h120M176 288h160M176 368h160" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                    </svg>
                </div>
                <div class="cs-note_right">
                    <p class="cs-mb0"><b class="cs-primary_color cs-bold">Note:</b></p>
                    <p class="cs-m0">Here we can write a additional notes for the client to get a better understanding
                        of this invoice.</p>
                </div>
            </div><!-- .cs-note -->
        </div>
    </div>
</div>
{{--<script src="http://thememarch.com/demo/html/ivonne/assets/js/jquery.min.js"></script>--}}
{{--<script src="http://thememarch.com/demo/html/ivonne/assets/js/jspdf.min.js"></script>--}}
{{--<script src="http://thememarch.com/demo/html/ivonne/assets/js/html2canvas.min.js"></script>--}}
{{--<script src="http://thememarch.com/demo/html/ivonne/assets/js/main.js"></script>--}}
</body>

<!-- Mirrored from thememarch.com/demo/html/ivonne/general-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jul 2023 13:02:17 GMT -->
</html>
