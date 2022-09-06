@extends('layouts.admin')
@section('admin')


<section class="attendance">
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
        <div class="attendance-list">
          <h1>CATEGORIAS</h1>
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
                  <form action= "{{ route ('categoria.edit', $categoria->id) }}" method="GET" class="edit-button">
                    @csrf 
                    <button type="submit">Editar</button>
                  </form> 
                    <form method="get" action="{{ route('categoria.delete', $categoria->id) }}" class="delete-form">
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