@extends('layouts.master')
@section('title', 'QueMePongo')

@section('content')

<div class="container container-index">
    <div class="contenido-index">
        <h1> ¿Qué me pongo  hoy? </h1>

        <a class="boton-login" href="{{ route('register') }}">Regístrate</a>

        <a class="boton-login" href="{{ route('login') }}">Entra a tu armario</a>

    </div>  
</div>

@endsection
