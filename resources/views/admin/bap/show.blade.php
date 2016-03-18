@extends('layouts.app', ['pageTitle' => 'Projet n°'.$projet->id])

@section('content')


    <div class="row">
        <div class="col-md-12">


            <h3 class="text-center"><strong>Nom du projet:</strong> {{$projet->nomduprojet}}</h3></br></br></br></br>


            <div class="col-md-6 col_content"
                 style="border-right: 1px solid black;padding-right: 10px;text-align: center;">

                <p><strong>Nom:</strong> {{$projet->nom}}</p>

                <p><strong>Adresse mail: </strong>{{$projet->email}}</p>

                <p><strong>Numéro de téléphone: </strong>{{$projet->tel}}</p>

                <p><strong>Fonction: </strong>{{$projet->fonction}}</p>

                <p><strong>Adresse: </strong>{{$projet->adresse}}</p>
            </div>
            <div class="col-md-6 col_content" style="text-align: center;">

                <p><strong>Nom de suivi: </strong>{{$projet->nom_suivi}}</p>

                <p><strong>Fonction de suivi: </strong>{{$projet->fonction_suivi}}</p>

                <p><strong>Adresse de suivi: </strong>{{$projet->adresse_suivi}}</p>

                <p><strong>Adresse mail de suivi: </strong>{{$projet->email_suivi}}</p>

                <p><strong>Numéro de téléphone de suivi: </strong>{{$projet->tel_suivi}}</p></br></br></br>

            </div>


            <div class="col-md-12" style="text-align: center;">


                <p><strong>Contexte: </strong>{{$projet->contexte}}</p>


                <p><strong>Demande: </strong>{{$projet->demande}}</p>


                <p><strong>Objectif: </strong>{{$projet->objectif}}</p>


                <p><strong>Contrainte:</strong> {{$projet->contrainte}}}</p>


            </div>


        </div>

    </div></br></br></br>

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


@endsection



