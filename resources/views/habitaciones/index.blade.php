   @extends('layouts.app')
   @section('title', '- Habitaciones')
   @section('content')


      <div class="back_re habitaciones">
         <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title">
                           <h2>Habitaciones</h2>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- our_room -->
      <div class="our_room">
         <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                           <p class="margin_0">Disfruta de las hermosas vistas de la naturaleza.</p>
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
                                 <h3 class="card-title">{{ $habitacion->name }}</h3>
                                 <p class="card-subtitle text-muted" style="word-break: break-all"><em>{{ $habitacion->description }}</em></p>
                                 <hr>
                                 <p> $ {{ $habitacion->price }}</p>
                              </div>
                           </div>
                     </div>
                  @endforeach
               </div>
         </div>
      </div>
   @endsection
