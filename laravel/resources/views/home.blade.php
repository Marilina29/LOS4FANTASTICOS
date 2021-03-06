@extends('layouts.app')

@section('content')

<h1>Arte <br> para usar...</h1>


  <!-- categorias del shop -->
    <div class="mainHome marginados">
      <div class="grupoCategorias">

          <div class="categorias">
              <a href="/category/{{1}}"> <img class="fotos4" src="imagenes/collares.jpg" alt="collares"><img class="fotoCatMobile" src="imagenes/collares-mobile.jpg" alt="collares">
              <p>
            collares</p> </a>
          </div>
          <div class="categorias">
              <a href="/category/{{2}}"> <img class="fotos4" src="imagenes/pulseras.jpg" alt="pulseras"><img class="fotoCatMobile" src="imagenes/pulseras-mobile.jpg" alt="pulseras">
              <p>
            pulseras</p> </a>
          </div>
          <div class="categorias">
              <a href="/category/{{3}}"> <img class="fotos4" src="imagenes/aros.jpg" alt="aros"><img class="fotoCatMobile" src="imagenes/aros-mobile.jpg" alt="aros">
              <p>
            aros</p> </a>
          </div>
          <div class="categorias">
              <a href="/category/{{4}}"> <img class="fotos4" src="imagenes/otros.jpg" alt="otros"><img class="fotoCatMobile" src="imagenes/otros-mobile.jpg" alt="otros">
              <p>
            otros</p> </a>
          </div>
      </div>
    </div>
    <div class="banda">
      <div class="textoHome">
        <p>Todas las cuentas de vidrio de GlassBeat fueron creadas artesanalmente con vidrio de murano, soplete y en algunos casos de oro o plata.<br>
        Cada pieza es especial y única, por este motivo puede haber variaciones entre las imagenes publicadas y la pieza real, aunque siempre conservaran su escencia y características principales.</p>
      </div>
    <!-- ultimas creaciones -->
    <div class="ultimasCreaciones">
      <h2>Últimas creaciones</h2>
  <div class="conjuntoUC">
    @for ($i=0; $i < 6; $i++)
      <div class="cajita">
      <a href="/vistaProducto/{{$products[$i]->id}}"> <img class="destacadosHome" src="/storage/imagenes/{{$products[$i]->img}}" alt="IMAGEN DE PRODUCTO"> <p class="nombreDestacado" > {{$products[$i]->name}}
      <span class="precio"> {{$products[$i]->price}} </span> <br> </p>
      <button class="botonComprar" type="button" name="button">VER MÁS</button> </a></div>
    @endfor

   </div>
    </div>
    <div id="envios" class="envios">
      <h2>Envíos</h2>
      <p class="marginados">Tu pedido puede ser recibido por cualquier persona mayor de 18 años que se encuentre en el domicilio registrado. De no encontrarse nadie en el momento de la  entrega, el correo dejara un aviso de visita. Si necesitas reprogramar la entrega,  podés comunicarte con Andreani al 0810-122-3000. Recordá tener a mano el número  de guía enviado por mail.</p>
    </div>
</div>
<div >
  <img class="fondoCont" src="imagenes/fondo1024.jpg" alt="">
</div>
@endsection
