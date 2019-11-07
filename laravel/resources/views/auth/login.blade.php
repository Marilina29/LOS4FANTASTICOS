@extends('layouts.app')

@section('content')
  <div class="formulario formregistro">
    <div class="tituloForm">
      INGRESA CON TUS DATOS
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus placeholder="Email">
        @error('email')
            <div class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror

       <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
         @error('password')
             <div class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </div>
         @enderror

         <div>

           <button class="boton" type="reset" name="borrar">BORRAR</button>
           <button class="boton" type="submit" name="enviar">ENTRAR</button>
           <div class="rememberMe">
          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label for="remember" class="email">Recordarme</label>
          </div>

        </div>
  <a href="{{ route('register') }}"> <div class="cabecera">¿AÚN NO ESTÁS REGISTRADO?</div></a>
  <div>
  @if (Route::has('password.request'))
      <a href="{{ route('password.request') }}">
          {{ __('¿Olvidaste tu contraseña?') }}
      </a>
  @endif
    </div>
  </div>
</form>
@endsection
