<?php
$titulo = "HOME";
$imagenes = [
  "collares" => "descarga.png",
  "pulseras" => "descarga.png",
  "aros" => "descarga.png",
  "otros" => "descarga.png"
];
$productos = [
  [
    "imagen" => "descarga.png",
    "nombre" => "Flor",
    "precio" => "250",
  ],
  [
    "imagen" => "descarga.png",
    "nombre" => "Verdis",
    "precio" => "250",
  ],
  [
    "imagen" => "descarga.png",
    "nombre" => "Black Sil",
    "precio" => "250",
  ],
  [
    "imagen" => "descarga.png",
    "nombre" => "Primavera",
    "precio" => "650",
  ],
  [
    "imagen" => "descarga.png",
    "nombre" => "Azulera",
    "precio" => "250",
  ],
  [
    "imagen" => "descarga.png",
    "nombre" => "Fusion",
    "precio" => "250",
  ]
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include("head.php") ?>
  <body>
    <?php include("menu.php") ?>
    <h1>Arte <br> para usar...</h1>

        <?php foreach ($imagenes as $key => $value): ?>
          <a class="fotos4" href="#"> <img src="<?= $value ?>" alt="IMAGEN DE ESE $value"> <p> <?= $key  ?></p> </a>
        <?php endforeach ?>


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
  </body>
</html>
