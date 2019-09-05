<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
<body class="">
  <?php include("head.php") ?>
  <?php include("menu.php") ?>

<div class="formulario formregistro">
  <div class="cabecera">
    LOGIN
  </div>
  <form action="index.php" method="post">
  <input class="email" type="email" name="e-mail" placeholder="email">
  <br>
  <input class="email" type="password" name="password" placeholder="contraseña">
  <br>
  <button class="boton" type="reset" name="borrar">BORRAR</button>
  <button class="boton" type="submit" name="enviar">ENTRAR</button>
<div >
<a class="atencion" href="register.php"> REGISTRATE </a>
</div>
  </form>
</div>

<?php include('footer.php') ?>
</body>

</html>
