@extends('layouts.app')



@section('content')

<h1>{{$oeuvre->titre}}</h1>

<p>{{$oeuvre->resume}}</p>

<ul>
    <li>statut : {{$oeuvre->statut}}  </li>
    <li></li>
    <li></li>
    <li></li>
</ul>

<hr>
<h2>Commentaires</h2>
@forelse($oeuvre->commentaires as $commentaire)
    <p>{{$commentaire->contenu}} | créé le {{$commentaire->created_at->format('d/m/Y')}}</p>
@empty
    <p>Aucun commentaire</p>
@endforelse


@forelse($oeuvre->auteurs as $auteur)
    <p>{{$auteur->nom}} | Rôle : {{$auteur->pivot->role}}  </p>
@empty
    <p>Aucun auteur renseigné</p>
@endforelse

@endsection

