<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use Illuminate\Http\Request;

class OeuvreController extends Controller
{

    public function index()
    {
        $oeuvres = Oeuvre::all();
        return view('oeuvres', compact('oeuvres'));
    }

    public function show($id)
    {

        $oeuvre = Oeuvre::findOrFail($id);

        return view('oeuvre',
        [
            'oeuvre' => $oeuvre
        ]);
    }
}
