@extends('layouts.app', ['pageTitle' => 'Soummission de projet BAP'])




@section('content')

    <div>

        @include('partials.articles.errors')

    </div>

    <h1 style="color: #ffffff;">l</h1>







    <h2>Formulaire Bap</h2>

    {!! Form::open(array(
    'action' => 'BapController@store',
    'method' => 'POST'))
    !!}

    {!! Form::label('nom', 'Nom et Prénom') !!}
    <div class="form-group">
        {!! Form::text('nom',Auth::user()->name, ['class' => 'form-control']) !!}
    </div>


    {!! Form::label('email', 'Adresse mail') !!}
    <div class="form-group">
        {!! Form::text('email',Auth::user()->email, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('tel', 'Numéro de téléphone') !!}
    <div class="form-group">
        {!! Form::text('tel',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('nomduprojet', 'Nom du projet') !!}
    <div class="form-group">
        {!! Form::text('nomduprojet',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('fonction', 'Fonction au sein de l\'entreprise') !!}
    <div class="form-group">
        {!! Form::text('fonction',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('adresse', 'Adresse') !!}
    <div class="form-group">
        {!! Form::text('adresse',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('nom_suivi', 'Nom et Prenom de suivi') !!}
    <div class="form-group">
        {!! Form::text('nom_suivi',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('fonction_suivi', 'Fonction de suivi au sein de l\'entreprise') !!}
    <div class="form-group">
        {!! Form::text('fonction_suivi',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('adresse_suivi', 'Adresse de suivi') !!}
    <div class="form-group">
        {!! Form::text('adresse_suivi',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('email_suivi', 'Adresse mail de suivi') !!}
    <div class="form-group">
        {!! Form::text('email_suivi',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('tel_suivi', 'Numéro de téléphone de suivi') !!}
    <div class="form-group">
        {!! Form::text('tel_suivi',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('contexte', 'Contexte') !!}
    <div class="form-group">
        {!! Form::textarea('contexte',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('demande', 'Demande') !!}
    <div class="form-group">
        {!! Form::textarea('demande',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('objectif', 'Objéctif') !!}
    <div class="form-group">
        {!! Form::textarea('objectif',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('contrainte', 'Contrainte') !!}
    <div class="form-group">
        {!! Form::textarea('contrainte',Null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Envoyer le projet', ['class' => 'btn btn-block']) !!}
    {!! Form::close() !!}



@endsection