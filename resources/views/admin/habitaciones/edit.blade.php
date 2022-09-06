@extends('layouts.admin')
@section('admin')
    <form action="{{ route('habitacion.update', $habitacion->id) }}" method="POST" class="form-admin" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <h1>
            {{ $habitacion->name }}
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


        <input type="text" class="nameform" name="nombre" value="{{ $habitacion->name }}" id="Nombre" placeholder="NOMBRE">
        <textarea name="description" id="Description" placeholder="DESCRIPCIÓN">{{ $habitacion->description }}</textarea>
        <input type="text" name="person_max" id="Person-max" value="{{ $habitacion['person-max'] }}"
            placeholder="MAXIMO DE PERSONAS">
        <input type="number" name="price" value="{{ $habitacion->price }}" id="price" placeholder="PRECIO">
        <div class="file">
            <h3 id="nombre_archivo"><img src="{{ asset('storage'.'/'.$habitacion->foto) }}" width="150" alt=""></h3>
            <label for="image" class="archivo_file"><span>Subir imagen</span></label>
            <input type="file" class="input_file" name="image" id="image">
        </div>
        <br>
        <input type="submit" id="input-crear-form" name="crear" value="GUARDAR">

    </form>
    <button class="button-crear">
        <a href="/admin/habitaciones/{{ $categoria->name }}">
            VOLVER
        </a>
    </button>


    <script type="text/javascript">
        let archivo = document.querySelector('#image');
        archivo.addEventListener('change',() =>{
            document.querySelector('#nombre_archivo').innerText = archivo.files[0].name;
        })
    </script>
@endsection
