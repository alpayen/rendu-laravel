@extends('layouts.app', ['pageTitle' => 'Article n°'.$post->id])

@section('content')
    <h2>{{$post->title}} <br> Auteur: {{ $post->user->name }} </h2>
    <p>{{$post->content}}</p>


    @foreach($post->comment as $comment)
        <p>Auteur: {{$comment->user->name}}</p><br>
        <p>Commentaire: {{$comment->content}}</p>

    @endforeach

@endsection