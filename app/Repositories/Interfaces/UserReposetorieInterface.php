<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;


interface UserReposetorieInterface{
    public function comntPublication(Request $request , $publication_id);
    public function getPublicationAndComments($id); 
    public function uplouadImage($id);
}