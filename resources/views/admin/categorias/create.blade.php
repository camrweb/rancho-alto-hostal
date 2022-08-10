@extends('layouts.admin')
@section('admin')

<h1>
    CREAR CATEGORIA
</h1>

<form action="{{ route('store') }}" method="POST" >
    @csrf
    <input type="text" name="nombre" id="Nombre" placeholder="NOMBRE DE CATEGORIA">
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