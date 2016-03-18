@extends('layouts.app', ['pageTitle' => 'Messages laissés par vos utilisateur'])

@section('content')

    @foreach($contacts as $contact)
        <p>{{$contact->name}}</p>
        <p>{{$contact->email}}</p>
        <p>{{$contact->message}}</p>
        <hr>


    @endforeach




@endsection