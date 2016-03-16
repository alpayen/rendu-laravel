@extends('layouts.app', ['pageTitle' => 'Article n°'.$post->id])

@section('content')
    <h2>{{$post->title}}<br> Auteur: {{ $post->user->name }} </h2>
    <p>{{$post->content}}</p>

    <hr>
    <h2>Publier un commentaire</h2>
    {!! Form::open(array(
    'action' => 'CommentController@store',
    'method' => 'POST'))
    !!}

    <div class="form-group">
        {!! Form::hidden('post_id', $post->id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
    {!! Form::close() !!}

    @include('partials.articles.errors')
    <hr>




    @foreach($post->comment as $comment)
        <p>Auteur: {{$comment->user->name}}</p><br>
        <p>Commentaire: {{$comment->content}}</p>

    @endforeach


@endsection