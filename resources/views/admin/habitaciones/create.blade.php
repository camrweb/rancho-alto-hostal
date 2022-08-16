@extends('layouts.admin')
@section('admin')

<h1>
    CREAR HABITACION
</h1>

<form action="{{ route('habitaciones.show') }}" method="POST" >
    @csrf
    <input type="text" name="nombre" id="Nombre" placeholder="NOMBRE">
    <br>
    <input type="submit" name="crear" value="CREAR">
</form>
<br>
<button>
    <a href="{{ route('categorias') }}">
        VOLVER
    </a>
</button>

@endsection