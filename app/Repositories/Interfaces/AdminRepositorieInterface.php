<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface AdminRepositorieInterface
{
    public function getUsers();
    public function editUser($id);
    public function updateUser(Request $request , $id);
    public function deleteUser($id);
    public function createCategorie(Request $request);
}