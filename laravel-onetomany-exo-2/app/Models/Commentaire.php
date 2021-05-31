<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $table = "commentaires";

    protected $fillable = [
        "nom",
        "email",
        "message",
        "date",
        "article_id"
    ];

    public function article()
    {
        $this->belongsTo(Article::class);
    }
}
