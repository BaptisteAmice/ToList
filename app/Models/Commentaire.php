<?php

namespace App\Models;
use App\Models\Oeuvre;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    public function oeuvre()
    {
        return $this->belongsTo(Oeuvre::class);
    }
}
