<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use App\Models\Commentaire;
use App\Models\Auteur;
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

    public function create()
    {
        return view('oeuvre_create');
    }

    public function store(Request $request)
    {

        Oeuvre::create([
            'titre' => $request->titre,
            'image' => $request->image,
            'media' => $request->media,
            'resume' => $request->resume,
            'statut' => 'En cours',
        ]);

        dd('done');
        $oeuvre = Oeuvre::create($request->all());
        return redirect()->route('oeuvres.show', $oeuvre->id);
    }



/*
    public function edit($id)
    {
        $oeuvre = Oeuvre::findOrFail($id);
        return view('oeuvre_edit', compact('oeuvre'));
    }
    */


    public function register()
    {
        $oeuvre = Oeuvre::find(2);
        $auteur = Auteur::find(1);

        $comment1 = new Commentaire(['contenu' => 'Ceci est un commentaire1']);
        $comment2 = new Commentaire(['contenu' => 'Ceci est un commentaire2']);
        $comment3 = new Commentaire(['contenu' => 'Ceci est un commentaire3']);

        $oeuvre->comments()->save($comment1);
        $auteur->comments()->saveMany([$comment2, $comment3]);

    }

}
