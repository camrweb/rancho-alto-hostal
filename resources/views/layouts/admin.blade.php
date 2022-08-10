<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | RANCHO ALTO</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <!--Script-->

</head>
<body>
  <?php use App\Models\Categoria;
    $categorias=Categoria::all();?>
<div class="container">
    <nav>
      <ul>
        <li><a href="{{route('admin')}}" class="logo">
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
        <li><a href="{{route('usuarios')}}">
          <i class="fas fa-users"></i>
          <span class="nav-item">Usuarios</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
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