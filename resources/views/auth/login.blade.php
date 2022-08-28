@extends('layouts.app')

@section('content')
<div class="container" style="height: auto;" mt-10>
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <form class="form" method="POST" action="{{ route('login') }}">
          @csrf
  
          <div class="card card-login card-hidden mb-3">
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title"><strong>{{ __('Login') }}</strong></h4>
              <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <input type="email" name="email" class="form-control" placeholder="{{ __('Email') }}"required>
                </div>
                @if ($errors->has('email'))
                  <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                    <strong>{{ $errors->first('email') }}</strong>
                  </div>
                @endif
              </div>
              <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña') }}"required>
                </div>
                @if ($errors->has('password'))
                  <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                    <strong>{{ $errors->first('password') }}</strong>
                  </div>
                @endif
              </div>
            </div>
            <div class="card-footer justify-content-center">
                <div class="col text-center">
                    <button type="submit" class="btn btn-outline-danger">{{ __('ENTRAR') }}</button>
                    <a href="{{ route('register') }}" class="text-black ">
                        <small>{{ __('Crea tu cuenta') }}</small>
                    </a>
                </div>
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col-6">
              @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="text-light">
                      <small>{{ __('Forgot password?') }}</small>
                  </a>
              @endif
          </div>
          <div class="col-6 text-right">
              <a href="{{ route('register') }}" class="text-black">
                  <small>{{ __('Crea tu cuenta') }}</small>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href="">Why do I have this issue?</a>'
    })
  </script>
@endsection
