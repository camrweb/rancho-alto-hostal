   @extends('layouts.app')
   @section('title', 'Galeria')
   @section('content')

      <div class="back_re">
         <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title">
                           <h2>Galería</h2>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- gallery -->
      <div class="gallery">
         <div class="container">
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

   @endsection
