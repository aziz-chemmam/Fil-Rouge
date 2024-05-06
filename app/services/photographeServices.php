<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Services\Interfaces\photographeServiceInterface;
use App\Repositories\Interfaces\PhotographeRepoInterfaces;

class photographeServices implements photographeServiceInterface{


    protected $photographerReposetorie;

    public function __construct(PhotographeRepoInterfaces $photographerReposetorie){
        $this->photographerReposetorie = $photographerReposetorie;
    }


    public function createPublication(Request $request){
        return $this->photographerReposetorie->createPublication($request);
    }
    public function getPublication(){
        return $this->photographerReposetorie->getPublication();
    }
    public function editPublication($id){
        return $this->photographerReposetorie->editPublication($id);
    }
    public function updatePublication(Request $request, $id){
        return $this->photographerReposetorie->updatePublication($request, $id);
    }
    
    public function deletePublication($id){
        return $this->photographerReposetorie->deletePublication($id);
    }
    public function lastAplouad(){
        return $this->photographerReposetorie->lastAplouad();
    }
 
}
