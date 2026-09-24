<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use ReturnTypeWillChange;

class UserController extends Controller
{
    public function register(UserRegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->fio = $request->fio;
        $user->number = $request->number;
        $user->password = $request->password;
        $user->save();
        Auth::login($user);
        return redirect()->route('homepage');
    }

    public function login(UserLoginRequest $request)
    {
        $user = User::where("name", $request->name)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('homepage');
        }
        return back()->withInput()->withErrors(['password' => 'Неверный логин или пароль']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('homepage');
    }
    public function viewreg()
    {
        return view('reg');
    }
    public function viewlog()
    {
        return view('log');
    }
    public function homepage()
    {
        return view("index");
    }
    public function viewprofile()
    {
        return view("profile");
    }
    public function viewadminpanel()
    {
        return view("admin");
    }
    public function viewcreate()
    {
        return view("create");
    }
    public function vieworder()
    {
        return view("order");
    }
}
