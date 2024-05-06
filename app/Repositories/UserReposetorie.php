<?php

namespace App\Repositories;

use Dompdf\Dompdf;
use App\Models\Commentaire;
use App\Models\Publication;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Repositories\Interfaces\UserReposetorieInterface;

class UserReposetorie implements UserReposetorieInterface
{


    public function comntPublication(Request $request, $publication_id)
    {
        $request->validate([
            'commentaire' => 'required|string',
        ]);
        $user_id = Auth::user()->id;
        $commentaire = new Commentaire();
        $commentaire->user_id = $user_id;
        $commentaire->publication_id = $publication_id;
        $commentaire->commentaire = $request->input('commentaire');
        $commentaire->save();
    }

    public function getPublicationAndComments($id)
    {
        $publication = Publication::findOrFail($id);
        $comments = Commentaire::where('publication_id', $id)->get();
        return compact('publication', 'comments');
    }

    public function uplouadImage($id){
        $publication = Publication::findOrFail($id);
        $pdf = new Dompdf();
        $pdf->loadHtml(View::make('user.pdfInvoice', compact('publication'))->render());
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();        
        return $pdf;    
    }

}
