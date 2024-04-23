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
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'url' => env('CLOUDINARY_URL'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
                'secure' => true,
            ],
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
