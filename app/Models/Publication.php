<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publication extends Model
{
    use HasFactory;
    protected $table = 'publication';

    protected $fillable =[
        'id',
        'user_id',
        'categorie_id',
        'description',
        'localisation',
        'image',
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'categorie_id');
    }
   
}
