<?php

namespace App\Http\Controllers;


use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotographerrController extends Controller
{
    public function view(){
        return view('photographer.photographe');
    }



    public function create(Request $request){

        $user_id = Auth::user()->id;
 
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/image');
            $imageName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/image', $imageName);
            
           $publication = Publication::create([
            'user_id' => $user_id,
                'image' => $imagePath,
                'description' => $request->input('description'),
                'categorie_id' => $request->input('categorie_id'),
                
           ]);
           $publication->save();
           return redirect()->back();

        }
}
}
