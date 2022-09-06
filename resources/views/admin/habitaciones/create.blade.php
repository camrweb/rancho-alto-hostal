@extends('layouts.admin')
@section('admin')
    <form action="/admin/habitaciones/{{ $categoria }}/store" method="POST" class="form-admin"
        enctype="multipart/form-data">
        @csrf
        <h1>
            {{ $categoria }}
        </h1>
        <hr class="hrhabitaciones">



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



        <input type="text" class="nameform" name="nombre" value="{{ old('nombre') }}" id="nombre" placeholder="NOMBRE">
        <textarea name="description" id="nescription" placeholder="DESCRIPCIÓN">{{ old('description') }}</textarea>
        <input type="text" name="person_max" id="nerson-max" value="{{ old('person_max') }}" placeholder="MAXIMO DE PERSONAS">
        <input type="number" name="price" id="price" value="{{ old('price') }}" placeholder="PRECIO">
        <div class="file">
            <h3 id="nombre_archivo"></h3>
            <label for="image" class="archivo_file"><span>Subir imagen</span></label>
            <input type="file" name="image" id="image">
        </div>
        <br>
        <input type="submit" id="input-crear-form" name="crear" value="GUARDAR">


    </form>
    <button class="button-crear">
        <a href="/admin/habitaciones/{{ $categoria }}">
            VOLVER
        </a>
    </button>


    <script type="text/javascript">
        let archivo = document.querySelector('#image');
        archivo.addEventListener('change', () => {
            document.querySelector('#nombre_archivo').innerText = archivo.files[0].name;
        })
    </script>
@endsection
