<?php
include_once('php/funciones.php');
$carrito = [
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


   <head>


     <?php include "php/head.php" ?>
     <link rel="stylesheet" href="css/carrito.css">
     <title></title>

   </head>
   <body>
     <?php include "php/menu.php" ?>

     <div>
       <div class="contenedor">
         <div class="contenedorarticulos">
           <div>
             <h1>Mi Carrito</h1>
           </div>
           <?php for ($i=0; $i < count($carrito) ; $i++): ?>
           <div class="desimpo">
                <div class="imagen">
                   <img src=<?= $carrito[$i]["imagen"]?> width="100px" alt="collares">
                </div>
                <div class="general">
                     <span class="desc"><?= $carrito[$i]["nombre"]?></span>
                     <span>Importe</span>
                     <br>
                     <div class="importe">
                         <div class="sumar">
                           <button class="bot" type="sumar" name="button">+</button>
                           <input class="imp" type="text" name="" value="">
                           <button class="bot" type="restar" name="button">-</button>
                         </div>
                         <div class="ftotal">
                           <p class="ptotal">Subtotal</p>
                           <p class="ptotal">1234,34</p>
                         </div>
                      </div>
                      <a class="eliminar" href="#">Eliminar</a>
                 </div>
           </div>
          <?php endfor?>
         </div>
         <div class="resumen">
           <h4>Resumen</h4>
           <div class="resumensub">
             <h2>Subtotal</h2>
             <h2>1234,55</h2>
           </div>
           <div class="resumentot">
             <h3>Total</h3>
             <h3>1234,55</h3>
           </div>
           <div class="linea">
             
           </div>
           <div class="seguir">
             <a class="aseguir" href="#">Seguir comprando</a>
             <button class="bfinalizar" type="button" name="button">FINALIZAR</button>
           </div>


         </div>
       </div>
     </div>

   </body>
 </html>
