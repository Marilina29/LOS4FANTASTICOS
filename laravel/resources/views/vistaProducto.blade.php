@extends('layouts.app')

@section('content')

<div class="grupoFicha">
    <div class="imagenProducto">
      <img src="/storage/imagenes/{{$product->img}}" alt="{{$product->name}}">
    </div>
      <div class="dataProducto">
        <h6>{{$product->name}}</h6>
        <p>{{$product->description}}</p>
              </div>
        <div class="precioFicha" >Precio: $ {{$product->price}}</div>

      <div class="">
        <a href="/lista-productos"><button class="botonComprar" type="button" name="button">VOLVER</button></a>

        <form class="" action="/agregarCarrito" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" value={{$product->id}}>
          <button class="botonComprar" type="submit" name="button">COMPRAR</button>
        </form>

        @if(Auth::user()->rol == 100)
          <div class="">
            <form class="" action="/eliminoProducto/{{$product->id}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="id" value={{$product->id}}>
              <button class="botonComprar" type="submit" name="button">ELIMINO PRODUCTO</button>
            </form>
          </div>
        @endif

      </div>
    </div>

@endsection
