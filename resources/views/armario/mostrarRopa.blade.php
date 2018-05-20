@extends('layouts.master')


@section('content')

<div class="container">
PARA MOSTRAR DATOS

<li>

    @foreach($estilos as $estilo)
        <h3>{{$estilo -> id}}</h3>
        <p>{{$estilo -> estilo}} :  {{$estilo -> descripcion}}</p>
    @endforeach 



</li> 

<li>

    @foreach($tipos as $tipo)
        <h3>{{$tipo -> id}}</h3>
        <p>{{$tipo -> nombre}}</p>
    @endforeach 



</li> 



</div>

@endsection