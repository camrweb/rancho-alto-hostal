@extends('layouts.admin')
@section('admin')

<!--TABLA USUARIOS REGISTRADOS-->
<section class="attendance">
  <button class="button-pdf-index">
    <a href="{{ route('usuarios.pdf') }}" target="_blank">
        PDF
    </a>
  </button>
        <div class="attendance-list">
          <h1>Usuarios registrados</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Fecha</th>
                <th>verificación</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->email_verified_at }}</td>
                <td>
                  <form method="GET" action="{{ route('usuarios.edit', $user->id) }}" class="delete-form">
                    @csrf
                    <button>Editar</button>
                    </form>
                    <form method="get" action="{{ route('usuarios.delete', $user->id) }}" class="delete-form">
                      @method('DELETE')
                      @csrf
                    <button type="submit" class="delete">Eliminar</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>

@endsection