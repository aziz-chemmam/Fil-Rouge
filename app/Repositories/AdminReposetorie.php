<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\AdminRepositorieInterface;

class AdminReposetorie implements AdminRepositorieInterface
{

    public function getUsers(){
        $user = User::all();
        return $user;
    }
}

