<?php
include_once("init.php");

if($auth->usuarioLogueado()){
  header("Location:index.php"); exit;
}

$errores = [];
$errorEmail = "";
$errorPass = "";
$emailOk="";

if($_POST){

  $errores = validator::validarLogin($_POST);

  if(!$errores){
    $auth->loguearUsuario();
    header("Location:index.php"); exit;
  } else {
    if(isset($errores["email"])){
      $errorEmail = $errores["email"];
    } else {
      $emailOk=$_POST["email"];
    }
    if(isset($errores["pass"])){
      $errorPass = $errores["pass"];
    }
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include_once("head.php") ?>
<body class="">
  <?php include_once("menu.php") ?>

<div class="formulario formregistro">
  <div class="tituloForm">
    INGRESA CON TUS DATOS
  </div>
  <form action="login.php" method="post">
    <input type="email" name="email" <?php if($emailOk != ""){echo "value = $emailOk";}?> placeholder="Email" required="">
    <?php
    if(isset($errores["email"])){
     ?> <p class="errores"> <?php echo $errorEmail;}?> </p>
     <input id="pass" type="password" name="pass" value="" placeholder="Contraseña" required="">
     <?php
     if(isset($errores["pass"])){
      ?> <p class="errores"> <?php echo $errorPass;}?> </p>
  <button class="boton" type="reset" name="borrar">BORRAR</button>
  <button class="boton" type="submit" name="enviar">ENTRAR</button>
<div>
  <input type="checkbox" name="rememberMe" class="rememberMe" id="rememberMe">
<label for="rememberMe" class="email">Recordarme</label>
</div>
<a href="register.php"> <div class="cabecera">¿AÚN NO ESTÁS REGISTRADO?</div></a>

  </form>
</div>

<?php include_once('footer.php') ?>
</body>

</html>
