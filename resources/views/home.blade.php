@extends('layouts.app', ['pageTitle' => 'Dashboard'])

@section('content')

    @if(isset($message))
        <h2>{{$message}}</h2>
    @endif

    <div class="row text-center">
        <h3 class="text-center">Bienvenue Alexandre.T</h3>

        <div class="col-md-12 text-center" style="margin-bottom: 50px;">Tu pourras naviguer sur la plupart de nos créations via cette page.</div>

        <div class="col-md-4">Pour nous envoyer un message, clique <strong><a href="{{route('contact.index')}}">ici</a></strong>
            (Section Contact)
        </div>
        <div class="col-md-4">Pour voir les articles, clique <strong><a
                        href="{{route('articles.index')}}">ici</a></strong> (Articles)
        </div>
        <div class="col-md-4">Pour accéder aux projets BAP, clique <strong><a href="{{route('bap.index')}}">ici</a></strong>
            (Formulare pour soumettre un projet)
        </div>


    </div>

@endsection
