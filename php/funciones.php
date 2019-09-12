<?php
session_start();
function validarRegistro($datos){
  $errores = [];
  $datosFinales = [];
  // Limpia espacios al cominenzo y la final de cada campo.
  foreach ($datos as $key => $value) {
    //¿Cuándo no debe trimear? con password!
    if($key != "pass"){
      $datosFinales[$key] = trim($value);
    } else {
      $datosFinales[$key] = $value;
    }
  }
  //Validaciones
  //=====================
  //Nombre
  if(strlen($datosFinales["name"]) == 0){
    $errores["name"] = "El campo nombre debe estar completo";
  } else if (!ctype_alpha($datosFinales["name"])){
    $errores["name"] = "Por favor ingrese caracteres alfabéticos";
  } //Validar con expresion regular que permita espacios intermedios.
  //apellido
  if(strlen($datosFinales["apellido"]) == 0){
    $errores["apellido"] = "El campo nombre debe estar completo";
  } else if (!ctype_alpha($datosFinales["apellido"])){
    $errores["apellido"] = "Por favor ingrese caracteres alfabéticos";
  }
  //Email
  if(strlen($datosFinales["email"]) == 0){
    $errores["email"] = "El campo email debe estar completo";
  } else if(!filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL)){
    $errores["email"] = "Por favor ingrese un email con formato válido";
  } else if(buscarUsuarioPorMail($datosFinales["email"])) {
    $errores["email"] = "El email ya existe. Por favor elija otro.";
  }
  //Password
  if(strlen($datosFinales["pass"]) < 4){
    $errores["pass"] = "La contraseña debe tener al menos 4 caracteres";
  }
  //retype Password
  // if(strlen($datosFinales["pass2"]) === 0){
  //   $errores["pass2"] = "El campo no puede estar vacío.";
  // } else if($datosFinales["pass"] !== $datosFinales["pass2"]){
  //   $errores["pass2"] = "Las contraseñas no coiniceden";
  // }
  return $errores;
}
function nextId(){
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);
  $lastUser = array_pop($array["usuarios"]);
  $nextId = $lastUser["id"] + 1;
  return $nextId;
}
function armarUsuario(){
  return [
    "id" => nextId(),
    "nombre" => trim($_POST["name"]),
    "email" =>  trim($_POST["email"]),
    "password" => password_hash($_POST["pass"], PASSWORD_DEFAULT),
  ];
}
function guardarUsuario($user){
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);
  $array["usuarios"][] = $user;
  $json = json_encode($array, JSON_PRETTY_PRINT);
  file_put_contents("db.json", $json);
}
function buscarUsuarioPorMail($email){
  //¿Qué pasa si no hay archivo .json
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);
  foreach ($array["usuarios"] as $usuario) {
    if($usuario["email"] == $email){
      return $usuario;
    }
  }
  return null;
}
//Login
function validarLogin($datos){
  $errores = [];
  //Email
  if(strlen($datos["email"]) == 0){
    $errores["email"] = "El campo email debe estar completo";
  } else if(!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)){
    $errores["email"] = "Por favor ingrese un email con formato válido";
  } else if(!buscarUsuarioPorMail($datos["email"])) {
    $errores["email"] = "El usuario no existe Por favor regístrese.";
  }
  //Password
  if(strlen($datos["pass"]) == 0){
    $errores["pass"] = "El campo password debe estar completo";
  } else {
    $usuario = buscarUsuarioPorMail($datos["email"]);
    if( !password_verify($datos["pass"], $usuario["password"]) ){
    $errores["pass"] = "La contraseña ingresada es incorrecta";
    }
  }

  return $errores;
}
function loguearUsuario(){
  $_SESSION["email"] = $_POST["email"];
}
function usuarioLogueado(){
  return isset($_SESSION["email"]);
}
