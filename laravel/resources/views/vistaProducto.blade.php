@extends('layouts.app')

@section('content')
<div class="contenItem">
      <a href="/lista-productos"><button class="cerrarItem" type="button" name="button"><i class="fas fa-times"></i></button></a>
  <div class="baseItem">
  <div class="imagItem">
    <img src="/storage/imagenes/{{$product->img}}" alt="{{$product->name}}">
  </div>
  <div class="imagItem">
    <h6>{{$product->name}}</h6>
    <hr>
    <div class="descrItem">
      <p>{{$product->description}}</p>
    </div>
  </div>
  <div class="precioItem">
    Precio: $ {{$product->price}}
  </div>
  </div>
  <div class="botSumarItem">
    <form class="" action="/agregarCarrito" method="post">
      @csrf
      <input type="hidden" name="id" value={{$product->id}}>
      <button class="sumarItem" type="submit" name="button">AGREGAR AL CARRITO</button>
    </form>
  </div>
</div>
<div class="botSumarItem">
  @if(Auth::user()->rol == 100)
      <form class="" action="/eliminoProducto/{{$product->id}}" method="post">
        @csrf
        <input type="hidden" name="id" value={{$product->id}}>
        <button class="admin" type="submit" name="button">ELIMINO PRODUCTO</button>
      </form>

      <a href="/agregoProducto">
        <button class="admin" type="submit" name="button">AGREGAR PRODUCTO</button>
      </a>
  @endif
</div>
@endsection
