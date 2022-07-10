<?php

namespace App\Models;

use App\Models\Commentaire;
use App\Models\Auteur;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'image',
        'media',
        'resume',
        'statut',
    ];

    public function commentaires()
    {
        return $this->morphMany(Commentaire::class, 'commentable');
    }

    public function auteurs()
    {
        return $this->belongsToMany(Auteur::class)->withPivot('role');
    }
}
