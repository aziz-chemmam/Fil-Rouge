<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserReposetorieInterface;

class UserController extends Controller
{
    protected $userReposetorie;
    public function __construct(UserReposetorieInterface $userReposetorie)
    {
        $this->userReposetorie = $userReposetorie;
    }


    public function comntPublication(Request $request, $publication_id)
    {
        $this->userReposetorie->comntPublication($request, $publication_id);
        return redirect()->back();
    }

    public function getPublicationAndComments($id)
    {

        $data = $this->userReposetorie->getPublicationAndComments($id);
        $publication = $data['publication'];
        $comments = $data['comments'];

        return view('user.image', compact('publication', 'comments'));
    }
    public function uplouadImage($id)
    {
        $pdf = $this->userReposetorie->uplouadImage($id);
        return $pdf->stream('invoice.pdf');
    }
}
