@extends('layouts.admin')
@section('admin')
    <section class="attendance">
        <button class="button-crear-index">
            <a href="{{ route('galeria.create') }}">
                CREAR
            </a>
        </button>
        <div class="attendance-list">
            <h1></h1>
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
                                <form action="{{ route('galeria.edit', $galeria->id) }}" method="get" class="edit-button">
                                    @csrf
                                    <button type="submit">Editar</button>
                                </form>
                                |
                                <form method="post" action="{{ route('galeria.delete', $galeria->id) }}" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete">Eliminar</button>
                                </form>
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
