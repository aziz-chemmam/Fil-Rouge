<?php
namespace App\Services\Interfaces;

use Illuminate\Http\Request;


interface AdminServicesInterface{
    public function getUsers();
    public function editUser($id);
    public function updateUser(Request $request , $id);
    public function deleteUser($id);
    public function createCategorie(Request $request);
}

