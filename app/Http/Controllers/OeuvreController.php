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

    public function create()
    {
        return view('oeuvre_create');
    }

    public function store(Request $request)
    {

        Oeuvre::create([
            'titre' => $request->titre,
            'image' => $request->image,
            'resume' => $request->resume,
            'status' => $request->status,
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
}
