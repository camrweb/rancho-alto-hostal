@extends('layouts.admin')
@section('admin')


<link rel="stylesheet" href="{{ public_path('css/pdf_habitaciones.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

<section class="attendance">
        <div class="attendance-list">
          <h1 class="tittle-table">Reservas</h1>
          <table class="table">
            <thead>
              <tr>
                <th align="center">ID</th>
                <th align="center">Nombres</th>
                <th align="center">Apellidos</th>
                <th align="center">Tipo de documento</th>
                <th align="center">Numero de documento</th>
                <th align="center">Categoria</th>
                <th align="center">Habitacion</th>
                <th align="center">Check in</th>
                <th align="center">Check out</th>
                <th align="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($reservas as $reserva)
                  
                <td align="center">{{ $reserva->id }}</td>
                <td align="center">{{ $reserva->nombres }}</td>
                <td align="center">{{ $reserva->apellidos }}</td>
                <td align="center">{{ $reserva->tipo_documento }}</td>
                <td align="center">{{ $reserva->numero_documento }}</td>
                <td align="center">{{ $reserva->categoria_name }}</td>
                <td align="center">{{ $reserva->habitacion_name }}</td>
                <td align="center">{{ $reserva->check_in }}</td>
                <td align="center">{{ $reserva->check_out }}</td>
                <td align="center">
                  <div class="inline-button">
                    {{-- <form action=""  class="acciones-button">
                      <button>Editar</button>
                    </form> --}}
                    <form action="{{ route('reserva.delete', $reserva->id) }}" method="GET"  class="acciones-button">
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