@extends('layout')

@section('header')
@if($log=="si")
<p>Bienvenido {{$nombre}}</p>
@else
<a href="">Registrate aqui</a>
@endif
@stop


