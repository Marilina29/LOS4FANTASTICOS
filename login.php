<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include_once("php/head.php") ?>
<body class="">
  <?php include_once("php/menu.php") ?>

<div class="formulario formregistro">
  <div class="cabecera">
    LOGIN
  </div>
  <form action="index.php" method="post">
  <input class="email" type="email" name="email" placeholder="email">
  <br>
  <input class="email" type="password" name="pass" placeholder="contraseña">
  <br>
  <button class="boton" type="reset" name="borrar">BORRAR</button>
  <button class="boton" type="submit" name="enviar">ENTRAR</button>
<a href="register.php"> <div class="cabecera">REGISTRATE </div></a>

  </form>
</div>

<?php include_once('php/footer.php') ?>
</body>

</html>
