<?php

namespace App\Http\Controllers;


use App\Services\Interfaces\photographeServiceInterface;
use Illuminate\Http\Request;


class PhotographerrController extends Controller
{
    protected $photographerReposetorie;


    public function __construct(photographeServiceInterface $photographeServiceInterface){
        $this->photographerReposetorie = $photographeServiceInterface;
    }

    public function view(){
        return view('photographer.photographe');
    }

    public function createPublication(Request $request){
        $this->photographerReposetorie->createPublication($request);
        return redirect()->back();
}

    

}
