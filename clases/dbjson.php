<?php
/**
 *
 */
class DbJson extends Db
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
  public function guardarUsuario(Usuario $user, string $ext, string $file  = null){
    $array = json_decode($this->json, true);
    $usuario = [
      "id" => $user->getId(),
      "name" => $user->getName(),
      "apellido"=> $user->getApellido(),
      "email" => $user->getEmail(),
      "pass" =>$user->getPassword(),
      "img" => $user->getImg()
    ];

    $array["usuarios"][] = $usuario;

    $json = json_encode($array, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);

  }

  public function buscarUsuarioPorMail(string $email){
    $array = json_decode($this->json, true);

    foreach ($array["usuarios"] as $usuario) {
      if($usuario["email"] == $email){
        $ext =  pathinfo($usuario["img"], PATHINFO_EXTENSION);
        $user = new Usuario($usuario, $ext);
        return $user; //Debería retornar un Objeto de tipo Usuario.
      }
    }
    return null;
  }
  public function nextId(){
  $array = json_decode($this->json, true);
  $lastUser = array_pop($array["usuarios"]);
  $nextId = $lastUser["id"] + 1;

  return $nextId;
  }

}

?>
