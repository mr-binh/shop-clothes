<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;

class AttributeController extends Controller
{

    public function index(Request $request)
    {
        $type = $request->type;
        $attributes = Attribute::where('attribute_type', $type)->paginate(10);
        return view('admin.attribute.list', compact('attributes', 'type'));
    }

    public function create(Request $request)
    {
        $type = $request->type;
        return view('admin.attribute.add', compact('type'));
    }

    public function edit(Request $request, $id)
    {
        $type = $request->type;
        $attribute = Attribute::findOrFail($id);
        return view('admin.attribute.edit', compact('attribute', 'type'));
    }

    public function destroy($id)
    {
        $result = Attribute::findOrFail($id)->delete();
        if ($result) {
            return redirect()->back()->with('success', 'Banner deleted successfully.');
        }
    }

    //banner

    public function bannerAdd(Request $request)
    {
        if ($request->post()) {
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = uploadFile('upload', $request->file('image'));
                $result = Attribute::create([
                    'attribute_name' => $request->attribute_name,
                    'attribute_type' => 'banner',
                    'attribute_value' => $file,
                    'status' => $request->status,
                ]);
            }
            if ($result) {
                return redirect()->route('admin.attribute.show', ['type' => 'banner'])->with('success', 'Banner created successfully.');
            }
        }
    }

    public function bannerEdit(Request $request, $id)
    {
        if ($request->isMethod('PUT')) {
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = uploadFile('upload', $request->file('image'));
                $result = Attribute::where('id', $id)->update([
                    'attribute_name' => $request->attribute_name,
                    'attribute_type' => 'banner',
                    'attribute_value' => $file,
                    'status' => $request->status,
                ]);
            }
            if ($result) {
                return redirect()->route('admin.attribute.show', ['type' => 'banner'])->with('success', 'Banner updated successfully.');
            }
        }
    }

    //size

    public function sizeAdd(Request $request)
    {
        if ($request->post()) {
            $result = Attribute::create([
                'attribute_name' => $request->attribute_name,
                'attribute_type' => 'size',
                'attribute_value' => strtoupper($request->attribute_value),
                'status' => $request->status,
            ]);
            if ($result) {
                return redirect()->route('admin.attribute.show', ['type' => 'size'])->with('success', 'Size created successfully.');
            }
        }
    }

    public function sizeEdit(Request $request, $id)
    {
        if ($request->isMethod('PUT')) {
            $result = Attribute::where('id', $id)->update([
                'attribute_name' => $request->attribute_name,
                'attribute_type' => 'size',
                'attribute_value' => strtoupper($request->attribute_value),
                'status' => $request->status,
            ]);
            if ($result) {
                return redirect()->route('admin.attribute.show', ['type' => 'size'])->with('success', 'Size updated successfully.');
            }
        }
    }


    public function colorAdd(Request $request)
    {
        if ($request->post()) {

            $result = Attribute::create([
                'attribute_name' => $request->attribute_name,
                'attribute_type' => 'color',
                'attribute_value' => strtolower($request->attribute_value),
                'status' => $request->status,
            ]);
            if ($result) {
                return redirect()->route('admin.attribute.show', ['type' => 'color'])->with('success', 'Color created successfully.');

            }
        }
    }

    public function colorEdit(Request $request, $id)
    {
        if ($request->isMethod('PUT')) {
            $result = Attribute::where('id', $id)->update([
                'attribute_name' => $request->attribute_name,
                'attribute_type' => 'color',
                'attribute_value' => strtolower($request->attribute_value),
                'status' => $request->status,
            ]);
            if ($result) {
                return redirect()->route('admin.attribute.show', ['type' => 'color'])->with('success', 'Color update successfully.');
            }
        }
    }

}
