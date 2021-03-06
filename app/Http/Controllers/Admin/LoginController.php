<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }


    public function login(LoginRequest $request)
    {
        $remember_me = $request->has('remember_me');

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admin.dashboard');
        }
        return redirect()->back()->with(['error' => 'هناك خطاء في البيانات']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('get.admin.login');
    }

}
