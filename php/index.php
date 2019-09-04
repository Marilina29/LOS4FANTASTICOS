<?php
$titulo = "HOME";
$imagenes = [
  "collares" => "../imagenes/collares.jpg",
  "pulseras" => "../imagenes/pulseras.jpg",
  "aros" => "../imagenes/aros.jpg",
  "otros" => "../imagenes/otros.jpg"
];
$productos = [
  [
    "imagen" => "../imagenes/prod_1-flor.jpg",
    "nombre" => "Flor",
    "precio" => "250",
  ],
  [
    "imagen" => "../imagenes/prod_2-verdis.jpg",
    "nombre" => "Verdis",
    "precio" => "250",
  ],
  [
    "imagen" => "../imagenes/prod_3-blackSil.jpg",
    "nombre" => "Black Sil",
    "precio" => "250",
  ],
  [
    "imagen" => "../imagenes/prod_4-primavera.jpg",
    "nombre" => "Primavera",
    "precio" => "650",
  ],
  [
    "imagen" => "../imagenes/prod_5-silverSky.jpg",
    "nombre" => "Azulera",
    "precio" => "250",
  ],
  [
    "imagen" => "../imagenes/prod_6-.jpg",
    "nombre" => "Fusion",
    "precio" => "250",
  ]
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include("head.php") ?>
  <body>
    <div class="contenedor">
      <?php include("menu.php") ?>
      <h1>Arte <br> para usar...</h1>
  <div class="grupoCategorias">
      <?php foreach ($imagenes as $key => $value): ?>
            <div class="fotosCategorias"><a class="fotos4" href="#"> <img src="<?= $value ?>" alt="IMAGEN DE ESE $value"> <p> <?= $key  ?></p> </a></div>
          <?php endforeach ?>
  </div>

      <div class="">
        <p>Todas las cuentas de vidrio de GlassBeat fueron creadas artesanalmente con vidrio de murano, soplete y en algunos casos de oro o plata.</p>
        <p>Cada pieza es especial y única, por este motivo puede haber variaciones entre las imagenes publicadas y la pieza real, aunque siempre conservaran su escencia y características principales.</p>
      </div>
      <div class="">
        <h2>Últimas creaciones</h2>
        <div class="">
          <?php for ($i=0; $i < 6 ; $i++): ?>
            <a href="#"> <img src="<?= $productos[$i]["imagen"] ?>" alt="IMAGEN DE PRODUCTO"> <p><?= $productos[$i]["nombre"] . " " . $productos[$i]["precio"] ?> </p> </a>
            <a href="#"> <button type="button" name="button">COMPRAR</button> </a>
          <?php endfor ?>
        </div>
      </div>
      <div class="">
        <h2>Envíos</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <?php include("footer.php") ?>

    </div>
  </body>
</html>
