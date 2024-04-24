<?php

namespace App\Repositories;

use App\Models\Publication;
use Illuminate\Http\Request;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Repositories\Interfaces\PhotographeRepoInterfaces;

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

    public function createPublication(Request $request)
    {
        $user_id = Auth::user()->id;
    
        $publication = new Publication();
        $publication->user_id = $user_id;
        $publication->description = $request->input('description');
        $publication->categorie_id = $request->input('categorie_id');
    
        if ($request->hasFile('image')) {
            $uploadedImage = Cloudinary::upload($request->file('image')->getRealPath(), [
                'folder' => 'public/photo',
            ]);
    
            $publication->image = $uploadedImage->getSecurePath();
        }
    
        $publication->save();
        
    }
    
}
