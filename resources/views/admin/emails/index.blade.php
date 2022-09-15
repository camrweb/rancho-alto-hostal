@extends('layouts.admin')
@section('admin')


<link rel="stylesheet" href="{{ asset('css/correos_index.css') }}" />

<section class="attendance">
        <div class="attendance-list">
          <h1 class="tittle-table">CORREOS</h1>
          <table class="table">
            <thead>
              <tr>
                <th align="center">ID</th>
                <th align="center">Nombre</th>
                <th align="center">Telefono</th>
                <th align="center">Correo</th>
                <th align="center">Mensaje</th>
                <th align="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($correos as $correo)
                <td align="center">{{ $correo->id }}</td>
                <td align="center">{{ $correo->name }}</td>
                <td align="center">{{ $correo->telefono }}</td>
                <td align="center">{{ $correo->email }}</td>
                <td align="center" style="word-break: break-all">{{ $correo->message }}</td>
                <td align="center">
                  <div class="inline-button">
                    {{-- <form action=""  class="acciones-button">
                      <button>Editar</button>
                    </form> --}}
                    <form action="{{ route('contact.email.delete', $correo->id) }}" method="GET"  class="acciones-button">
                      @csrf
                      <button class="delete">Eliminar</button>
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