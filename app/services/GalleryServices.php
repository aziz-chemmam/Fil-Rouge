<?php

namespace App\Services;

use App\Services\Interfaces\GalleryServicesIntreface;
use App\Repositories\Interfaces\GalleryReposetorieInterface;

class GalleryServices implements GalleryServicesIntreface{
    
    protected $galleryReposetorie;
    
    public function __construct(GalleryReposetorieInterface $galleryReposetorie){
        $this->galleryReposetorie = $galleryReposetorie;
    }
    

    public function imageDesplay(){
        return $this->galleryReposetorie->imageDesplay();
    }
}