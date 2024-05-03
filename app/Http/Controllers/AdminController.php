<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\AdminRepositorieInterface;

class AdminController extends Controller
{
    protected $adminReposetorie;
    public function __construct(AdminRepositorieInterface $adminReposetorie){
        $this->adminReposetorie = $adminReposetorie;
    }

    public function getUsers(){
        $user = $this->adminReposetorie->getUsers();
        return view('admin.users',compact('user'));
    }

    public function editUser($id){
        $user =  $this->adminReposetorie->editUser($id);
        return view('admin.adminEdit',compact('user'));
    }
    public function updateUser(Request $request , $id){
        $user = $this->adminReposetorie->updateUser($request , $id);
        return redirect('/users');
    }
    public function deleteUser($id){
        $this->adminReposetorie->deleteUser($id);
        return redirect()->back();
    }

    public function createCategorie(Request $request){
        $this->adminReposetorie->createCategorie($request);
        return redirect()->back();
    }

}