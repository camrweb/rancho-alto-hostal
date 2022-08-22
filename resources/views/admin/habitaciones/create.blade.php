@extends('layouts.admin')
@section('admin')

<h1>
    CREAR HABITACION
</h1>

<form action="/admin/habitaciones/{{$categoria}}/store" method="POST" >
    @csrf
    <input type="text" name="nombre" id="Nombre" placeholder="NOMBRE">
    <textarea name="description" id="Description" placeholder="DESCRIPCIÓN"></textarea>
    <input type="number" name="person_max" id="Person-max" placeholder="MAXIMO DE PERSONAS">
    <input type="number" name="price" id="price" placeholder="PRECIO">
    <br>
    <input type="submit" name="crear" value="CREAR">
</form>
<br>
<button>
    <a href="/admin/habitaciones/{{$categoria}}">
        VOLVER
    </a>
</button>

@endsection