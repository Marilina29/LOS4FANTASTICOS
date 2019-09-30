<?php
/**
 *
 */
class DbJson
{
  private $json;

  function __construct(string $file)
  {
    if(!file_exists($file)){
    $this->json = "";
    } else {
    $this->json = file_get_contents($file);
    }
  }
  public function guardarUsuario(Usuario $user, string $file){
    $array = json_decode($this->json, true);
    $usuario = [
      "id" => $user->getId(),
      "name" => $user->getName(),
      "apellido"=> $apellido->getApellido(),
      "email" => $user->getEmail(),
      "password" =>$user->getPassword(),
    ];

    $array["usuarios"][] = $usuario;

    $json = json_encode($array, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
  }

  function buscarUsuarioPorMail(string $email){
    $array = json_decode($this->json, true);
      foreach ($array["usuarios"] as $usuario) {
      if($usuario["email"] == $email){
      return $usuario;
      }
    }
    return null;
  }
  function nextId(){
  $array = json_decode($this->json, true);
  $lastUser = array_pop($array["usuarios"]);
  $nextId = $lastUser["id"] + 1;

  return $nextId;
  }

}

?>
