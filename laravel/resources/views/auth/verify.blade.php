@extends('layouts.app')

@section('content')
<div class="formulario formregistro">
  <div class="tituloForm">
    RESETEO DE CONTRASEÑA
  </div>
        <div>{{ __('Por favor verifica tu dirección de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Hemos enviado un email para resetear la contraseña.') }}
                        </div>
                    @endif

                    {{ __('Por favor verifique su correo electrónico.') }}
                    {{ __('Si no recibió el email') }}, <a href="{{ route('verification.resend') }}">{{ __('Solicítelo nuevamente aquí') }}</a>.
                </div>
            </div>
@endsection
