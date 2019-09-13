<?php
include_once("php/funciones.php");
$errores = [];
$errorEmail = "";
$errorPass = "";

if($_POST){

  $errores = validarLogin($_POST);

  if(!$errores){
    loguearUsuario();
    header("Location:index.php"); exit;
  } else {
    if(isset($errores["email"])){
      $errorEmail = $errores["email"];
          }
    if(isset($errores["pass"])){
      $errorPass = $errores["pass"];
    }
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include_once("php/head.php") ?>
<body class="">
  <?php include_once("php/menu.php") ?>

<div class="formulario formregistro">
  <div class="cabecera">
    LOGIN
  </div>
  <form action="login.php" method="post">
  <input class="email" type="email" name="email" placeholder="email">
  <?php
  if(isset($errores["email"])){
   ?> <p class="errores"> <?php echo $errorEmail;}?> </p>
  <input class="email" type="password" name="pass" placeholder="contraseña">
  <?php
  if(isset($errores["pass"])){
   ?> <p class="errores" <?php echo $errorPass;}?> </p>
  <button class="boton" type="reset" name="borrar">BORRAR</button>
  <button class="boton" type="submit" name="enviar">ENTRAR</button>
<a href="register.php"> <div class="cabecera">REGISTRATE </div></a>

  </form>
</div>

<?php include_once('php/footer.php') ?>
</body>

</html>
