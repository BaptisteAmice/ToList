<?php

namespace App\Models;

use App\Models\Commentaire;
use App\Models\Oeuvre;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    use HasFactory;

    public function oeuvres()
    {
        return $this->belongsToMany(Oeuvre::class)->withPivot('role');
    }

    public function commentaires()
    {
        return $this->morphMany(Commentaire::class, 'commentable');
    }
}

