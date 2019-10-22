<?php
class Usuario
{
  private $id;
  private $name;
  private $apellido;
  private $email;
  private $pass;

  function __construct(Array $array)
  {
    global $json;
    if(isset($array["id"])){
      $this->id = $array["id"];
      $this->password = $array["pass"];
    }else{
    $this->id = $json->nextId();
    $this->name = $_POST["name"];
    $this->apellido = $_POST["apellido"];
    $this->email = $_POST["email"];
    $this->pass = password_hash($array["pass"], PASSWORD_DEFAULT);
  }
}
  public function getId(){
    return $this->id;
  }
  public function getName(){
    return $this->name;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPass(){
    return $this->pass;
  }



}
