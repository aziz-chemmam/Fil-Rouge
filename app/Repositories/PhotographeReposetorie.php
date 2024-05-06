<?php

namespace App\Repositories;

use App\Models\Categories;
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

    public function __construct(UploadApi $uploadApi)
    {
        $this->uploadApi = $uploadApi;
        $this->cloudinary = new Cloudinary([
            'cloud_name' => env('dn17yokxs'),
            'api_key' => env('624157183274298'),
            'api_secret' => env('sHU3faM4TP5XWEieHqrj0X7hmNM'),
        ]);
    }

    public function createPublication(Request $request)
    {

        $request->validate([

            'description' => 'required',
            'localisation' => 'required',
            'categorie_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        $user_id = Auth::user()->id;

        $publication = new Publication();
        $publication->user_id = $user_id;
        $publication->description = $request->input('description');
        $publication->localisation = $request->input('localisation');
        $publication->categorie_id = $request->input('categorie_id');

        if ($request->hasFile('image')) {
            $uploadedImage = Cloudinary::upload($request->file('image')->getRealPath(), [
                'folder' => 'public/photo',
            ]);

            $publication->image = $uploadedImage->getSecurePath();
        }

        $publication->save();
    }



    public function editPublication($id)
    {
        $publication = Publication::find($id);
        return $publication;
    }

    public function updatePublication(Request $request, $id)
    {
        $publication = Publication::findOrFail($id);
        $request->validate([
            'description' => 'string',
            'localisation' => 'string',
            'categorie_id' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,dng',
        ]);
        $publication->description = $request->input('description');
        $publication->localisation = $request->input('localisation');
        $publication->categorie_id = $request->input('categorie_id');
        if ($request->hasFile('image')) {
            $uploadedImage = Cloudinary::upload($request->file('image')->getRealPath(), [
                'folder' => 'public/photo',
            ]);
            $publication->image = $uploadedImage->getSecurePath();
        }
        $publication->save();
    }

    public function deletePublication($id){
        $publication = Publication::find($id);
        $publication->delete();
    }
    public function lastAplouad(){
        $publication = Publication::latest()->take(5)->get();
        return $publication;
    }

    public function getPublication()
    {
        $photographerId = Auth::id();
        $publication = Publication::where('user_id', $photographerId)->get();
        $categorie = Categories::all();
        return compact('publication','categorie');
    }   

  
}
