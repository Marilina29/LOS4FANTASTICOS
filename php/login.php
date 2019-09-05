<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include("head.php") ?>
<body class="">
  <?php include("menu.php") ?>
<div class="formulario">
  <div class="login">
    LOGIN
  </div>
  <form action="index.php" method="post">
  <input class="email" type="email" name="e-mail" placeholder="email">
  <br>
  <input class="email" type="password" name="password" placeholder="contraseña">
  <br>
  <button class="bu" type="reset" name="borrar">BORRAR</button>
  <button class="bu" type="submit" name="enviar">ENVIAR</button>
<div class="atencion">
  REGISTRATE
</div>
  </form>
</div>

<?php include('footer.php') ?>
</body>

</html>
