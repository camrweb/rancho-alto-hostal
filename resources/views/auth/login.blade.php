@extends('layouts.app')
@section('title', '- Login')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/form-login-register.css') }}">

    <form method="POST" class="login-form" action="{{ route('login') }}">
        @csrf
        <h1 class="form_tittle">Inicia sesion</h1>
        <p class="form_paragraph">¿Aún no tienes cuenta? <a href="{{ route('register') }}" class="form_link">Entra aqui</a></p>
        <div class="form_container">
            <!-- Email Address -->
            <div class="form_group">
                <input id="email" class="form_input" type="email" name="email" placeholder=" " required>
                <label for="email" id="email" class="form_label1">Email</label>
                <span class="form_line"></span>
            </div>
            <!-- Password -->
            <div class="form_group">
                <input id="password" class="form_input" type="password" name="password" placeholder=" " required
                    autocomplete="current-password">
                <label for="password" id="password" class="form_label1">Contraseña</label>
                <span class="form_line"></span>
            </div>
            <input type="submit" class="form_submit" value="Entrar">
        </div>
    </form>

@endsection
