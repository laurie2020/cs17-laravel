<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

    protected $table = "joueurs";

    protected $fillable = [
        "nom",
        "prenom",
        "age",
        "email",
        "numero",
        "pays",
        "genre_id",
        "role_id",
        "equipe_id"
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

    public function photo()
    {
        return $this->hasOne(Photo::class);
    }
}
