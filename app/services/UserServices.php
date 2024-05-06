<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Services\Interfaces\UserServicesInterface;
use App\Repositories\Interfaces\UserReposetorieInterface;

class UserServices implements UserServicesInterface
{
    protected $userReposetorie;
    public function __construct(UserReposetorieInterface $userReposetorie)
    {
        $this->userReposetorie = $userReposetorie;
    }


    public function comntPublication(Request $request, $publication_id)
    {
        return $this->userReposetorie->comntPublication($request, $publication_id);
    }

    public function getPublicationAndComments($id)
    {
        return $this->userReposetorie->getPublicationAndComments($id);
    }
    public function uplouadImage($id)
    {
        return $this->userReposetorie->uplouadImage($id);
    }
}
