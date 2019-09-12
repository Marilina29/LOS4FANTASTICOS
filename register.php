<?php
include_once("php/funciones.php");
$errores = [];
$nombreOk = "";
$apellidoOk = "";
$emailOk = "";
$errorNombre = "";
$errorApellido = "";
$errorEmail = "";
$errorPass = "";

if($_POST){

  //tenemos que detectar errores y mostrarlos al usuario.
  $errores = validarRegistro($_POST);

  if(!isset($errores["name"])){
    $nombreOk = trim($_POST["name"]);
  }
  if(!isset($errores["apellido"])){
    $apellidoOk = trim($_POST["apellido"]);
  }
  if(!isset($errores["email"])){
    $emailOk = trim($_POST["email"]);
  }

  //Si no hay errores;
  if(!$errores){
    // Crear un usuario
    $usuario = armarUsuario();

    //Guardarlo en alguna parte
    guardarUsuario($usuario);

    //Subir la imagen de perfil

    //Auto Loguear usuario (Opcional);

    //Redirigirlo a página Exito;
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
      <form class="" action="register.php" method="post">
        <div class="cabecera">
        REGISTRO
        </div>
          <input type="" name="name" value="" placeholder=<?php if($nombreOk==""){echo "Nombre";}else{echo $nombreOk;}?> required="">
          <?php
          if(isset($errores["name"])){
           ?> <p class="errores"> <?php echo $errorNombre;}?> </p>
          <input type="" name="apellido" value="" placeholder=<?php if($apellidoOk==""){echo "Apellido";} else{echo $apellidoOk;}?> required="">
          <?php
          if(isset($errores["apellido"])){
           ?> <p class="errores"> <?php echo $errorApellido;}?> </p>
          <input type="email" name="email" value="" placeholder=<?php if($emailOk==""){echo "Email";} else{echo $emailOk;}?> required="">
          <?php
          if(isset($errores["email"])){
           ?> <p class="errores"> <?php echo $errorEmail;}?> </p>
          <input id="pass" type="password" name="pass" value="" placeholder="Contraseña" required="">
          <?php
          if(isset($errores["pass"])){
           ?> <p class="errores"> <?php echo $errorPass;}?> </p>
          <p class="salto"></p>
          <button class="boton" type="reset" name="button">BORRAR</button>
          <button class="boton" type="submit" name="button">ENVIAR</button>
      </form>
    </div>
<?php include_once('php/footer.php') ?>
  </body>
</html>
