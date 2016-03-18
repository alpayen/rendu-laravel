@extends('layouts.app', ['pageTitle' => 'Projet n°'.$projet->id])

@section('content')



       <h3><strong>Nom du projet:</strong> {{$projet->nomduprojet}}</h3>
       <p><strong>Nom:</strong> {{$projet->nom}}</p>
       <p><strong>Email: </strong>{{$projet->email}}</p>
       <p><strong>Numéro: </strong>{{$projet->tel}}</p>
       <p><strong>Fonction: </strong>{{$projet->fonction}}</p>
       <p><strong>Adresse: </strong>{{$projet->adresse}}</p>
       <p><strong>Nom: </strong>{{$projet->nom_suivi}}</p>
       <p><strong>Fonction: </strong>{{$projet->fonction_suivi}}</p>
       <p><strong>Adresse: </strong>{{$projet->adresse_suivi}}</p>
       <p><strong>Email: </strong>{{$projet->email_suivi}}</p>
       <p><strong>Numéro: </strong>{{$projet->tel_suivi}}</p>
       <p><strong>Contexte: </strong>{{$projet->contexte}}</p>
       <p><strong>Demande: </strong>{{$projet->demande}}</p>
       <p><strong>Objéctif: </strong>{{$projet->objectif}}</p>
       <p><strong>Contrainte:</strong> {{$projet->contrainte}}}</p>

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


@endsection