<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable =[

        'id',
        'user_id',
        'publication_id',
        'commentaire',
        'created_at',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
