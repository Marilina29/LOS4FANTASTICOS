@extends('layouts.app')

@section('content')

<div>
  <div class="conjuntoUCproductos">
    <div class="imagenProducto">
      <img src="/storage/imagenes/{{$product->img}}" alt="" id=imgficha>
    </div>
    <div class="infoProducto">
      <div class="">
        <h3>{{$product->name}}</h3>
        <p>{{$product->description}}</p>
        <p>Precio: {{$product->price}}</p>
      </div>
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
  </div>
</div>

@endsection
