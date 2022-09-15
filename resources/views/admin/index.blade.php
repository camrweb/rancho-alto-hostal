@extends('layouts.admin')
@section('admin')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />


    <h1 class="tittle_dashboard">DASHBOARD</h1>
    <div class="row">
        <div class="contenedor">
            <div class="header_dashboard">
                <h2><i class="fas fa-users" style="margin-right: 10px"></i>Usuarios registrados</h2>
            </div>
            <hr>
            <div class="inside_dashboard">
                <div class="count">
                    <h3><b>{{ $users }}</b></h3>
                </div>
            </div>
        </div>

        <div class="contenedor">
            <div class="header_dashboard">
                <h2><i class="fas fa-laptop-code" style="margin-right: 10px"></i>Reservas realizadas</h2>
            </div>
            <hr>
            <div class="inside_dashboard">
                <div class="count">
                    <h3><b>{{ $reservas }}</b></h3>
                </div>
            </div>
        </div>

        <div class="contenedor">
            <div class="header_dashboard">
                <h2><i class="fas fa-align-center" style="margin-right: 10px"></i>Categorias creadas</h2>
            </div>
            <hr>
            <div class="inside_dashboard">
                <div class="count">
                    <h3><b>{{ $categorias }}</b></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="contenedor">
            <div class="header_dashboard">
                <h2><i class="fas fa-person-booth" style="margin-right: 10px"></i>Habitaciones creadas</h2>
            </div>
            <hr>
            <div class="inside_dashboard">
                <div class="count">
                    <h3><b>{{ $habitaciones }}</b></h3>
                </div>
            </div>
        </div>

        <div class="contenedor">
            <div class="header_dashboard">
                <h2><i class="fas fa-images" style="margin-right: 10px"></i>Imagenes agregadas</h2>
            </div>
            <hr>
            <div class="inside_dashboard">
                <div class="count">
                    <h3><b>{{ $imagenes }}</b></h3>
                </div>
            </div>
        </div>

        <div class="contenedor">
            <div class="header_dashboard">
                <h2><i class="fas fa-envelope" style="margin-right: 10px"></i></i>Correos</h2>
            </div>
            <hr>
            <div class="inside_dashboard">
                <div class="count">
                    <h3><b>{{ $correos }}</b></h3>
                </div>
            </div>
        </div>
    </div>
@endsection
