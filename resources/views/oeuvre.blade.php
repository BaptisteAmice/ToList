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

@endsection

