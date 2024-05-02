<?php 
namespace App\Services;
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

}