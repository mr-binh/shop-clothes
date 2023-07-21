<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\Order;
class DashboardController extends Controller
{
    public function index()
    {
        return view('client.dashboard.index');
    }
    public function profile()
    {
        return view('client.dashboard.profile');
    }
    public function order()
    {
        $orders = Order::query()->where('user_id', 1)->where('payment_status',0)->get();
        return view('client.dashboard.order', compact('orders'));
    }
    public function orderDetail(Request $request)
    {
        $orders = OrderDetail::query()->where('order_id', $request->id)->with('product_variant.product')->get();
        $productDetail = [];
        foreach ($orders as $key => $order) {
            $productDetail[$key] = [
                'id' => $order->product_variant->product->id,
                'name' => $order->product_variant->product->name,
                'price' => $order->product_variant->product->price,
                'image' => $order->product_variant->product->image,
                'color' => $order->product_variant->color,
                'size' => $order->product_variant->size,
                'quantity' => $order->quantity,
            ];
        }
        $discount=$orders[0]->order->discount;
        $total=$orders[0]->order->total;
        return response()->json(['productDetail' => $productDetail,'discount'=>$discount,'total'=>$total]);
    }
}
