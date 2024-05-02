<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\AdminRepositorieInterface;

class AdminController extends Controller
{
    protected $adminReposetorie;
    public function __construct(AdminRepositorieInterface $adminReposetorie){
        $this->adminReposetorie = $adminReposetorie;
    }

    public function getUsers(){
        $user = $this->adminReposetorie->getUsers();
        return view('admin.home',compact('user'));
    }
}