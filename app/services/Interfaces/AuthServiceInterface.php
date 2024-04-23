<?php
namespace App\Services\Interfaces;

use Illuminate\Http\Request;

interface AuthServiceInterface{
    
    public function create(Request $request);

}

?>