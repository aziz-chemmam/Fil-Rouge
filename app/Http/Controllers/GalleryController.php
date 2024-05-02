<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\GalleryServicesIntreface;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    protected $galleryReposetorie;
  
    public function __construct(GalleryServicesIntreface $galleryServicesIntreface){
        $this->galleryReposetorie = $galleryServicesIntreface;
    }

    public function imageDesplay(){
        $publication =  $this->galleryReposetorie->imageDesplay();
         return view('gallery',compact('publication'));
    }
}
