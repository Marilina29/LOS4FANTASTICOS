@extends('layouts.app')

@section('content')

<div class="contenItem">
  {{-- @foreach ($carrito as $key => $value)
    <div class="">
      <ul>
        @foreach ($carrito[$key] as $elements)
          @foreach ($elements as $item)
            <li>{{$item->name}}</li>
          @endforeach
        @endforeach
      </ul>
    </div>
  @endforeach --}}
  <div class="baseItem listaCompra">

    @foreach ($orders as $items)
      @php
        $total=0;
      @endphp
      <h3 class="numCompra">N° de compra: {{$items[0]->order_number}}</h3>
<div class="conjComprados">
        @foreach ($items as $item)
          @php
            $total+=$item->price * $item->cant;
          @endphp
          <div class="prodComprado"><img class="imagProdComprado" src="/storage/imagenes/{{$item->img}}" alt="">
          </div>
          <div class="dataComprado">
            Producto: {{$item->name}}
            <br>Precio: {{$item->price}}
            <br>Cantidad: {{$item->cant}}



          </div>

        @endforeach
        <div class="dataComprandoTotal">
          Total: {{$total}}
        </div>
</div>
<hr>


    @endforeach
</div>
  </div>

</div>

@endsection
