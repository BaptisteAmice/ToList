@extends('layouts.app')



@section('content')

<h1>Ajout oeuvre</h1>
<form method="POST" action="{{ route('oeuvres.store') }}">
    @csrf
    <input type="text" name="titre" placeholder="Titre">
    <input type="text" name="image" placeholder="image">
    <input type="text" name="resume" placeholder="Resume">
    <input type="text" name="statut" placeholder="statut">
    <button type="submit">Ajouter</button>
</form>




@endsection

