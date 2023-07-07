<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariants;
use DB;
class ProductController extends Controller
{
    public function index()
    {
        return view('client.product.index');
    }
    public function detail()
    {
        return view('client.product.detail');
    }
    public function test()
    {
        $product = Product::query()->whereIn('id',[1])->with('product_variants')->get();
        return $product;
    }
}
