@extends('layouts.app', ['pageTitle' => 'Liste des articles'])

@section('content')




    @if(Session::has('erreur'))
        <h1>{{Session::get('erreur')}}</h1>
    @endif
    @if(Auth::check())
    <button class="col-md-4 col-md-offset-4" style="margin-top: 25px;"><strong><a href="{{route('articles.create')}}">Créer un article</a></strong></button>
    @else <strong>You must be <a href="{{url('/login')}}">logged in</a> to post a comment</strong>
    @endif
    </br></br></br></br>



    @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <p>{{$post->content}}</p>
        <a href="{{route('articles.show', $post->id)}}">
            <button>Voir l'article</button>
        </a>

        @if(Auth::check() && Auth::user()->id == $post->user_id)
            <a href="{{route('articles.edit', $post->id)}}">
                <button>Editer l'article</button>
            </a>
            <form action="{{route('articles.destroy', $post->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button>Supprimer l'article</button>
            </form>
        @endif
    @endforeach




@endsection