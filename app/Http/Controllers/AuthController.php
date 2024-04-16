<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }


    public function create(request $request)
    {
        $validation = $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
        ]);

        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = request('password');
        $user->role = request('role');
        $user->save();
        return redirect()->route('login')->with('success', 'Account Created');
    }


    public function loginView()
    {
        return view('auth.login');
    }

    public function login(request $request)
    {
        $login = $request->only('email', 'password');
        if (Auth::attempt($login)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return view('admin.hmoe');
            } else if ($user->role === 'user') {
                return view('user.home');
            } else if ($user->role === 'photographer') {
                return view('photographer.home');
            }
        }
        return redirect()->back()->with('success', 'email or password is incorrect!');
    }
}
