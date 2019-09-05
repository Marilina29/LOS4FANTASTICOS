<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include("head.php") ?>
<body class="">
  <?php include("menu.php") ?>
<div class="formulario">
  <div class="">
    LOGIN
  </div>
  <form action="index.php" method="post">
  <input type="email" name="e-mail" placeholder="email">
  <br>
  <input type="password" name="password" placeholder="contraseña">
  <br>
  <button type="reset" name="borrar">BORRAR</button>
  <button type="submit" name="enviar">ENVIAR</button>
<div class="atencion">
  REGISTRATE
</div>
  </form>
</div>

<?php include('footer.php') ?>
</body>

</html>
