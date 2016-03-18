@extends('layouts.app', ['pageTitle' => 'Validation de projet'])

@section('content')


    <h3>Projets à valider</h3>

    @foreach($avalider as $projet)
        <p>Nom du projet: <strong><a href=""></a>{{$projet->nomduprojet}}</strong></p>
        <p>Par: {{$projet->nom}}</p>
        <br>
    @endforeach
    
    <h3>Projets validés</h3>
    @foreach($valide as $projet)
        <p>Nom du projet: <strong><a href=""></a>{{$projet->nomduprojet}}</strong></p>
        <p>Par: {{$projet->nom}}</p>
        <br>
    @endforeach




        <h3>Projets Rejeté</h3>
    @foreach($rejete as $projet)
        <p>Nom du projet: <strong><a href=""></a>{{$projet->nomduprojet}}</strong></p>
        <p>Par: {{$projet->nom}}</p>
        <br>
    @endforeach






@endsection
