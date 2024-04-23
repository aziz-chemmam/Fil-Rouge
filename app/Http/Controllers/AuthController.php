<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Interfaces\AuthServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    protected $authService;

    public function __construct(AuthServiceInterface $authService){
        $this->authService = $authService;

    }


    public function register()
    {
        return view('auth.register');
    }


    public function create(request $request)
    {
         $this->authService->create($request);
        return redirect()->route('login')->with('success', 'Account Created');


    }


    public function loginView()
    {
        return view('auth.login');
    }

    public function login(request $request)
    {
       return $this->authService->login($request);
    }
}
