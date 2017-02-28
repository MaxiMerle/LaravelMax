@extends('main')

@section('title', '| Tous les Articles')


@section('content')

<h1>Bienvenue {{\Auth::user()->name}}</h1>

@if(\Auth::check())

{{ link_to_route('logout', 'Deconnexion') }}
{{ link_to_route('users.create', 'Nouveau Membre ?') }}

@endif


@endsection