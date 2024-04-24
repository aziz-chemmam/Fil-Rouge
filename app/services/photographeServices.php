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

}

?>