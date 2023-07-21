<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (!empty(Auth::check())) {
            return redirect('admin/dashboard');
        } else {
            return view('auth.login');
        }
    }
    public function authLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect('admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'Please enter currect email and password');
        }
    }
    public function forgotPassword(){
        return view('auth.forgot');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}
