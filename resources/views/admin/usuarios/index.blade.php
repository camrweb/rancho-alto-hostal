@extends('layouts.admin')
@section('admin')

<link rel="stylesheet" href="{{ asset('css/users_index.css') }}" />

<!--TABLA USUARIOS REGISTRADOS-->
<section class="attendance">
        <div class="attendance-list">
          <h1 class="tittle-table">Usuarios registrados</h1>
          <button class="button-pdf-index">
            <a href="{{ route('usuarios.pdf') }}" target="_blank">
                PDF
            </a>
          </button>
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
                  <div class="inline-button">
                  <form method="GET" action="{{ route('usuarios.edit', $user->id) }}" class="acciones-button">
                    @csrf
                    <button>Editar</button>
                    </form>
                    <form method="get" action="{{ route('usuarios.delete', $user->id) }}" class="acciones-button">
                      @method('DELETE')
                      @csrf
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