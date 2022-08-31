@extends('layouts.admin')
@section('admin')

<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Personas Max</th>
        <th>Precio</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($habitaciones as $habitacion)
        <tr>
          <td>{{ $habitacion->id }}</td>
          <td>{{ $habitacion->name }}</td>
          <td>{{ $habitacion->description }}</td>
          <td>{{ $habitacion['person-max'] }}</td>
          <td>{{ $habitacion->price }}</td>
          <td>
            <form action="{{ route('habitacion.edit', $habitacion->name) }}" method="POST">
              @csrf 
              <button type="submit">Editar</button>
            </form> 
            <form method="post" action="{{ route('habitacion.delete', $habitacion->id) }}" class="delete-form">
              @csrf
              @method('DELETE')
              <button type="submit" class="delete">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection