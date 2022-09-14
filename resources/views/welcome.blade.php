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
                        <a class="read_more" href="Javascript:void(0)"> Read More</a>
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
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="images/room1.jpg" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="images/room2.jpg" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="images/room3.jpg" alt="#" /></figure>
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
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="images/ft_1.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="images/ft_5.jpeg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="images/ft_3.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="images/ft_7.png" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="images/ft_8.jpeg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="images/gallery6.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="images/gallery7.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="images/gallery8.jpg" alt="#" /></figure>
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
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.3093140820656!2d-73.70810818473325!3d11.238641253563664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef4c71d84a34a97%3A0xcb5eb92f1f8e9075!2sRancho%20Alto!5e0!3m2!1ses!2sco!4v1659036178186!5m2!1ses!2sco"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

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
