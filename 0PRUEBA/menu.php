<?php
if(isset($_COOKIE['email'])){
  $auth->loguearUsuario($_COOKIE['email']);
}
if($auth->usuarioLogueado()){
    $usuario = $json->buscarUsuarioPorMail($_SESSION['email']);

} else {
  $usuario = "";
}
 ?>
<header>
  <a class="logo" href="index.php"> <img src="imagenes/glassBeat-logo.png" width="150" height="50"  alt="ACA VA EL LOGO"> </a>
  <ul class="ulheader">
    <li class="liheader"> <a class="aheader" href="shop.php"> SHOP </a> </li>
    <li class="liheader"> <a class="aheader" href="historia.php"> HISTORIA </a> </li>
    <li class="liheader"> <a class="aheader" href="mailto:marilina_29@hotmail.com"> CONTACTO </a> </li>
    <li class="liheader"> <a class="aheader" href="index.php#envios"> ENVIOS </a> </li>
  </ul>

  <ul class="uliconos">
    <li class="naviconos"> <a href=<?php if($auth->usuarioLogueado()){ echo "perfil.php";} else { echo "login.php"; } ?>> <?php if($auth->usuarioLogueado()){?> <img class="imgPerfil" src="<?= $imagenPerfil?> "> <?php } else { ?>
      <i class="colorb fas fa-user-circle"> <?php } ?> </i></a>
      <ul class="dropdown">
                  <li><a class="logs" href=<?php if($auth->usuarioLogueado()){ echo "perfil.php";} else { echo "login.php"; } ?>><?php if($auth->usuarioLogueado()){ echo "Perfil";} else { echo "Ingresar"; } ?></a></li>
                  <li><a class="logs" href="<?php if($auth->usuarioLogueado()){ echo "logout.php";} else { echo "register.php"; } ?>"><?php if($auth->usuarioLogueado()){ echo "Salir";} else { echo "Registrarse"; } ?></a></li>
              </ul>
    </li>
    <li class="naviconos"> <a href="buscar.php"><i class="colorb fas fa-search"></i></a> </li>
    <li class="naviconos"> <a href="carrito.php"><i class="colorb fas fa-shopping-bag"></i></a> </li>
    <li class="navbar"> <a href="#menu"><i class="fas fa-bars"></i></i></a> </li>
  </ul>
</header>
