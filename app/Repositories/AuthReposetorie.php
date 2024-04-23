<?php
namespace App\Repositories;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\AuthReposetorieInterface;

class AuthReposetorie implements AuthReposetorieInterface{

    public function create(Request $request){
        
            $validation = $request->validate([
                'fname' => 'required|string',
                'lname' => 'required|string',
                'email' => 'required|string',
                'password' => 'required|string|min:8',
                'role' => 'required|string',
            ]);
    
            $user = new User();
            $user->fname = request('fname');
            $user->lname = request('lname');
            $user->email = request('email');
            $user->password = request('password');
            $user->role = request('role');
            $user->save();

        }
    }
    

?>
