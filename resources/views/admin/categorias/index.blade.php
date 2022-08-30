@extends('layouts.admin')
@section('admin')


<section class="attendance">
  <button class="button-crear-index">
    <a href="{{ route('create')}}">
        CREAR
    </a>
  </button> 
        <div class="attendance-list">
          <h1>CATEGORIAS</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categorias as $categoria)
              <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->name}}</td>
                <td>
                    <button>Editar</button>
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