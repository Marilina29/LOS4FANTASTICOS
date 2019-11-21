@extends('layouts.app')

@section('content')

<div>
  <div class="conjuntoUCproductos">
    <div class="">
      @foreach ($orders as $order)
        <div class="">
          <h3>{{$order->name}}</h3>
          <p>Precio: {{$order->price}}</p>
          <form class="" action="/sacarCarrito" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$order->id}}">
            <button class="botonComprar" type="submit" name="button">QUITAR</button>
          </form>
        </div>
      @endforeach
    </div>

    <a href="/lista-productos"><button class="botonComprar" type="button" name="button">AGREGAR PRODUCTOS</button></a>

    <form class="" action="#" method="post">
      {{ csrf_field() }}
      <button class="botonComprar" type="submit" name="button">COMPRAR</button>
    </form>
</div>

@endsection
