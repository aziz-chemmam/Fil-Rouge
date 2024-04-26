<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;


interface PhotographeRepoInterfaces{

    public function createPublication(Request $request);
    public function getPublication();
    public function editPublication($id);
    public function updatePublication(Request $request , $id);

    public function deletePublication($id);


}
?>