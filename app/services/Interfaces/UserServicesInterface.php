<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

interface UserServicesInterface{
    public function comntPublication(Request $request , $publication_id);
    public function getPublicationAndComments($id);
    public function uplouadImage($id);
}