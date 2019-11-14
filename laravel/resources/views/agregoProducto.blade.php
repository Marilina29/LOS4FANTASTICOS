@extends('layouts.app')

@section('content')
<div class="formulario formregistro">
  <form class="" action="/agregoProducto" method="post"  enctype="multipart/form-data">
    @csrf
    <div class="tituloForm">
      AGREGAR PRODUCTO
    </div>
    <div class="">
      <input type="text" name="name" placeholder="Nombre" required="">
    </div>
    <div class="">
      <input type="text" name="description" value="" placeholder="Descripción" required="">
    </div>
    <div class="">
      <input type="text" name="color" value="" placeholder="Color" required="">
    </div>
    <div class="">
      <input type="text" name="code" value="" placeholder="Código" required="">
    </div>
    <div class="">
      <input type="number" step="0.01" name="price" value="" placeholder="Precio" required="">
    </div>
    <div>
        <label>Categoría</label>
          <select name="category">
            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
    </div>
    <div>
        <label>Estilo</label>
          <select name="style">
            @foreach ($styles as $style)
              <option value="{{$style->id}}">{{$style->name}}</option>
            @endforeach
          </select>
    </div>
    <div class="">
      <input type="file" name="img" value="">
  </div>

  <button class="boton" type="submit" name="button">SUBIR</button>

  </form>
</div>

@endsection
