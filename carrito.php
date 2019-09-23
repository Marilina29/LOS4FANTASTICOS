<?php
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
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/carrito.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/62ba28ee55.js"></script>
    <title></title>
  </head>
  <body>
    <div class="container">
      <section class="titulo">
        <h1 class = "h">Carrito de compras</h1>
        <h2 class = "h">1 Producto</h2>
      </section>
    </div>
    <section class="cuerpo">
      <section class="cart-content">
        <header class="subtitulo">
          <span><i class="fas fa-shopping-cart icono"></i></span>
          <h2 class="compras">Mis Compras</h2>
        </header>
        <?php for ($i=0; $i < count($carrito) ; $i++): ?>
        <table class="cart-table">
          <tbody>
            <tr class="borde">
              <td class="class-image" rowspan="1">
                <div class="cart-image">
                  <img class="imagen" src=<?= $carrito[$i]["imagen"]?> alt="collares">
                </div>
              </td>
              <td>
                <div class="cart-product">
                  <h4><?= $carrito[$i]["nombre"]?></h4>
                  <h3>Descripcion</h3>
                </div>
              </td>
              <td>
                <div class="cart-column">
                  <h4>Cantidad</h4>
                  <div class="cart-amount">
                    <div class="number-field">
                      <button class="numero" type="number-dec" name="button">-</button>
                      <input class="numero" type="number" name="amount" value="">
                      <button class="numero" type="number-dec" name="button">+</button>
                    </div>
                    <a class="eliminar" href="#">Eliminar</a>
                  </div>
                </div>
              </td>
              <td>
                <div class="cart-column">
                  <h4>Precio</h4>
                  <div class="precio">
                    <h5><?= $carrito[$i]["precio"]?></h5>
                  </div>
                </div>
              </td>
              <td>
                <div class="cart-column">
                  <h4>Subtotal</h4>
                  <div class="cart-price">
                    <h5>20</h5>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      <?php endfor?>
      </section>
      <section class="cart-sumary">
        <div class="resumen">
          <div class="titulo">
            <h6>Resumen de la orden</p>
          </div>
          <div class="totalunidades">
            <p class="p1">Total</p>
            <p>1200</p>
          </div>
          <div class="retiro">
            <p class="p1">Tipo de envio</p>
            <p>retiro en sucursal</p>
          </div>
          <div class="botones">
            <button class="confirmar" type="button" name="button">Confirmar productos</button>
            <button class="agregar" type="button" name="button">Agregar mas productos</button>

          </div>

        </div>

      </section>

    </section>





    </main>



  </body>
</html>
