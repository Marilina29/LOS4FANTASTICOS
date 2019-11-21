@extends('layouts.app')

@section('title')
  Lista de Productos
@endsection
@section('h1', "Lista de productos")

@section('content')
  <aside>
    <ul>
      <li><a href="/lista-productos">Todos</a></li>
      @foreach ($categories as $key => $value)
        <li><a href="/category/{{$value->id}}">{{$value->name}}</a></li>

      @endforeach
      {{-- <li><a href="/categoria/1">Collares</a></li>
      <li><a href="/categoria/2">Aros</a></li>
      <li><a href="/categoria/3">Pulseras</a></li>
      <li><a href="/categoria/4">Otros</a></li> --}}
    </ul>
  </aside>
  <div class="mainProds marginados">
    <div class="ultimasCreaciones uCProducto">
          <div class="conjuntoUCproductos">
  <ul class="listita">
        @for ($i=0; $i < count($products); $i++)
          <div class="cajaProductos">
          <a href="#"> <img class="destacadosHome" src="/storage/imagenes/{{$products[$i]->img}}" alt="IMAGEN DE PRODUCTO"> <p class="nombreDestacado" > {{$products[$i]->name}}
          <span class="precio"> {{$products[$i]->price}} </span> <br> </p>
          <a href="/vistaProducto/{{$products[$i]->id}}"> <button class="botonComprar" type="button" name="button">VER MÁS</button></a> </a></div>
        @endfor
      </ul>

        {{$products->links()}}

    </div>

  </div>
    </div>

@endsection
