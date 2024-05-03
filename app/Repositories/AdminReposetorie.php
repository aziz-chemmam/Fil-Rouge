<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\AdminRepositorieInterface;
use Illuminate\Http\Request;

class AdminReposetorie implements AdminRepositorieInterface
{

    public function getUsers()
    {
        $user = User::all();
        return $user;
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return $user;
    }
    public function updateUser(Request $request , $id){
        $user = User::findOrFail($id);
        $request->validate([
            'lname' => 'string',
            'fname' => 'string',
            'email' => 'string',
            'role' => 'string'
        ]);
        $user->lname = $request->input('lname');
        $user->fname = $request->input('fname');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->save();
        return $user;
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
    }
}
