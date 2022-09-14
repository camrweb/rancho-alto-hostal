@extends('layouts.app')
@section('title', '- Perfil')
@section('content')
   <link rel="stylesheet" href="{{ asset('css/user_perfil.css') }}">

   <div class="back_re">
      <div class="container">
         <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>PERFIL</h2>
                  </div>
               </div>
         </div>
      </div>
   </div>
   <!--  details -->
   <div class="perfil">
      @include('components.flash_alert')
      <div class="datos">
         <div class="details">
               <h3 class="tittle_details">NOMBRE</h3>
               <h5>{{ auth()->user()->name }}</h5>
               <hr>
         </div>
         <div class="details">
               <h3 class="tittle_details">TELEFONO</h3>
               <h5>{{ auth()->user()->phone }}</h5>
               <hr>
         </div>
         <div class="details">
               <h3 class="tittle_details">EMAIL</h3>
               <h5>{{ auth()->user()->email }}</h5>
               <hr>
         </div>
      </div>
      <div class="acciones">
         <button type="button" class="edit_user" data-toggle="modal" data-target="#modaledit"{{ auth()->id() }}><b>ACTUALIZAR DATOS</b></button>
         <br>
         {{-- <button class="pass_user" data-toggle="modal" data-target="#modalpass"{{ auth()->id() }}><b>ACTUALIZAR CONTRASEÑA</b></button> --}}
      </div>
   </div>

   <!-- Modal edit -->
   <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR DATOS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="{{ route('perfil.update', auth()->id()) }}" method="POST">
                  @csrf
                  @method('PUT')
               <div class="modal-body">
                     <div class="form-group">
                        <div class="form-group">
                           <label for="formGroupExampleInput">Nombre</label>
                           <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{ auth()->user()->name }}">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-group">
                           <label for="formGroupExampleInput">Telefono</label>
                           <input type="number" name="phone" class="form-control" id="formGroupExampleInput" value="{{ auth()->user()->phone }}">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ auth()->user()->email }}" aria-describedby="emailHelp" >
                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                     </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Actualizar datos</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <!-- Modal pass -->
   <div class="modal fade" id="modalpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR CONTRASEÑA</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="{{ route('perfil.update.password', auth()->id() ) }}" method="POST">
                  @csrf
                  @method('PUT')
               <div class="modal-body">
                     <div class="form-group">
                        <div class="form-group">
                           <label for="old_password">CONTRASEÑA ACTUAL</label>
                           <input type="password" name="old_password" class="form-control" id="old_password" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-group">
                           <label for="password">NUEVA CONTRASEÑA</label>
                           <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="password_confirm">CONFIRMAR CONTRASEÑA</label>
                        <input type="password" name="confirm_password" class="form-control" id="password_confirm" aria-describedby="emailHelp" required>
                     </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Actualizar contraseña</button>
               </div>
            </form>
         </div>
      </div>
   </div>


@endsection
