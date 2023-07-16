<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Faker\Core\Number;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function __construct(
        protected Product $product
    )
    {
    }

    public function index()
    {
//        $cart = session()->get('cart');
//        return $cart;
        return view('client.cart.index');
    }

    public function store(Request $request)
    {
//        $product_id=$request->product_id;
        $product_variants_id = $request->product_variant_id;
        $quantity = $request->quantity * 1;
        $product = $this->product::join('product_variants', 'product_variants.product_id', '=', 'product.id')
            ->select('product_variants.color', 'product_variants.size', 'product.name', 'product.price', 'product.image', 'product.slug')
            ->where('product_variants.id', '=', $product_variants_id)
            ->first();
//        $userId = Auth::id();
        $cart = session()->get('cart', []);
        if (!isset($cart[$product_variants_id])) {
            $cart[$product_variants_id] = [
                "id" => $product_variants_id,
                "name" => $product->name,
                "slug" => $product->slug,
                "image" => $product->image,
                "price" => $product->price,
                "color" => $product->color,
                "size" => $product->size,
                "quantity" => $quantity
            ];
        } else {
            $quantity == 1 ? $cart[$product_variants_id]["quantity"]++ : $cart[$product_variants_id]["quantity"] += $quantity;
        }
        session()->put('cart', $cart);
        $count = count(session()->get('cart'));
        return response()->json(['success' => 'Product added to cart successfully.', 'cart' => session()->get('cart'), 'count' => $count]);
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            $total = 0;
            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }
            session()->flash('success', 'Cart successfully updated!');
            return response()->json(['success' => 'Cart successfully updated!', 'total' => $total]);
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                $total = 0;
                foreach ($cart as $item) {
                    $total += $item['price'] * $item['quantity'];
                }
            }
            $count = count($cart);
            session()->flash('success', 'Product successfully removed!');
            return response()->json(['success' => 'Cart successfully updated!', 'total' => $total, 'count' => $count]);
        }
    }
}
