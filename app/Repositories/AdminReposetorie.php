<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Categories;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\AdminRepositorieInterface;

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
    public function updateUser(Request $request, $id)
    {
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

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function createCategorie(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        $categorie = new Categories();
        $categorie->name = $request->input('name');
        $categorie->description = $request->input('description');
        $categorie->save();
        return $categorie;
    }

    public function getCategorie()
    {
        $categorie = Categories::all();
        return $categorie;
    }

    public function editCategorie($id)
    {
        $categorie = Categories::find($id);
        return $categorie;
    }

    public function updateCategorie(Request $request, $id)
    {
        $categorie = Categories::findOrFail($id);
        $request->validate([
            'name' => 'string',
            'description' => 'string',
        ]);
        $categorie->name = $request->input('name');
        $categorie->description = $request->input('description');
        $categorie->save();
        return $categorie;
    }

    public function deleteCategorie($id)
    {
        $categorie = Categories::find($id);
        $categorie->delete();
    }
    public function getPublication(){
        $publication = Publication::all();
        return $publication;
    }
    public function deletePublication($id){
        $publication = Publication::find($id);
        $publication->delete();
    }
    public function logout()
    {
        Auth::logout();
    }
}
