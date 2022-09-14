@extends('layouts.admin')
@section('admin')

<link rel="stylesheet" href="{{ asset('css/habitaciones_index.css') }}" />


<section class="attendance">
        <div class="attendance-list">
          <h1 class="tittle-table">{{ $categoria }}</h1>
          <button class="button-crear-index">
            <a href="/admin/habitaciones/{{$categoria}}/create">
                CREAR
            </a>
          </button>
          <button class="button-pdf-index">
            <a href="/admin/habitaciones/{{ $categoria }}/pdf" target="_blank">
                PDF
            </a>
          </button>
          <table class="table" >
            <thead>
              <tr>
                <th align="center">ID</th>
                <th align="center">Foto</th>
                <th align="center">Nombre</th>
                <th align="center">Descripcion</th>
                <th align="center">Personas Max</th>
                <th align="center">Precio</th>
                <th align="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($habitaciones as $habitacion)
                <tr>
                  <td align="center">{{ $habitacion->id }}</td>

                  <td align="center"><img src="{{ asset('storage'.'/'.$habitacion->foto) }}" width="200" alt=""></td>

                  <td align="center">{{ $habitacion->name }}</td>
                  <td align="center" id="description">{{ $habitacion->description }}</td>
                  <td align="center">{{ $habitacion['person-max'] }}</td>
                  <td align="center">{{ $habitacion->price }}</td>
                  <td align="center">
                    <div class="inline-button">
                    <form action= "/admin/habitaciones/{{ $habitacion->id }}/edit" method="GET" class="acciones-button">
                      @csrf 
                      <button type="submit">Editar</button>
                    </form>
                    <form method="post" action="{{ route('habitacion.delete', $habitacion->id) }}" class="acciones-button" >
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="delete">Eliminar</button>
                    </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>

@endsection