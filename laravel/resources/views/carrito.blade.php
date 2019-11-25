@extends('layouts.app')

@section('content')

<div class="">
  <div class="ultimasCreaciones">
    <div class="listaCarro">
      @php
        $total = 0;
      @endphp
      @foreach ($orders as $order)
        <div class="itemCarro">
          <h3>{{$order->name}}</h3>
          <img src="/storage/imagenes/{{$order->img}}" alt="">
          <p>Precio: {{$order->price}}</p>
          <form class="quitar" action="/sacarCarrito" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$order->id}}">
            <button class="botonComprar botonQuitar" type="submit" name="button">QUITAR</button>
          </form>
        </div>
        <hr>
        @php
          $total += $order->price;
        @endphp
      @endforeach
    </div>
<div class="cierreCarro">
    <div class="">
      <p>TOTAL: {{$total}}</p>
    </div>

    <a href="/lista-productos"><button class="botonComprar" type="button" name="button">AGREGAR PRODUCTOS</button></a>

    <form class="" action="#" method="post">
      {{ csrf_field() }}
      <button class="botonComprar" type="submit" name="button">COMPRAR</button>
    </form>
</div>
</div>


@endsection
