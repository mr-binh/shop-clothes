<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Mail;
use App\Mail\OrderConfirmation;
use DB;
use Carbon\Carbon;
class CheckoutController extends Controller
{
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
            $order->order_code = "DH".rand(0,9) . time();
            $order->name = $name;
            $order->phone = $phone;
            $order->email = $email;
            $order->note = $note;
            $order->total = $total;
            $order->status = "Đang xử lý";
            $order->payment_method = "vnpay";
            $order->payment_status = "Chưa thanh toán";
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
            $urlCheckout = $this->vnpay();
            return response()->json(['status' => 'success', 'urlCheckout' => $urlCheckout]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'errors' => $e->getMessage()]);
        }
//        DB::beginTransaction();
//        try {
//            $order=Order::created([
//                'user_id' => 1,
//                'name' => $name,
//                'phone' => $phone,
//                'email' => $email,
//                'note' => $note,
//                'total' => $total,
//                'status' => "Đang xử lý",
//                'payment_method' => "vnpay",
//                'payment_status' => "Chưa thanh toán",
//                'shipping_address' => $address,
//            ]);
//            foreach ($cart as $item) {
//                OrderDetail::created([
//                    'order_id' => $order->id,
//                    'product_variant_id' => $item['id'],
//                    'quantity' => $item['quantity'],
//                    'price' => $item['price'],
//                ]);
//            }
//            DB::commit();
//        } catch (\Exception $e) {
//            DB::rollBack();
//            return response()->json(['status' => 'error', 'errors' => $e->getMessage()]);
//        }
//        return response()->json(['status' => 'success']);
    }

    function vnpay()
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
        $cart = session()->get('cart');
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        $order_code = Order::latest()->first()->order_code;
        $vnp_TmnCode = env('VNP_TMNCODE'); //Website ID in VNPAY System
        $vnp_HashSecret = env("VNP_HASHSECRET"); //Secret key
        $vnp_Url = env("VNP_URL");
        $vnp_Returnurl = env("VNP_RETURNURL");
//        $vnp_apiUrl = " https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
//Config input format
//Expire
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
        $vnp_TxnRef = $order_code; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
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
        if ($status == "00") {
            Order::where('order_code',$orderCode)->update(['payment_status' => 'Đã thanh toán']);
            $cart = session()->get('cart');
            $order = Order::where('order_code',$orderCode)->first();
            $name = $order->name;
            $address = $order->shipping_address;
            $phone = $order->phone;
            $email = $order->email;
            $date= Carbon::now()->format('d-m-Y');
            Mail::to($email)->send(new OrderConfirmation($cart, $name, $phone, $email, $address, $orderCode,$date));
            session()->forget('cart');
            return view('client.checkout.orderConfirmation', compact('cart', 'name', 'phone', 'email', 'address'));
        } else {
            $message = "Payment error";
        }
    }

}
