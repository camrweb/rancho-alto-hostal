@extends('layouts.app')
@section('content')
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/ft_7.png" alt="First slide">
                  <div class="container">
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner2.jpg" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/banner3.jpg" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="booking_ocline">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="col-md-12">
                       <button class="book_btn" data-toggle="modal" data-target="#exampleModal">Reservar ahora</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      @if (Auth::check())
         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hace tu reserva ahora !</h5>
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
                           {{-- @foreach ($habitaciones as $habitacion)
                              <option value="{{ $habitacion->id }}">{{ $habitacion->name }}</option>
                           @endforeach --}}
                           <script>
                              let idCategoriaElem = document.getElementById('_categorias');
                              let habitacionesElem = document.getElementById('_habitaciones');
                              let idCategoria = idCategoriaElem.options[idCategoriaElem.selectIndex].value
                              let option = createElement('option')
                              option.value = idCategoria
                              option.text = idCategoria
                              habitacionesElem.add(option)
                              console.Log(idCategoria)
                           </script>
                        </select>
                     </div>
                     <!--Fecha-->
                     <div class="form-group" style="padding-top: 15px">
                        <label for="formGroupExampleInput">Check in</label>
                        <input type="date" class="form-control" id="formGroupExampleInput">
                     </div>
                     <div class="form-group" style="padding-top: 15px">
                        <label for="formGroupExampleInput">Check out</label>
                        <input type="date" class="form-control" id="formGroupExampleInput">
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
         <div class="alert alert-success">
           <span>Por favor registrate</span>
         </div>
      @endif
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>SOBRE NOSOTROS</h2>
                     <p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum. </p>
                     <a class="read_more" href="Javascript:void(0)"> Read More</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/bg.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>NUESTRA HABITACIÓN</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room1.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room2.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/room3.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end our_room -->
      <!-- gallery -->
      <div  class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>GALERÍA</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/ft_1.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/ft_5.jpeg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/ft_3.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/ft_7.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/ft_8.jpeg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery6.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery7.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery8.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gallery -->

      <!-- blog -->

      <!-- <div  class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Blog</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/blog1.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Bed Room</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/blog2.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Bed Room</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/blog3.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Bed Room</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->

      <!-- end blog -->


      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>CONTÁCTANOS</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nombre" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Telefono" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Mensaje" type="type" Message="Name"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">ENVIAR</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.3093140820656!2d-73.70810818473325!3d11.238641253563664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef4c71d84a34a97%3A0xcb5eb92f1f8e9075!2sRancho%20Alto!5e0!3m2!1ses!2sco!4v1659036178186!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->

      <!-- Script -->
      <script>
         const categorySelect = document.getElementById('_categorias') ;
         categorySelect.addEventListener('change', () => {
            let select_default = document.getElementById('select_default')
            select_default.setAttribute('disabled',true)
         })
      </script>
@endsection
