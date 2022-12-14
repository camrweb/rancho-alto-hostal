@extends('layouts.admin')
@section('admin')

<link rel="stylesheet" href="{{ asset('css/categoria_index.css') }}" />

<section class="attendance">
        <div class="attendance-list">
          <h1 class="tittle-table">CATEGORIAS</h1>
          <button class="button-crear-index">
            <a href="{{ route('create')}}">
                CREAR
            </a>
          </button>
          <button class="button-pdf-index">
            <a href="{{ route('categorias.pdf') }}" target="_blank">
                PDF
            </a>
          </button>
          <table class="table">
            <thead>
              <tr>
                <th align="center" align="center">ID</th>
                <th align="center" align="center">Nombre</th>
                <th align="center" align="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categorias as $categoria)
              <tr>
                <td align="center">{{$categoria->id}}</td>
                <td align="center">{{$categoria->name}}</td>
                <td align="center">
                  <div class="inline-button">
                    <form action= "{{ route ('categoria.edit', $categoria->id) }}" method="GET" class="acciones-button">
                    @csrf 
                    <button type="submit">Editar</button>
                    </form> 
                    <form method="get" action="{{ route('categoria.delete', $categoria->id) }}" class="acciones-button">
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