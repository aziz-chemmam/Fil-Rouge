<?php
namespace App\Services\Interfaces;

use Illuminate\Http\Request;


interface AdminServicesInterface{
    public function getUsers();
    public function editUser($id);
    public function updateUser(Request $request , $id);
    public function deleteUser($id);
    public function createCategorie(Request $request);
    public function getCategorie();
    public function editCategorie($id);
    public function updateCategorie(Request $request , $id);
    public function deleteCategorie($id);
    public function getPublication();
    public function deletePublication($id);
    public function logout();
}

