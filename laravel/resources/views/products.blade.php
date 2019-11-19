@extends('layouts.app')

@section('title')
  Lista de Productos
@endsection
@section('h1', "Lista de productos")

@section('content')
  <aside>
    <ul>
      <li><a href="#">Collares</a></li>
      <li><a href="#">Aros</a></li>
      <li><a href="#">Pulseras</a></li>
      <li><a href="#">Otros</a></li>
    </ul>
  </aside>
  <div class="mainProds marginados">
    <div class="ultimasCreaciones uCProducto">
          <div class="conjuntoUCproductos">
  <ul class="listita">
        @for ($i=0; $i < count($products); $i++)
          <div class="cajaProductos">
          <a href="#"> <img class="destacadosHome" src="imagenes/{{$products[$i]->img}}" alt="IMAGEN DE PRODUCTO"> <p class="nombreDestacado" > {{$products[$i]->name}}
          <span class="precio"> {{$products[$i]->price}} </span> <br> </p>
          <button class="botonComprar" type="button" name="button">COMPRAR</button> </a></div>
        @endfor
      </ul>
    </div>

  </div>
    </div>

@endsection
