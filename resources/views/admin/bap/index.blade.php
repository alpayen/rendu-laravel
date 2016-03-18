@extends('layouts.app', ['pageTitle' => 'Validation de projet'])

@section('content')


    <h3>Projets à valider</h3>

    @foreach($avalider as $projet)
        <p>Nom du projet: <strong><a href="{{route('admin.bap.show', $projet->id)}}">{{$projet->nomduprojet}}</a></strong></p>
        <p>Par: {{$projet->nom}}</p>
        {!! Form::model($projet, ['route' => ['admin.bap.update',$projet->id],
                           'method' => 'PUT']) !!}
        <div class="row">

            <div class="col-md-2 col-md-offset-4">

                <div class="form-group">
                    {!! Form::hidden('validation', 1, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Accepter ce projet', ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
            <div class="col-md-6">
                {!! Form::model($projet, ['route' => ['admin.bap.update',$projet->id],
                                   'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::hidden('validation', 2, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Rejeter ce projet', ['class' => 'btn btn-danger']) !!}


                {!! Form::close() !!}
            </div>
        </div>
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
