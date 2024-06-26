<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Services\Interfaces\AuthServiceInterface;
use App\Repositories\Interfaces\AuthReposetorieInterface;

class AuthServices implements AuthServiceInterface {


    protected $authRepository;

    public function __construct(AuthReposetorieInterface $authRepository){
        $this->authRepository = $authRepository;

    }
    public function create(Request $request)
    {
        return $this->authRepository->create($request);

    }

    public function login(request $request)
    {
       return $this->authRepository->login($request);
    }
    public function logout(){
        return $this->authRepository->logout();
    }

}

?>