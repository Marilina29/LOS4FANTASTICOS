<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
      <meta charset="utf-8">
      <title>REGISTRO</title>
</head>
  <body>
    <?php include("head.php") ?>
    <?php include("menu.php") ?>



<div class="formulario formregistro">
  <form class="" action="" method="post">

      <div class="cabecera">
        REGISTRO
      </div>

    <input type="" name="nombre" value="" placeholder="nombre" required="">

      <input type="" name="apellido" value="" placeholder="apellido" required="">


        <input type="email" name="email" value="" placeholder="email" required="">


        <input id="contraseña" type="password" name="contraseña" value="" placeholder="contraseña" required="">
        <p class="salto"></p>

        <button class="boton" type="reset" name="button">BORRAR</button>
        <button class="boton" type="submit" name="button">ENVIAR</button>

  </form>
</div>

<?php include('footer.php') ?>

  </body>
</html>
