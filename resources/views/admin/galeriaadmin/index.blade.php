@extends('layouts.admin')
@section('admin')

<link rel="stylesheet" href="{{ asset('css/galeria_index.css') }}" />

    <section class="attendance">
        
        <div class="attendance-list">
            <h1 class="tittle-table">GALERIA</h1>
            <button class="button-crear-index">
                <a href="{{ route('galeria.create') }}">
                    CREAR
                </a>
            </button>
            <table class="table">
                <thead>
                    <tr>
                        <th align="center">Foto</th>
                        <th align="center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galerias as $galeria)
                        <tr>
                            <td align="center"><img src="{{ asset('storage' . '/' . $galeria->image) }}" width="400"
                                    alt=""></td>
                            <td align="center">
                                <div class="acciones-button">
                                <form action="{{ route('galeria.edit', $galeria->id) }}" method="get" class="acciones-button">
                                    @csrf
                                    <button type="submit">Editar</button>
                                </form>
                                <form method="post" action="{{ route('galeria.delete', $galeria->id) }}" class="acciones-button">
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
            {{-- <div>
                {!! $galerias->links() !!}
            </div> --}}
        </div>
    </section>
@endsection
