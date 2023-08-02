<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function __construct(
        private Order $order
    )
    {
    }
    public function index(Request $request)
    {
        $status = $request->type;
        $orders = Order::where('status', $status)->paginate(10);
        return view('admin.order.list', compact('orders', 'status'));
    }

    public function detail(Request $request)
    {
//        $order = Order::find($id)->load('orderDetail');
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
//        return view('admin.order.detail', compact('order'));
        return response()->json(['productDetail' => $productDetail,'discount'=>$discount,'total'=>$total]);
    }
    public function status(Request $request,$id){
        $this->order::where('id', $id)->update(['status' => $request->status]);
        return response()->json(['status' => 'success', 'message' => 'Status change successfully.']);
    }
    public function destroy($id){
        $this->order::where('id', $id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Delete successfully.']);
    }
}
