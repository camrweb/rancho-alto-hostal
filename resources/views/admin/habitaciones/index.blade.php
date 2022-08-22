@extends('layouts.admin')
@section('admin')


<button class="delete-form">
  <a href="/admin/habitaciones/{{$categoria}}/create">
      CREAR
  </a>
</button>

<section class="attendance">
        <div class="attendance-list">
          <h1>{{ $categoria }}</h1>
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
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>

@endsection