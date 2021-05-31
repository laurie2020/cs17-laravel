<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = "articles";

    protected $fillable = [
        "titre",
        "image",
        "categorie",
        "description",
        "auteur",
        "publication",
    ];

    public function commentaires()
    {
        $this->hasMany(Commentaire::class);
    }
}
