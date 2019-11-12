@extends('layouts.app')

@section('content')

  <div class="formulario formregistro">
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
      @csrf
      <div class="tituloForm">
        REGISTRATE AQUÍ
      </div>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
          @error('name')
              <div class="errores" role="alert">
                  <strong>{{ $message }}</strong>
              </div>
          @enderror



        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="Apellido">
          @error('surname')
              <div class="errores" role="alert">
                  <strong>{{ $message }}</strong>
              </div>
          @enderror


        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
          @error('email')
              <div class="errores" role="alert">
                  <strong>{{ $message }}</strong>
              </div>
          @enderror

        <input id="dni" type="integer" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" placeholder="DNI">
        @error('dni')
          <div class="errores" role="alert">
                <strong>{{ $message }}</strong>
          </div>
        @enderror

        <input id="telephone" type="integer" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" placeholder="Teléfono">
        @error('telephone')
          <div class="errores" role="alert">
                <strong>{{ $message }}</strong>
          </div>
        @enderror


        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
          @error('password')
              <div class="errores" role="alert">
                  <strong>{{ $message }}</strong>
              </div>
          @enderror


          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">



        <p class="salto"></p>
        <button class="boton" type="reset" name="button">BORRAR</button>
        <button class="boton" type="submit" name="button">ENVIAR</button>
        <a href="{{ route('login') }}"> <div class="cabecera" name="button">¿YA ESTÁS REGISTRADO? INGRESA <strong>AQUÍ</strong></div></a>
    </form>
  </div>

@endsection
