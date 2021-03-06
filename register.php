<?php
include "init.php";

if($auth->usuarioLogueado()){
  header("Location:index.php"); exit;
}

$errores = [];
$nombreOk = "";
$apellidoOk = "";
$emailOk = "";
$errorNombre = "";
$errorApellido = "";
$errorEmail = "";
$errorPass = "";

if($_POST){
  $errores = Validator::validarRegistro($_POST);

  if(!isset($errores["name"])){
    $nombreOk = trim($_POST["name"]);
  }
  if(!isset($errores["apellido"])){
    $apellidoOk = trim($_POST["apellido"]);
  }
  if(!isset($errores["email"])){
    $emailOk = trim($_POST["email"]);
  }

  if(!$errores){
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $usuario = new Usuario($_POST, $ext);
    $db->guardarUsuario($usuario, $ext, $file);
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "img/" . $usuario->getId() . "." . $ext);
    $auth->loguearUsuario($_POST['email']);

    header("Location:index.php");exit;

    } else {
    if(!isset($errores["name"])){
      $nombreOk = trim($_POST["name"]);
    } else {
      $errorNombre = $errores["name"];
          }
    if(!isset($errores["apellido"])){
      $apellidoOk = trim($_POST["apellido"]);
    } else {
      $errorApellido = $errores["apellido"];
          }
    if(!isset($errores["email"])){
      $emailOk = trim($_POST["email"]);
    } else {
      $errorEmail = $errores["email"];
          }
    if(isset($errores["pass"])){
      $errorPass = $errores["pass"];
    }
  }
}


 ?>


<!DOCTYPE html>
<html>
<html lang="en" dir="ltr">
  <?php include_once("php/head.php") ?>
  <body>
    <?php include_once("php/menu.php") ?>
    <div class="formulario formregistro">
      <form class="" action="register.php" method="post" enctype="multipart/form-data">
        <div class="tituloForm">
          REGISTRATE AQUÍ
        </div>
          <input type="" name="name" <?php if($nombreOk != ""){echo "value = $nombreOk";}?> placeholder="Nombre" required="">
          <?php
          if(isset($errores["name"])){
           ?> <p class="errores"> <?php echo $errorNombre;}?> </p>
          <input type="" name="apellido" <?php if($apellidoOk != ""){echo "value = $apellidoOk";}?> placeholder="Apellido" required="">
          <?php
          if(isset($errores["apellido"])){
           ?> <p class="errores"> <?php echo $errorApellido;}?> </p>
          <input type="email" name="email" <?php if($emailOk != ""){echo "value = $emailOk";}?> placeholder="Email" required="">
          <?php
          if(isset($errores["email"])){
           ?> <p class="errores"> <?php echo $errorEmail;}?> </p>
          <input id="pass" type="password" name="pass" value="" placeholder="Contraseña" required="">
          <?php
          if(isset($errores["pass"])){
           ?> <p class="errores"> <?php echo $errorPass;}?> </p>
           <div class="avatar">
         <label id="avatar" for="avatar"></label>
          </div>
          <input type="file" name="avatar" value="Selecciona una imagen">
          <?php if(isset($errores["avatar"])) { ?><p class="errores"> <?php echo $errores["avatar"];} ?></p>
          <p class="salto"></p>
          <button class="boton" type="reset" name="button">BORRAR</button>
          <button class="boton" type="submit" name="button">ENVIAR</button>
          <a href="login.php"> <div class="cabecera" name="button">¿YA ESTÁS REGISTRADO? INGRESA <strong>AQUÍ</strong></div></a>
      </form>
    </div>
<?php include_once('php/footer.php') ?>
  </body>
</html>
