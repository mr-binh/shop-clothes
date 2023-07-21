<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariants;
use DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->q;
        if ($keyword) {
            $products = Product::query()->where('name', 'like', "%{$keyword}%")->with('product_variants')->paginate(9);
            return view('client.product.index', compact('products'));
        }
        $products = Product::query()->with('product_variants')->paginate(9);
        return view('client.product.index', compact('products'));
//        return view('client.product.index');
    }

    public function detail($slug)
    {
        $product = Product::query()->where('slug', $slug)->first();
        $color = ProductVariants::query()->where('product_id', $product->id)->select('color', 'product_id')->distinct()->get();
//        $size = ProductVariants::query()->where('product_id', $product->id)->select('size')->distinct()->get();
        return view('client.product.detail', compact('product', 'color'));
    }

    public function getSize($color, $product_id)
    {
        $size = ProductVariants::query()->where('product_id', $product_id)->where('color', $color)->select('size', 'id')->distinct()->get();
        return response()->json($size);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::query()->where('name', 'like', "%{$keyword}%")->with('product_variants')->paginate(9);
        return view('client.product.index', compact('products'));
    }
}
