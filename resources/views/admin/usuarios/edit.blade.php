@extends('layouts.admin')
@section('admin')
    <form action="{{ route('usuarios.update', $user->id) }}" method="POST" class="form-admin" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1>
            Actualizar datos de {{ $user->name }}
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

        <label class="nameform" for="nombre">Nombre:</label>
        <input type="text" class="nameform" name="nombre" value="{{ $user->name }}" id="nombre" placeholder="NOMBRE">
        <label for="phone">Telefono:</label>
        <input type="number" name="phone" id="phone" value="{{ $user->phone }}"placeholder="TELEFONO">
        <label class="nameform" for="nombre">Email:</label>
        <input type="email" class="nameform" name="email" value="{{ $user->email }}" id="email"
            placeholder="EMAIL">
        <label for="role">Rol:</label>
        <input type="number" name="role" id="role" value="{{ $user->role }}"placeholder="ROL">
        <br>
        <input type="submit" id="input-crear-form" name="crear" value="GUARDAR">

    </form>
    <button class="button-crear">
        <a href="{{ route('usuarios') }}">
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
