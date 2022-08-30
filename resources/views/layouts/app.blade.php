<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rancho Alto - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset ('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="images/rancho_alto_logo_2.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset ('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    <!-- Scripts -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
    <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/rancho_alto_logo_1.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('index') }}">HOGAR</a>
                              </li>
                              <li class="nav-item {{ request()->is('acerca-de') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('acerca-de') }}">ACERCA DE</a>
                              </li>
                              <li class="nav-item {{ request()->is('habitaciones') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('habitaciones') }}">HABITACIONES</a>
                              </li>
                              <li class="nav-item {{ request()->is('galeria') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('galeria') }}">GALERÍA</a>
                              </li>
                              <li class="nav-item {{ request()->is('contactanos') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('contactanos') }}">CONTÁCTENOS</a>
                              </li>
                              <li>
                                <button id="swal_Alert" class="btn btn-danger mr-2 reservar-alert" data-toggle="modal" data-target="#exampleModal">RESERVAR AHORA</button>
                             </li>
                             @if (Auth::check())
         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">RESERVA AHORA!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <!-- Nombres
                  <div class="form-group">
                     <label for="formGroupExampleInput">Identificacion</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre">
                     </div>
                     Apellidos
                     <div class="row">
                        <div class="col">
                           <input type="text" class="form-control" placeholder="Primer apellido">
                        </div>
                        <div class="col">
                           <input type="text" class="form-control" placeholder="Segundo apellido">
                        </div>
                     </div>
                     Fecha de nacimiento 
                     <div class="form-group" style="padding-top: 15px">
                        <label for="formGroupExampleInput">FECHA DE NACIMIENTO</label>
                        <input type="date" class="form-control" id="formGroupExampleInput">
                     </div>
                      Tipo de identificacion 
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">TIPO DE IDENTIFICACION</label>
                           <select class="form-control" id="exampleFormControlSelect1">
                           <option>CEDULA DE CIUDADANIA</option>
                           <option>CEDULA DE EXTRANJERIA</option>
                           <option>NIT</option>
                           </select>
                        </div>
                        <div class="form-group">
                              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="NUMERO DE DOCUMENTO">
                           </div>
                      Genero 
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">GENERO</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>FEMENINO</option>
                        <option>MASCULINO</option>
                        </select>
                     </div>
                      Numero de telefono 
                     <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="TELEFONO">
                     </div>
                      Correo 
                     <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CORREO ELECTRONICO">
                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                      </div>
                      Pais
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">PAIS</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>PAIS</option>
                        </select>
                     </div>
                      Ciudad 
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">CIUDAD</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>CIUDAD</option>
                        </select>
                     </div>
                      Codigo postal 
                     <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="CODIGO POSTAL">
                     </div>
                     Direccion 
                     <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="DIRECCION">
                     </div> -->
                     <!-- Categoria -->
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">CATEGORIA</label>
                        <select class="form-control" id="_categorias">
                           <option id="select_default">SELECCIONA</option>
                           @foreach ($categorias as $categoria) 
                              <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                           @endforeach
                        </select>
                     </div>
                     <!-- Habitaciones -->
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">HABITACIONES</label>
                        <select class="form-control" id="_habitaciones">

                        <!-- Unused Code -->
                           <!-- {{-- @foreach ($habitaciones as $habitacion)
                              <option value="{{ $habitacion->id }}">{{ $habitacion->name }}</option>
                           @endforeach --}} -->

                           <!-- Last Script Position -->

                        </select>
                     </div>
                     {{-- PersonMaxima --}}
                     <!--Fecha-->
                     <div class="row">
                        <div class="col">
                           <label for="formGroupExampleInput">Check in</label>
                           <input type="date" class="form-control" id="date-1">
                        </div>
                        <div class="col">
                           <label for="formGroupExampleInput">Check out</label>
                           <input type="date" class="form-control" id="date-2">
                        </div>
                     </div>
                     <div class="row mt-1">
                        <div class="col">
                           <button type="button" id="calcular" class="btn btn-outline-success">Calcular</button>
                        </div>
                        <div class="col" id="result">
                        </div>
                     </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Reservar</button>
               </div>
            </div>
            </div>
         </div>
         @else
         <script>
            document.getElementById("swal_Alert").addEventListener("click", () => alert("Inicia sesion para reservar por favor."));
         </script>
      @endif
                              @guest
                            @if (Route::has('login'))
                                    @auth
                                    <li>
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                    </li>
                                    @else
                                    <li>
                                        <a href="{{ route('login') }}" class="btn btn-outline-danger">ENTRAR</a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="btn btn-outline-danger ml-2 ">REGISTRATE</a>
                                    </li>
                                    @endif
                                    @endauth
                            @endif
                            @else
                            <li class="nav-item dropdown ml-2">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->role == 1)
                                 <a class="dropdown-item" href="{{ route('admin') }}">{{ __('DASHBOARD') }}</a>
                                 @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('SALIR') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                              @endguest
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>

        <main class="">
            @yield('content')
        </main>
        <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contáctanos</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Via Riohacha Km. 56, Santa Marta, Magdalena</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +57 3105113310</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> contact@ranchoalto.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Navegación</h3>
                     <ul class="link_menu">
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('index') }}">Hogar</a></li>
                        <li class="{{ request()->is('habitaciones') ? 'active' : '' }}"><a href="{{ route('habitaciones') }}">Habitaciones</a></li>
                        <li class="{{ request()->is('acerca-de') ? 'active' : '' }}"><a href="{{ route('acerca-de') }}">Acerca de</a></li>
                        <li class="{{ request()->is('galeria') ? 'active' : '' }}"><a href="{{ route('galeria') }}">Galeria</a></li>
                        <!--<li><a href="blog.html">Blog</a></li>-->
                        <li class="{{ request()->is('contactanos') ? 'active' : '' }}"><a class="{{ request()->is('contactanos') ? 'active' : '' }}" href="{{ route('contactanos') }}">Contactanos</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Boletin informativo</h3>
                     <form class="bottom_form">
                        <input class="enter" placeholder="Ingresa tu email" type="text" name="Enter your email">
                        <button class="sub_btn">suscribete</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="https://www.instagram.com/rancho_alto_/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <!--<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                        <!--<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>-->
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                        <p>
                        © 2022 Todos los derechos reservados. Diseñado por <a href="https://www.instagram.com/andres16.mr/" target="_blank"> CAMR</a>
                        <br><br>
                        Distribuido por <a href="https://www.instagram.com/andres16.mr/" target="_blank">CAMR Web</a>
                        </p>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!--Script Dashboard-->
      <script src="js/main.js"></script>

      <script>
         const url = location.href;
         let idCategoriaElem = document.getElementById('_categorias');
         let habitacionesElem = document.getElementById('_habitaciones');
         let priceCalculated = document.getElementById("result");

         idCategoriaElem.addEventListener('change', async function(){

            if (document.getElementById("personasSelect")) document.getElementById("personasSelect").remove()
            if (document.getElementById("descriptionRoom")) document.getElementById("descriptionRoom").remove()

            let idCategoria = idCategoriaElem.value;
            priceCalculated.textContent = ""
            const {data, success} = await fetch(`${url}habitaciones/${idCategoria}`).then(res => res.json());

            if(success){
               habitacionesElem.innerHTML = '';
               habitacionesElem.innerHTML += `<option id="select_default">SELECCIONA</option>`;

               data.forEach(habitacion => {
                  habitacionesElem.innerHTML += `<option value="${habitacion.id}">${habitacion.name}</option>`;
               });

            }
            
         });

         habitacionesElem.addEventListener("change", async () => {

            let nombreHabitacion = habitacionesElem.options[habitacionesElem.selectedIndex].text
            const {data, success} = await fetch(`${url}habitacion/${nombreHabitacion}`).then(res => res.json());

            if (success) {
               if (document.getElementById("personasSelect")) document.getElementById("personasSelect").remove()
               if (document.getElementById("descriptionRoom")) document.getElementById("descriptionRoom").remove()

               let selectPersonas = document.createElement("select")
               let descriptionRoom = document.createElement("p")

               descriptionRoom.setAttribute("id", "descriptionRoom")
               descriptionRoom.classList.add("mt-1", "ml-1", "mr-1") // Clases para descripcion

               selectPersonas.setAttribute("id", "personasSelect")
               selectPersonas.classList.add("form-control", "mt-4")

               let price = data[0].price
               let maxPersonas = data[0]["person-max"]
               let description = data[0].description

               descriptionRoom.innerHTML =`<blockquote class="blockquote">
                                             <p "mb-0">DESCRIPCION</p>
                                             <footer class="blockquote-footer"><cite title="Descripcion">${description}</cite></footer>
                                           </blockquote>`;

               priceCalculated.innerHTML = `El precio por noche es de: <span>${price}</span>`;

               for (let i = 1; i <= maxPersonas; i++) {
                  selectPersonas.innerHTML += `<label for="exampleFormControlSelect1" >MAXIMO DE PERSONAS</label>
                                                <br><option value=${i}>${i} personas</option>`
               }

               habitacionesElem.insertAdjacentElement("afterend", descriptionRoom)
               habitacionesElem.insertAdjacentElement("afterend", selectPersonas)
            }
         })

      let calcular = document.getElementById('calcular');

      calcular.addEventListener('click', async () => {

      let date1 = new Date(document.getElementById('date-1').value);
      let date2 = new Date(document.getElementById('date-2').value);

      let selectedRoom = habitacionesElem.options[habitacionesElem.selectedIndex].text
      const {data, success} = await fetch(`${url}habitacion/${selectedRoom}`).then(res => res.json());
      let priceSelected = data[0].price

      if(date1.getTime() && date2.getTime() && priceSelected){
         let timeDifference = date2.getTime() - date1.getTime();
         let dayDifference = Math.abs(timeDifference/(1000*3600*24));
         let priceTotal = priceSelected * dayDifference;

         priceCalculated.innerHTML = `Un total de: <span>${priceTotal}</span>
                                    <br>por <span>${dayDifference}</span> noches`;
      }

      else{
         priceCalculated.innerHTML = "por favor seleccione una fecha valida";
      }
    
      })
      </script>
      </div>
</body>
</html>
