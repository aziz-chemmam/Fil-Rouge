<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface AuthReposetorieInterface{

    public function create(Request $request);
    public function login(Request $request);

}


?>