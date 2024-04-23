<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\AuthReposetorieInterface;

class AuthReposetorie implements AuthReposetorieInterface
{

    public function create(Request $request)
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
    }

    public function login(request $request){
        $login = $request->only('email', 'password');
        if (Auth::attempt($login)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect('/admin');
            } else if ($user->role === 'user') {
                return redirect('/user');
            } else if ($user->role === 'photographer') {
                return redirect('/photographe');
            }
        }
    }
}
