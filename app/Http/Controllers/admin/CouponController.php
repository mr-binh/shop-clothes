<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Http\Requests\CouponRequest;

class CouponController extends Controller
{
    public function __construct(
       private Coupon $coupon
    )
    {
    }

    public function index()
    {
        $coupon=$this->coupon->paginate(10);
        return view('admin.coupon.list',compact('coupon'));
    }
    public function create()
    {
        return view('admin.coupon.add');
    }
    public function store(CouponRequest $request){
        $this->coupon::create([
            'code'=>$request->code,
            'type'=>$request->type,
            'value'=>$request->value,
            'discount_max'=>$request->discount_max,
            'quantity'=>$request->quantity,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.coupon.show')->with('success', 'Coupon created successfully.');
    }
    public function edit($id){
        $coupon=$this->coupon->findOrfail($id);
        return view('admin.coupon.edit',compact('coupon'));
    }
    public function update(CouponRequest $request){
        $this->coupon->update([
            'code'=>$request->code,
            'type'=>$request->type,
            'value'=>$request->value,
            'discount_max'=>$request->discount_max,
            'quantity'=>$request->quantity,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.coupon.show')->with('success', 'Coupon updated successfully.');
    }
    public function destroy($id){
        $coupon=$this->coupon->findOrfail($id);
        $coupon->delete();
        return redirect()->route('admin.coupon.show')->with('success', 'Coupon deleted successfully.');
    }

    public function un_status($id)
    {
        $this->coupon::where('id', $id)->update(['status' => 1]);
        return response()->json(['status' => 'success', 'message' => 'Status change successfully.']);
    }

    public function re_status($id)
    {
        $this->coupon::where('id', $id)->update(['status' => 0]);
        return response()->json(['status' => 'success', 'message' => 'Status change successfully.']);
    }
}
