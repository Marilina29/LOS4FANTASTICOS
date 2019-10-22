<?php

/**
 *
 */
class Auth
{

  function __construct()
  {
    session_start();
  }

  public function loguearUsuario($email){
    $_SESSION["email"] = $email;

    if(isset($_POST["rememberme"])){ //Seteamos cookie si el usuario tildó la casilla "Recordarme"
      setcookie('email', $email, time()+60*60);
    }

  }

  public function usuarioLogueado(){
    return isset($_SESSION["email"]);
  }
}
