<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(2);
        return view("admin.users.list", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "username" => ["required", "unique:users,username"],
            "email" => ["required", "unique:users,email"],
            "password" => ['required', 'numeric:6', 'unique:users'],
        ]);

        $user = User::create([
            "username" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        if ($user) {
            return redirect(route('users.index'))->with('success', 'کاربر با موفقیت ثبت شد');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            "username" => ["nullable", "unique:users,username"],
            "email" => ["required", "unique:users,email"],
        ]);

        
        if (empty($request->input('username'))) {
            $user->update([
                'username' => $request->username,
            ]);
            return redirect(route('users.index'))->with('info', 'ویرایش نام کاربری موفقیت آمیز بود');

        } else {
            $user->update([
            'username' => $request->username,
            'email' => $request->email,
        ]);
            return redirect(route('users.index'))->withErrors('مشکلی رخ داد');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.index'))->with('info','کاربر مورد نظر حذف شد');
    }
}
