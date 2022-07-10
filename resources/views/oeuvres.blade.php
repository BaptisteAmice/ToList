@extends('layouts.app')



@section('content')

@if($oeuvres->count() > 0)
    @foreach($oeuvres as $oeuvre)
        <h1><a href="oeuvre/{{$oeuvre->id}}">{{$oeuvre->titre}}</a></h1>
    @endforeach
@else
    <p>Aucune oeuvre n'a été trouvée</p>
@endif


@endsection

