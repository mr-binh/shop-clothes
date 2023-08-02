<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariants;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function __construct(
        private Product         $product,
        private ProductVariants $productVariants,
        private Category        $category,
    )
    {
    }

    public function index()
    {
//        $products = $this->product->paginate(10);
        $products = Product::with(['product_variants' => function ($query) {
            $query->select('product_id', \DB::raw('sum(quantity) as total_quantity'))
                ->groupBy('product_id');
        }])->paginate(10);
//            print_r(json_encode($products));
//            die();
        return view('admin.product.list', compact('products'));
    }

    public function create()
    {
        $categories = $this->category->all();

        return view('admin.product.add', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = uploadFile('upload', $request->file('image'));
            $product = $this->product->create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
                'price' => $request->price,
                'image' => $file,
                'discount' => $request->discount,
                'status' => $request->status,
                'hot' => $request->hot,
                'category_id' => $request->category_id,
            ]);
        }
//        $product->productVariants()->createMany($request->variants);
        return redirect()->route('admin.product.show')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = $this->product->find($id);
        $categories = $this->category->all();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, $id)
    {
        $file = $this->product->find($id)->image;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $resultDL = Storage::delete('/public/'.$file);
            if($resultDL){
                $file = uploadFile('upload', $request->file('image'));
            }
        }
//        DB::beginTransaction();
//        try {
            $this->product->where('id',$id)->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
                'price' => $request->price,
                'image' => $file,
                'status' => $request->status,
                'hot' => $request->hot,
                'category_id' => $request->category_id,
            ]);
            return redirect()->route('admin.product.show')->with('success', 'Product updated successfully.');
//        } catch (\Exception $e) {
//            DB::rollBack();
//            return response()->json(['error', $e->getMessage()]);
//        }

    }

    public function destroy($id)
    {
        $product = $this->product::findOrFail($id);
        $file = $product->image;
        $product->delete();
        Storage::delete('/public/'.$file);
        return redirect()->route('admin.product.show')->with('success', 'Product deleted successfully.');
    }
    public function un_hot($id)
    {
        $this->product::where('id', $id)->update(['hot' => 1]);
        return response()->json(['status' => 'success', 'message' => 'Status change successfully.']);
    }

    public function re_hot($id)
    {
        $this->product::where('id', $id)->update(['hot' => 0]);
        return response()->json(['status' => 'success', 'message' => 'Status change successfully.']);
    }

    public function un_status($id)
    {
        $this->product::where('id', $id)->update(['status' => 1]);
        return response()->json(['status' => 'success', 'message' => 'Status change successfully.']);
    }

    public function re_status($id)
    {
        $this->product::where('id', $id)->update(['status' => 0]);
        return response()->json(['status' => 'success', 'message' => 'Status change successfully.']);
    }

//product variant
    public function detail($id)
    {
        $productvariant = $this->productVariants::where('product_id', $id)->paginate(10);
        $productId = $id;
        $productName= $this->product::query()->select('name')->where('id', $id)->first();
        return view('admin.productvariant.list', compact('productvariant','productId','productName'));
    }
    public function detailCreate($id){
        $productId = $id;
        return view('admin.productvariant.add', compact('productId'));
    }
    public function detailStore(Request $request,$id){
        $productvariant = $this->productVariants::create([
            'product_id' => $id,
            'color' => $request->color,
            'size' => $request->size,
            'quantity' => $request->quantity,
        ]);
        return redirect()->route('admin.product.detail.show', $productvariant->product_id)->with('success', 'Product variant created successfully.');
    }
    public function detailEdit($id){
        $productvariant = $this->productVariants::findOrFail($id);
        return view('admin.productvariant.edit', compact('productvariant'));
    }
    public function detailUpdate($id){
        $productvariant = $this->productVariants::findOrFail($id);
        $productvariant->update([
            'color' => request()->color,
            'size' => request()->size,
            'quantity' => request()->quantity,
        ]);
        return redirect()->route('admin.product.detail.show', $productvariant->product_id)->with('success', 'Product variant updated successfully.');
    }
    public function detailDestroy($id){
        $productvariant = $this->productVariants::findOrFail($id);
        $productvariant->delete();
        return redirect()->route('admin.product.detail.show', $productvariant->product_id)->with('success', 'Product variant deleted successfully.');
    }


}
