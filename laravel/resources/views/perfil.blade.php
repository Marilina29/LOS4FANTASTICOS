@extends('layouts.app')

@section('content')

<div>
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
  <div class="">

    @foreach ($orders as $items)
      <h3>N° de compra: {{$items[0]->order_number}}</h3>
      <ul>
        @foreach ($items as $item)
          <li>Nombre de Producto: {{$item->name}}</li>
        @endforeach
      </ul>
    @endforeach

  </div>

</div>

@endsection
