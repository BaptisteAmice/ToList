@extends('layouts.app')



@section('content')

<h1>Ajout oeuvre</h1>
<form method="POST" action="{{ route('oeuvres.store') }}">
    @csrf
    <input type="text" name="titre" placeholder="Titre">
    <input type="text" name="image" placeholder="Image">
    <input type="text" name="media" placeholder="Media">
    <input type="text" name="resume" placeholder="Resume">
    <input type="text" name="statut" placeholder="Statut">
    <button type="submit">Ajouter</button>
</form>




@endsection

