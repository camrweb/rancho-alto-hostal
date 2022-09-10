<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | RANCHO ALTO</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <!-- Font Awesome Cdn Link -->
  
  <!-- fevicon -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
  <link rel="icon" href="{{ asset('images/rancho_alto_logo_2.png') }}" type="image/gif" />
  {{-- Google Material Icons --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
  {{-- Google Material Icons Outlined --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
  {{-- Google Material Icons Two Tone --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Two+Tone">
  {{-- Google Material Icons Rounded --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Round">
  {{-- Google Material Icons Sharp --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Sharp">
  
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <!--Script-->

</head>
<body>
  <?php use App\Models\Categoria;
    $categorias=Categoria::all();?>
<div class="container">
    <nav>
      <ul>
        <li><a href="{{route('admin.dashboard')}}" class="logo">
          <img src="{{ asset('images/rancho_alto_logo_1.png') }}">
          <span class="nav-item">{{ Auth::user()->name }}</span>
        </a></li>
        <li class="init"><a href="{{ route('categorias') }}">
        <i class="fas fa-align-center"></i>
          <span class="nav-item">Categorias</span>
        </a> 
        </li>       
        <li><a href="#" id="rooms-menu">
          <i class="fas fa-person-booth"></i>
          <span class="nav-item">Habitaciones</span>
        </a>
          <ul class="hidden rooms-submenu" id="rooms-submenu">
            @foreach ($categorias as $categoria)
            <li><a href="/admin/habitaciones/{{$categoria->name}}">
              <i class="fas fa-bed"></i>
              <span class="nav-item">{{ $categoria->name }}</span>
            </a></li>
            @endforeach
          </ul>
        </li>


        <li><a href="{{route('reservas')}}">
          <i class="fas fa-laptop-code"></i>
          <span class="nav-item">Reservas</span>
        </a></li>
        <li><a href="{{route('galeria.index')}}">
          <i class="fas fa-images"></i>
          <span class="nav-item">Galeria</span>
        </a></li>
        <li><a href="{{route('usuarios')}}">
          <i class="fas fa-users"></i>
          <span class="nav-item">Usuarios</span>
        </a></li>
        <li><a href="{{ route('index') }}" class="home">
          <i class="fas fa-home"></i>
          <span class="nav-item">Pagina</span>
        </a></li>
        <li><a href="{{ route('logout') }}" class="logout" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </ul>
    </nav>
    <main class="">
      @yield('admin')
    </main>

    <!--Script-->
    <script src="{{ asset('js/admin.js') }}"></script>
    

  </body>
</html>