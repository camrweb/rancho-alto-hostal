@extends('layouts.app')
@section('title', '- Contactanos')
@section('content')

<div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Contáctanos</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               @include('components.flash_alert')
               <div class="col-md-6">
                  <form id="request" action="{{ route('form.contact') }}" method="POST" class="main_form">
                     @csrf
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nombre" type="type" name="name" required>
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="email" name="email" required>
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Telefono" type="number" name="telefono" required>
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Mensaje" type="type" name="message" required></textarea>
                        </div>
                        <div class="col-md-12">
                           <button type="submit" class="send_btn">ENVIAR</button>
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

@endsection