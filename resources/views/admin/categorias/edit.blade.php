@extends('layouts.admin')
@section('admin')


    <form action="{{ route('categoria.update', $categoria[0]->id) }}" method="POST" class="form-admin">
        @csrf
        @method("PUT")
        <h1>
            {{ $categoria[0]->name }}
        </h1>
        <hr class="hrcategorias">


        @if (count($errors) > 0)
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif


        <input type="text" name="nombre" id="nombre" value="{{ $categoria[0]->name }}" placeholder="NOMBRE DE CATEGORIA">
        <br>
        <input type="submit" id="input-crear-form" name="crear" value="CREAR">
    </form>
    <br>
    <button class="button-crear">
        <a href="{{ route('categorias') }}">
            VOLVER
        </a>
    </button>

@endsection
