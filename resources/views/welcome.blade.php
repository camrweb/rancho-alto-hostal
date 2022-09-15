@extends('layouts.app')
@section('content')
        <!-- banner -->
        @include('components.flash_alert')
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/ft_7.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/ft_9.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/ft_10.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{-- <section class="banner_main">
            <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/ft_7.png" alt="First slide">
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
        </section> --}}
        <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>SOBRE NOSOTROS</h2>
                        <p>Somos una empresa que brinda hospedaje con excelente calidad a usuarios locales, nacionales e internacionales
                            contamos con talento humano altamente capacitado y hermosa vista a la naturaleza para dar a conocer nuestra
                            riqueza natural, cultural que posee nuestro hostal y puedas disfrutar de una experiencia inolvidable. </p>
                        <a class="read_more" href="{{ route('acerca-de') }}">Ver mas..</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="images/bg.png" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- our_room -->
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>NUESTRA HABITACIÓN</h2>
                        <p>Disfruta de la hermosa naturaleza que nos rodea.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($habitaciones as $habitacion)
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('storage' . '/' . $habitacion->foto) }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3> {{ $habitacion->name }}</h3>
                            <p style="word-break: break-all">{{ $habitacion->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end our_room -->
    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>GALERÍA</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($galerias as $galeria)
                    
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('storage' . '/' . $galeria->image) }}" alt="#" /></figure>
                    </div>
                </div>
                @endforeach
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



    <!-- Script -->
    <script>
        const categorySelect = document.getElementById('_categorias');
        categorySelect.addEventListener('change', () => {
            let select_default = document.getElementById('select_default')
            select_default.setAttribute('disabled', true)
        })
        // //
        // //      CHECK IN       
        // //
        //          let check_in = document.getElementById('check_in')
        //          check_in.addEventListener('change', () => {
        //          console.log('hola')
        //             let checkin_value = document.getElementById('check_in').value
        //             let checkout_value = document.getElementById('check_out').value
        //             const date1 = new Date(checkin_value);
        //             const date2 = new Date(checkout_value);
        //             const diffTime = Math.abs(date2 - date1);
        //             const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
        //             console.log(diffTime + " milliseconds");
        //             console.log(diffDays + " days");
        //          })
        // //
        // //      CHECK OUT       
        // //
        //          let check_out = document.getElementById('check_out')
        //          check_out.addEventListener('change', () => {
        //          console.log('hola')
        //             let checkin_value = document.getElementById('check_in').value
        //             let checkout_value = document.getElementById('check_out').value
        //             const date1 = new Date(checkin_value);
        //             const date2 = new Date(checkout_value);
        //             const diffTime = Math.abs(date2 - date1);
        //             const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
        //             console.log(diffTime + " milliseconds");
        //             console.log(diffDays + " days");
        //          })
    </script>
@endsection
