@extends('layouts.app')
@section('title', 'Contactanos')
@section('content')
<link rel="stylesheet" href="{{ asset('css/form-login-register.css') }}">

        <form method="POST" class="login-form" action="{{ route('register') }}">
            @csrf
            <h2 class="form_tittle">Inicia sesion</h2>
            <p class="form_paragraph">¿Aún no tienes cuenta? <a href="{{ route('register') }}" 	class="form_link">Entra aqui</a></p>
            <div class="form_container">
            <!-- Name -->
            <div class="form_group">
                <input id="name" class="form_input" type="text" name="name" placeholder=" " required autofocus>
                <label for="name" class="form_label1">Nombre</label>
                <span class="form_line"></span>
            </div>

            <!-- Email Address -->
            <div class="form_group">
                <input id="email" class="form_input" type="email" name="email" placeholder=" " required >
                <label for="email" class="form_label1">Email</label>
                <span class="form_line"></span>
            </div>

            <!-- Phone -->
            <div class="form_group">
                <input id="phone" class="form_input" type="number" name="phone" placeholder=" " required >
                <label for="phone" class="form_label1">Telefono</label>
                <span class="form_line"></span>
            </div>

            <!-- Password -->
            <div class="form_group">
                <input id="password" class="form_input" type="password" name="password" placeholder=" " required autocomplete="new-password" >
                <label for="password" class="form_label1">Contraseña</label>
                <span class="form_line"></span>
            </div>

            <!-- Confirm Password -->
            <div class="form_group">
                <input id="password_confirmation" class="form_input" type="password" placeholder=" " name="password_confirmation" required>
                <label for="password_confirmation" class="form_label1">Confirmar contraseña</label>
                <span class="form_line"></span>
            </div>
                <input type="submit" class="form_submit" value="REGISTRARSE">
        </div>
        </form>

@endsection
