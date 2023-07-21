<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductVariants;
use App\Models\User;
use App\Models\Coupon;
use Mail;
use App\Mail\OrderConfirmation;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function __construct(
        private Order           $order,
        private OrderDetail     $order_detail,
        private Product         $product,
        private ProductVariants $product_variants,
        private User            $user,
        private Coupon          $coupon,
    )
    {
    }

    public function index()
    {
        return view('client.checkout.index');
    }

    public function store(OrderRequest $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $note = $request->note;
        $province = $request->province;
        $district = $request->district;
        $commune = $request->commune;
        $street = $request->street;
        $address = $street . ', ' . $commune . ', ' . $district . ', ' . $province;
        $discount = Session::get('coupon')['discount'] ?? 0;
        $cart = session()->get('cart');
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        DB::beginTransaction();
        try {
            $order = new Order();
            $order->user_id = 1;
//        $order->user_id = auth()->user()->id;
            $order->order_code = "DH" . rand(0, 9) . time();
            $order->name = $name;
            $order->phone = $phone;
            $order->email = $email;
            $order->note = $note;
            $order->discount = $discount;
            $order->total = $total;
            $order->status = "Chưa thanh toán";
            $order->payment_method = "vnpay";
            $order->payment_status = 1;
            $order->shipping_address = $address;
            $order->save();
            foreach ($cart as $item) {
                $order_detail = new OrderDetail();
                $order_detail->order_id = $order->id;
                $order_detail->product_variant_id = $item['id'];
                $order_detail->quantity = $item['quantity'];
                $order_detail->price = $item['price'];
                $order_detail->save();
            }
            DB::commit();
            $total = $total - $discount;
            $urlCheckout = $this->vnpay($total, $order->order_code);
//            dd($urlCheckout);
            return response()->json(['status' => 'success', 'urlCheckout' => $urlCheckout]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'errors' => $e->getMessage()]);
        }
    }

    function vnpay($total, $order_code)
    {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        /**
         * Description of vnpay_ajax
         *
         * @author xonv
         */
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
        $vnp_TmnCode = env('VNP_TMNCODE'); //Website ID in VNPAY System
        $vnp_HashSecret = env("VNP_HASHSECRET"); //Secret key
        $vnp_Url = env("VNP_URL");
        $vnp_Returnurl = route('client.checkout.order-confirmation');
//        $vnp_TmnCode = "DL0EA7AJ"; //Website ID in VNPAY System
//        $vnp_HashSecret = "GOGAQDDKQGSHOENQIKCHZBMXCIZBQVXJ"; //Secret key
//        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
//        $vnp_Returnurl="http://127.0.0.1:8000/checkout/order-confirmation";
        $vnp_apiUrl = " https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
//Config input format
//Expire
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
        $vnp_TxnRef = $order_code; //Mã đơn hàng
        $vnp_OrderInfo = "Thanh toan don hang";
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $total * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
//Add Params of 2.0.1 Version
        $vnp_ExpireDate = $expire;
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $vnp_ExpireDate,
        );
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        return $vnp_Url;
    }

    public function comfirmPayment(Request $request)
    {
        $status = $request->vnp_ResponseCode;
        $orderCode = $request->vnp_TxnRef;
        $bankTranNo = $request->vnp_BankTranNo;
        if (!Session::has('page_loaded')) {
            Session::put('page_loaded', true);
            if ($status == "00") {
//                DB::beginTransaction();
//                try {
                    $this->order::where('order_code', $orderCode)->update([
                        'status' => 'Người bán đã xác nhận đơn hàng',
                        'payment_status' => 0,
                    ]);

                    $cart = session()->get('cart');
                    $order = $this->order::where('order_code', $orderCode)->with('order_detail')->first();
                    $name = $order->name;
                    $address = $order->shipping_address;
                    $phone = $order->phone;
                    $email = $order->email;
                    $discount = $order->discount;
                    $order_detail = json_decode($order->order_detail, true);
                    foreach ($order_detail as $item) {
                        $product_variant_id = $item['product_variant_id'];
                        $quantity = $item['quantity'];
                        $product_variant = $this->product_variants::where('id', $product_variant_id)->first();
                        $product_variant->quantity = $product_variant->quantity - $quantity;
                        $product_variant->save();
                        $product_id = $product_variant->product_id;
                        $product = $this->product::where('id', $product_id)->first();
                        $product->sold = $product->sold + $quantity;
                        $product->save();
                    }
                    if (Session::has('coupon')) {
                        $coupon = $this->coupon::where('code', Session::get('coupon')['code'])->first();
                        if ($coupon) {
                            $coupon->used = $coupon->used + 1;
                            $coupon->save();
                        }
                        Session::forget('coupon');
                    }
                    //send mail
                    $date = Carbon::now()->format('d-m-Y');
                    Mail::to($email)->send(new OrderConfirmation($cart, $name, $phone, $email,$address,$discount,$orderCode,$date));
                    Session::forget('cart');
                    return view('client.checkout.orderConfirmation', compact('cart', 'name', 'phone', 'email', 'address','discount', 'orderCode', 'date'));
//                    DB::commit();
//                } catch (\Exception $exception) {
//                    DB::rollBack();
//                    Log::error('Message: ' . $exception->getMessage() . '---Line: ' . $exception->getLine());
//                }
            } else {
                $message = "Payment error";
                dd($message);
            }
        } else {
            // Chuyển hướng về trang home
//            Session::forget('page_loaded');
            return redirect()->route('client.home.index');
        }
    }
}
