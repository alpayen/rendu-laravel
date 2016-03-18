@extends('layouts.app', ['pageTitle' => 'Validation de projet'])

@section('content')


    <h3>Projets à valider</h3>

    @foreach($avalider as $projet)
        <p>Nom du projet: <strong><a href="{{route('admin.bap.show', $projet->id)}}">{{$projet->nomduprojet}}</a></strong></p>
        <p>Par: {{$projet->nom}}</p>
        {!! Form::model($projet, ['route' => ['admin.bap.update',$projet->id],
                           'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::hidden('validation', 1, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Accepter ce projet', ['class' => 'btn btn-block']) !!}
        {!! Form::close() !!}

        {!! Form::model($projet, ['route' => ['admin.bap.update',$projet->id],
                           'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::hidden('validation', 2, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Rejeter ce projet', ['class' => 'btn btn-block']) !!}
        {!! Form::close() !!}
        <br>
        <br>
    @endforeach

    <h3>Projets validés</h3>
    @foreach($valide as $projet)
        <p>Nom du projet: <strong><a href="{{route('admin.bap.show', $projet->id)}}">{{$projet->nomduprojet}}</a></strong></p>
        <p>Par: {{$projet->nom}}</p>
        <br>
    @endforeach




        <h3>Projets Rejeté</h3>
    @foreach($rejete as $projet)
        <p>Nom du projet: <strong><a href="{{route('admin.bap.show', $projet->id)}}">{{$projet->nomduprojet}}</a></strong></p>
        <p>Par: {{$projet->nom}}</p>
        <br>
    @endforeach






@endsection
