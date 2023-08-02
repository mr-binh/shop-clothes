<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct(
        private User $user
    )
    {
    }

    public function index()
    {
        $user = $this->user::with('roles')->paginate(10);
        $role = Role::all();
        return view('admin.user.list', compact('user', 'role'));
    }

    public function create()
    {
        $role = Role::all();
        return view('admin.user.add', compact('role'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);
        $avatar = "";
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $avatar = uploadFile('upload', $file);
        }
        $user = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $avatar,
            'password' => bcrypt($request->password),
        ]);
        $user->assignRole($request->role);
        return redirect()->route('admin.user.show')->with('success', 'Thêm mới thành công');
    }

    public function edit()
    {
        $user = $this->user->findOrFail(Auth::user()->id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = $this->user->findOrFail(Auth::user()->id);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'avatar' => 'image|mimes:jpeg,png,jpg,svg|max:5048',
            'password' => 'min:6',
        ]);
        $avatar = $user->avatar;
        $password = $user->password;
        if ($request->password != null) {
            $password = bcrypt($request->password);
        }
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $avatar = uploadFile('upload', $file);
            Storage::delete('/public/' . $user->avatar);
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $avatar,
            'password' => $password,
        ]);
        return redirect()->route('admin.user.show')->with('success', 'Cập nhật thành công');
    }

    public function destroy($id)
    {
        $user = $this->user->findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function role(Request $request, $id)
    {
        $user = $this->user->findOrFail($id);
        $user->syncRoles($request->role);
        return response()->json([
            'status' => 'success',
            'message' => 'Cập nhật thành công'
        ]);
    }
}
