@extends('adminlte::page')

@section('title', 'Projeto Base')

@section('content_header')
    <h1>
        Bem Vindo ao Projeto Base 1.0!
    </h1>
@stop

@section('content')
    Trabalhando para otimizar o desenvolvimento de seus projetos
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{ Log::info("Homepage Acessada ".Auth::user()); }}
@stop