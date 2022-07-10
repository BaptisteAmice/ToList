@extends('layouts.app')



@section('content')

<h1>{{$oeuvre->titre}}</h1>

<p>{{$oeuvre->resume}}</p>

<ul>
    <li>Status : {{$oeuvre->status}}  </li>
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

@endsection

