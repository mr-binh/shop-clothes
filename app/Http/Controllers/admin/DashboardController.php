<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $orderCount = Order::where('payment_status',0)->count();
        $userCount = User::count();
        return view('admin.dashboard.index', compact('productCount', 'categoryCount', 'orderCount', 'userCount'));
    }
}
