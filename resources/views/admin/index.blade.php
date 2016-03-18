@extends('layouts.app', ['pageTitle' => 'Admin panel'])

@section('content')
    <h2>Admin Panel!</h2>

    <p>Pour accéder aux projets et les valider, cliquez <strong><a href="{{route('admin.bap.index')}}">ici</a></strong></p>
    <p>Pour accéder aux articles, au commentaires et les gérés, cliquez <strong><a href="{{route('admin.articles.index')}}">ici</a></strong></p>
    <p>Pour voire les messages que vous ont laissé vos utilisateurs, cliquez <strong><a href="{{route('admin.contact.index')}}">ici</a></strong></p>
@endsection
