<?php

namespace App\Repositories;

use App\Models\Publication;
use App\Repositories\Interfaces\PhotographeRepoInterfaces;
use Cloudinary\Api\Upload\UploadApi;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Auth;

class PhotographeReposetorie implements PhotographeRepoInterfaces
{



    protected $cloudinary;
    protected $uploadApi;

    public function __construct(UploadApi $uploadApi){
        $this->uploadApi = $uploadApi;
        $this->cloudinary = new Cloudinary([
                'cloud_name' => env('dn17yokxs'),
                'api_key' => env('624157183274298'),
                'api_secret' => env('sHU3faM4TP5XWEieHqrj0X7hmNM'),
        ]);
    }

    public function createPublication(array $data)
    {
        $user_id = Auth::user()->id;

        $publication = new Publication();
        $publication->user_id = $user_id;
        $publication->description = $data['description'];
        $publication->categorie_id = $data['categorie_id'];

        if(isset($data['image'])){
            $image = $this->uploadApi->upload($data['image']->getRealPath(), [
                'folder' => 'movies/images',
                'public_id' => uniqid(),
            ]);
            $publication->image = $image['secure_url'];
        }

        $publication->save();
        return $publication;
    } 
}
