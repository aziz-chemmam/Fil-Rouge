<?php

namespace App\Http\Controllers;


use App\Services\Interfaces\photographeServiceInterface;
use Illuminate\Http\Request;


class PhotographerrController extends Controller
{
    protected $photographerReposetorie;


    public function __construct(photographeServiceInterface $photographeServiceInterface){
        $this->photographerReposetorie = $photographeServiceInterface;
    }

    public function view(){
        return view('photographer.photographe');
    }

    public function createPublication(Request $request){
        $this->photographerReposetorie->createPublication($request);
        return redirect()->back();
}
     public function getPublication(){
        $publication = $this->photographerReposetorie->getPublication();
        return view('photographer.photographe',compact('publication'));
    }

    public function editPublication($id){
        $publication = $this->photographerReposetorie->editPublication($id);
        return view('photographer.editDashboard' , compact('publication'));
    }

    public function updatePublication(Request $request, $id){
        $publication = $this->photographerReposetorie->updatePublication($request, $id);
        return redirect('/photographe');
    }

    public function deletePublication($id){
        $publication = $this->photographerReposetorie->deletePublication($id);
        return redirect()->back()->with('success', 'Publication deleted successfully');
    }

}
