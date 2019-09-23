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
        <table class="cart-table">
          <tbody>
            <tr class="borde">
              <td class="class-image" rowspan="1">
                <div class="cart-image">
                  <img class="imagen" src="imagenes/collares.jpg" alt="collares">
                </div>
              </td>
              <td>
                <div class="cart-product">
                  <h4>Codigo</h4>
                  <h3>Descripcion del articulo</h3>
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
                    <h5>10</h5>
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
      </section>
      <section class="cart-sumary">

      </section>

    </section>





    </main>



  </body>
</html>
