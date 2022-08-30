@extends('layouts.admin')
@section('admin')


<form action="/admin/habitaciones/{{$categoria}}/store" method="POST" class="form-admin" >
    @csrf
    <h1>
        {{ $categoria }}
    </h1>
    <hr class="hrhabitaciones">
    @include('admin.habitaciones.form')
</form>
<button class="button-crear">
    <a href="/admin/habitaciones/{{$categoria}}">
        VOLVER
    </a>
</button>

@endsection