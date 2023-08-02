<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
class CouponController extends Controller
{
    public function check(Request $request)
    {
        $coupon = Coupon::query()->where('code', $request->coupon_code)->first();
        if (!$coupon) {
            return response()->json(['status'=>'error','message' => 'Mã giảm giá không tồn tại']);
        }
        if ($coupon->status == 1) {
            return response()->json(['status'=>'error','message' => 'Mã giảm giá đã hết hạn']);
        }
        if ($coupon->quantity == $coupon->used) {
            return response()->json(['status'=>'error','message' => 'Mã giảm giá đã hết lượt sử dụng']);
        }
        $now = Carbon::now()->timestamp;
        $start_date = Carbon::parse($coupon->start_date)->timestamp;
        $end_date = Carbon::parse($coupon->end_date)->timestamp;
        if ($now < $start_date || $now > $end_date) {
            return response()->json(['status'=>'error','message' => 'Mã giảm giá đã hết hạn']);
        }
        $cart = Session::get('cart');
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        $coupon=collect($coupon)->only(['code','type','value','discount_max']);
        $discount = 0;
        if ($coupon['type'] == 1) {
            $discount = $total * $coupon['value'] / 100;
            $totalTm = $total - $discount;
            if ($discount >= $coupon['discount_max']) {
                $discount = $coupon['discount_max'];
                $totalTm = $total - $discount;
            }
        } else {
            $discount = $coupon['value'];
//            if ($discount > $coupon['discount_max']) {
//                $discount = $coupon['discount_max'];
//            }
            $totalTm = $total - $discount;
        }
//        $info = [
//            'code' => $coupon['code'],
//            'discount' => $discount,
//        ];
//        Session::put('coupon', $info);
        return response()->json(['status'=>'success','message' => 'Áp dụng mã giảm giá thành công', 'discount' => $discount, 'total' => $totalTm]);
    }
}
