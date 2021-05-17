<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $table = 'livres';

    protected $fillable = [
        'titre',
        'auteur',
        'publication',
        'pages',
        'mobile'
    ];
}
