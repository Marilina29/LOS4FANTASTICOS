<?php



  //Password
  if(strlen($datosFinales["pass"]) < 4){
    $errores["pass"] = "La contraseña debe tener al menos 4 caracteres";
  }

  return $errores;
function nextId(){
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);
  $lastUser = array_pop($array["usuarios"]);
  $nextId = $lastUser["id"] + 1;
  return $nextId;
}
function armarUsuario($ext){
  return [
    "id" => nextId(),
    "nombre" => trim($_POST["name"]),
    "apellido"=> trim($_POST["apellido"]),
    "email" =>  trim($_POST["email"]),
    "password" => password_hash($_POST["pass"], PASSWORD_DEFAULT),
    "img" => "img/".nextId() . ".$ext"
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
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);
  foreach ($array["usuarios"] as $usuario) {
    if($usuario["email"] == $email){
      return $usuario;
    }
  }
  return null;
}
