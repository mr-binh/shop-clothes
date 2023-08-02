<?php

namespace App\Http\Controllers;

use App\Models\User;
//use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Log;
//use Illuminate\Support\Str;
//use Laravel\Socialite\Facades\Socialite;
//use Laravel\Socialite\Two\InvalidStateException;
class AuthController extends Controller
{
    public function adminLogin()
    {
        return view('admin.auth.login');
    }

    public function adminCheck(Request $request)
    {
        $user = User::whereEmail($request->email)->first();
        if (!$user) return null;  //check if user exists
        if (Hash::check($request->password, $user->password)) {
            if ($user && $user->hasRole(['super admin', 'staff'])) {
                Auth::login($user);
                if (!session()->has('token')) {
                    auth()->user()->tokens()->delete();
                    $token = auth()->user()->createToken("token_admin")->plainTextToken;
                    session()->put('token', $token);
                }
                return redirect(route('admin.dashboard.index'));
            }
        }

        return redirect(route('admin.auth.login'))->with('msg', "Tài khoản của bạn không có quyền truy cập!");
    }

//    public function postLoginToken(Request $request)
//    {
//        try {
//            $googleUser = Socialite::driver('google')->userFromToken($request->token);
//        } catch (Exception $ex) {
//            Log::info("=================================");
//            Log::error("Lỗi đăng nhập: " . $ex->getMessage());
//            Log::error("Token: " . $request->token);
//            log::info("=================================");
//
//            return response()->json([
//                'status' => false,
//                'payload' => "Tài khoản không tồn tại hoặc xác thực thất bại",
//            ]);
//        }
//        // if (!Str::contains($googleUser->email, config('util.END_EMAIL_FPT'))) return response()->json([
//        //     'status' => false,
//        //     'payload' => "Tài khoản không tồn tại hoặc xác thực thất bại",
//        // ]);
//
//        $user = User::with('roles')->where('email', $googleUser->email)->first();
//        if ($user) {
//            if ($user->status == 0) return response()->json(
//                [
//                    'status' => false,
//                    'payload' => "Xác thực thất bại",
//                ]
//            );
//            $user->save();
//            $token = $user->createToken('auth_token')->plainTextToken;
//            return response()->json([
//                'status' => true,
//                'payload' => [
//                    "token" => $token,
//                    "token_type" => 'Bearer',
//                    'user' => $user->toArray(),
//                ],
//            ]);
//        }
//        $flagRoleAdmin = false;
//        $MSSV = null;
//        if (strlen($googleUser->email) < 8) $flagRoleAdmin = true;
//        if (!$flagRoleAdmin) foreach (config('util.MS_SV') as $ks) {
//            $MSSV = \Str::lower($ks) . \Str::afterLast(
//                    \Str::of($googleUser->email)
//                        ->before(config('util.END_EMAIL_FPT'))
//                        ->toString(),
//                    \Str::lower($ks)
//                );
//        };
//        try {
//            $user = null;
//            DB::transaction(function () use ($MSSV, $googleUser, &$user) {
//                $user = User::create([
//                    'mssv' => $MSSV,
//                    'name' => $googleUser->name ?? 'no name',
//                    'email' => $googleUser->email,
//                    'status' => 1,
//                    'avatar' => null
//                ]);
//            });
//            if ($flagRoleAdmin && $user) $user->assignRole('admin');
//            if (!$flagRoleAdmin && $user) $user->assignRole('student');
//            $token = $user->createToken('auth_token')->plainTextToken;
//            return response()->json([
//                'status' => true,
//                'payload' => [
//                    "token" => $token,
//                    "token_type" => 'Bearer',
//                    'user' => $user->toArray(),
//                ],
//            ]);
//        } catch (\Exception $e) {
//            return response()->json([
//                'status' => false,
//                'payload' => "Xác thực thất bại",
//            ]);
//        }
//    }
//
//    public function fake_login(Request $request)
//    {
//        $user = User::with('roles')->where('email', $request->email)->first();
//        if ($user) {
//            $token = $user->createToken('auth_token')->plainTextToken;
//            return response()->json([
//                'status' => true,
//                'payload' => [
//                    'token' => $token,
//                    'user' => $user->toArray(),
//                ],
//            ]);
//        }
//
//        return response()->json([
//            'status' => false,
//            'payload' => "email không tồn tại",
//        ]);
//    }

    public function logout()
    {
        if (auth()->check() == false) return redirect(route('admin.auth.login'));
        auth()->user()->tokens()->delete();
        Auth::logout();
        return redirect(route('admin.auth.login'));
    }
}
