@extends('layouts.app')

@section('content')
<div class="contenItem">
  <div class="baseCarrito">
    <div>
      @php
        $total = 0;
      @endphp
      <table>

        <tr class="itemCarro">
          <td class="tdImagen">Imagen</td>
          <td class="tdNombre"> Producto</td>
          <td class="tdPrecio1">Precio</td>
          <td class="tdCantidad">Cantidad</td>

          <td class="tdPrecio">Total</td>
        </tr>

        @foreach ($orders as $order)
        <tr class="itemCarro">
          <td class="tdImagen"><img src="/storage/imagenes/{{$order->img}}" alt=""></td>
          <td class="tdNombre"> <h3>{{$order->name}}</h3></td>
          <td class="tdPrecio1">$ {{$order->price}}</td>
          <td class="tdCantidad">

          <form class="" action="/sacarCarrito" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$order->id}}">
            <button class="eliminoSumo" type="submit" name="button">-</button>
          </form>

          {{$order->cant}}

          <form class="" action="/masUno" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value={{$order->id}}>
            <button class="eliminoSumo" type="submit" name="button">+</button>
          </form>

        </td>

          <td class="tdPrecio">$ {{$order->price}}</td>

        </tr>
          @php
            $total += $order->price;
          @endphp
        @endforeach
        <tr>
          <td class="cierreCarro">
            TOTAL: {{$total}}
          </td>
        </tr>
      <tr>
        <td class="finCarrito">
          <a href="/lista-productos"><button class="finalCarro" type="button" name="button">SEGUIR COMPRANDO</button></a>
          <form class="" action="/cartclose" method="post">
            @csrf
            <button class="finalCarro" type="submit" name="button">PAGAR</button>
          </form>
        </td>
        </tr>
      </table>
      
    </div>
  </div>
</div>
@endsection
