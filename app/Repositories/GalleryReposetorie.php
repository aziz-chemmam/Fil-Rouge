<?php
namespace App\Repositories;

use App\Models\Publication;
use App\Repositories\Interfaces\GalleryReposetorieInterface;

class GalleryReposetorie implements GalleryReposetorieInterface{

    public function imageDesplay()
    {
        $publication = Publication::all();
        return $publication;
    }
    
}