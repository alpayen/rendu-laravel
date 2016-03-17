@extends('layouts.app', ['pageTitle' => 'Dashboard'])

@section('content')

 @if(isset($message))
<h2>{{$message}}</h2>
@endif
 <h3>Welcome!</h3>


@endsection
