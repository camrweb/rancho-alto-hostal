@extends('layouts.admin')
@section('admin')


<form action="{{ route('store') }}" method="POST" class="form-admin" >
    @csrf
    <h1>
        CREAR CATEGORIA
    </h1>
    <hr class="hrcategorias">
    <input type="text" name="nombre" id="Nombre" placeholder="NOMBRE DE CATEGORIA">
    <br>
    <input type="submit" id="input-crear-form" name="crear" value="CREAR">
</form>
<br>
<button class="button-crear">
    <a href="{{ route('categorias') }}">
        VOLVER
    </a>
</button>

@endsection