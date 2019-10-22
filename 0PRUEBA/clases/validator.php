<?php
/**
 *
 */
class Validator
{

  public static function validarRegistro($datos){
    global $json;

      $errores = [];
      $datosFinales = [];
      foreach ($datos as $key => $value) {
        if($key != "pass"){
          $datosFinales[$key] = trim($value);
        } else {
          $datosFinales[$key] = $value;
        }
      }

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
    } else if($json->buscarUsuarioPorMail($datosFinales["email"])) {
      $errores["email"] = "El email ya está registrado. Por favor elija otro.";
    }

    //Password
    if(strlen($datosFinales["pass"]) < 4){
      $errores["pass"] = "La contraseña debe tener al menos 4 caracteres";
    }
//imagen de Perfil
    $ext = pathinfo($_FILES["avatar"]['name'], PATHINFO_EXTENSION);

      if($ext !== "jpg" && $ext !== "png" && $ext !== "jpeg"){
        $errores['avatar'] = "El archivo debe ser una imagen de tipo .jpg, .jpeg, .png";
      }


    return $errores;
  }

  public static function validarLogin($datos){
    global $json;
    $errores = [];

    //Email
    if(strlen($datos["email"]) == 0){
      $errores["email"] = "El campo email debe estar completo";
    } else if(!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)){
      $errores["email"] = "Por favor ingrese un email con formato válido";
    } else if(!$json->buscarUsuarioPorMail($datos["email"])) {
      $errores["email"] = "El usuario no existe Por favor regístrese.";
    }

    //Password
    if(strlen($datos["pass"]) == 0){
      $errores["pass"] = "El campo password debe estar completo";
    } else if($json->buscarUsuarioPorMail($datos["email"])){
        $usuario = $json->buscarUsuarioPorMail($datos["email"]);

        if(!password_verify($datos["pass"], $usuario->getPass()) ){
          $errores["pass"] = "La contraseña ingresada es incorrecta";
        }
    }

    return $errores;
  }
}
