<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotographerrController extends Controller
{
    public function view(){
        return view('photographer.photographe');
    }

    public function create(Request $request){
       $user_id = Auth::users()->id();
       
    }
}
