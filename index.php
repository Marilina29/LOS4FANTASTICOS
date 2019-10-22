<?php
include "init.php";

$productos = [
  [
    "imagen" => "imagenes/prod_1-flor.jpg",
    "nombre" => "Flor",
    "precio" => "250",
  ],
  [
    "imagen" => "imagenes/prod_2-verdis.jpg",
    "nombre" => "Verdis",
    "precio" => "250",
  ],
  [
    "imagen" => "imagenes/prod_3-blackSil.jpg",
    "nombre" => "Black Sil",
    "precio" => "250",
  ],
  [
    "imagen" => "imagenes/prod_4-primavera.jpg",
    "nombre" => "Primavera",
    "precio" => "650",
  ],
  [
    "imagen" => "imagenes/prod_5-azulera.jpg",
    "nombre" => "Azulera",
    "precio" => "250",
  ],
  [
    "imagen" => "imagenes/prod_6-fusion.jpg",
    "nombre" => "Fusion",
    "precio" => "250",
  ]
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once("php/head.php") ?>

  <body>
    <!-- header / menu -->
    <?php include_once("php/menu.php") ?>
    <!-- aca empieza el contenido -->
  <h1>Arte <br> para usar...</h1>


    <!-- categorias del shop -->
      <div class="mainHome marginados">
        <div class="grupoCategorias">

            <div class="categorias">
                <a href="#"> <img class="fotos4" src="imagenes/collares.jpg" alt="collares"><img class="fotoCatMobile" src="imagenes/collares-mobile.jpg" alt="collares">
                <p>
              collares</p> </a>
            </div>
            <div class="categorias">
                <a href="#"> <img class="fotos4" src="imagenes/pulseras.jpg" alt="pulseras"><img class="fotoCatMobile" src="imagenes/pulseras-mobile.jpg" alt="pulseras">
                <p>
              pulseras</p> </a>
            </div>
            <div class="categorias">
                <a href="#"> <img class="fotos4" src="imagenes/aros.jpg" alt="aros"><img class="fotoCatMobile" src="imagenes/aros-mobile.jpg" alt="aros">
                <p>
              aros</p> </a>
            </div>
            <div class="categorias">
                <a href="#"> <img class="fotos4" src="imagenes/otros.jpg" alt="otros"><img class="fotoCatMobile" src="imagenes/otros-mobile.jpg" alt="otros">
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
      <!-- este es un destacado -->
      <?php for ($i=0; $i < 6 ; $i++): ?>
        <div class="cajita">
        <a href="#"> <img class="destacadosHome" src="<?= $productos[$i]["imagen"] ?>" alt="IMAGEN DE PRODUCTO"> <p class="nombreDestacado" ><?= $productos[$i]["nombre"] . " "?>
        <span class="precio"> <?= $productos[$i]["precio"] ?> </span> <br> </p>
        <button class="botonComprar" type="button" name="button">COMPRAR</button> </a></div>
      <?php endfor ?>
    </div>
      </div>
      <div id="envios" class="envios">
        <h2>Envíos</h2>
        <p class="marginados">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
  </div>
  <div >
    <img class="fondoCont" src="imagenes/fondo1024.jpg" alt="">
  </div>
  <!-- footer -->
  <?php include_once('php/footer.php') ?>
  </body>
</html>
