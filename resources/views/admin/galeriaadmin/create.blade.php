@extends('layouts.admin')
@section('admin')
    <form action="{{ route('galeria.store') }}" method="POST" class="form-admin"
        enctype="multipart/form-data">
        @csrf
        <h1>
            GALERIA
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


        <div class="file">
            <h3 id="nombre_archivo"></h3>
            <label for="image" class="archivo_file"><span>Subir imagen</span></label>
            <input type="file" name="image" id="image">
        </div>
        <br>
        <input type="submit" id="input-crear-form" value="GUARDAR">


    </form>
    <button class="button-crear">
        <a href="{{ route('galeria.index') }}">
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
