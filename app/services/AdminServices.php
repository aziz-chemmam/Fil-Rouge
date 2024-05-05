<?php 
namespace App\Services;
use Illuminate\Http\Request;
use App\Services\Interfaces\AdminServicesInterface;
use App\Repositories\Interfaces\AdminRepositorieInterface;

class AdminServices implements AdminServicesInterface{
    
    protected $adminReposetorie;
    
    public function __construct(AdminRepositorieInterface $adminReposetorie){
        $this->adminReposetorie = $adminReposetorie;
    }

    public function getUsers(){
        return $this->adminReposetorie->getUsers();
    }

    public function editUser($id){
        return $this->adminReposetorie->editUser($id);
    }
    public function updateUser(Request $request , $id){
        return $this->adminReposetorie->updateUser($request , $id);
    }
    public function deleteUser($id){
        return $this->adminReposetorie->deleteUser($id);
    }

    public function createCategorie(Request $request){
        return $this->adminReposetorie->createCategorie($request);
    }
    public function getCategorie(){
        return $this->adminReposetorie->getCategorie();
    }

    public function editCategorie($id){
        return $this->adminReposetorie->editCategorie($id);
    }
    public function updateCategorie(Request $request , $id){
        return $this->adminReposetorie->updateCategorie($request , $id);
    }
    public function deleteCategorie($id){
        return $this->adminReposetorie->deleteCategorie($id);
    }
    public function getPublication(){
        return $this->adminReposetorie->getPublication();
    }
}

