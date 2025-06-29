<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{

    public function registeration()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => ['nullable', 'unique:users,username'],
            'email' => ['nullable', 'unique:users,email'],
            'password' => ['required', 'numeric:6', 'unique:users'],
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            Alert::success('', 'ثبت نام شما با موفقیت انجام شد');
            return redirect()->route('login');
        }

        Alert::success('', 'مشکلی پیش آمده دوباره فیلد ها رو بررسی کن');
        return redirect()->back();

    }

    public function login()
    {
        return view("auth.login");
    }
    public function signIn(Request $request)
    {
        $request->validate([
            'login' => ['required', 'string'],
            'password' => ['required', 'digits:6'],
        ]);

        $user = User::where('username', $request->login)->orWhere('email', $request->login)->first();

        if ($user) {
            Auth::login($user);
            session(['username' => $user->username, 'email' => $user->email]);
            Alert::success(' مدیر گرامی', 'با موفقیت وارد پنل شدید شدید');
            return redirect(route('admin.index'));

        } else {
            Alert::info('', ' همچین کاربری یافت نشد! ،اول ثبت نام کنید');
            return redirect(route('register.index'));
        }
    }



    public function logout(Request $request)
    {
        Auth::logout();
        session()->forget('username');
        session()->forget('email');
        Alert::success('با موفقیت خارج شدید', 'مدیر گرامی');
        return redirect('/');

    }


}
