<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CategoryController extends Controller
{
    public function __construct(
        private Category $category
    )
    {
    }

    public function index()
    {
        $category = Category::paginate(10);
        return view('admin.category.list', compact('category'));
    }
    public function create()
    {

//        $role = Role::create(['name' => 'staff']);
//        $permission = Permission::create(['name' => 'edit articles']);
        return view('admin.category.add');
    }
    public function store(CategoryRequest $request)
    {
        $this->category->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'image' => '',
            'parent_id' => 0,
        ]);
        return redirect()->route('admin.category.show');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(CategoryRequest $request)
    {
        $category = $this->category::findOrFail($request->input('id'));
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));
        $category->description = $request->input('description');
        $category->image = '';
        $category->save();
        return redirect()->route('admin.category.show');
    }
    public function destroy($id)
    {
        $category = $this->category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category.show');
    }

}
