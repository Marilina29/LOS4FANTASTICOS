<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include_once("head.php") ?>
<body class="">
  <?php include_once("menu.php") ?>

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
<a href="register.php"> <div class="cabecera">REGISTRATE </div></a>

  </form>
</div>

<?php include_once('footer.php') ?>
</body>

</html>
