@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('auth_header', 'Sua conta precisa ser verificada')

@section('auth_body')

    @if(session('resent'))
        <div class="alert alert-success" role="alert">
            Um novo link de verificação foi enviado para o seu endereço de e-mail.
        </div>
    @endif
    
    Antes de continuar, verifique seu e-mail para obter um link de verificação. Verifique sua caixa de spam. <br>
    Se você não recebeu o e-mail,

    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
            Clique aqui para solicitar outro e-mail
        </button>.
    </form>

@stop
