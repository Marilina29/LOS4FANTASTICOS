<?php
include_once "dbjson.php";

class Usuario
{
  private $id;
  private $name;
  private $apellido;
  private $email;
  private $password;

  function __construct(Array $array)
  {
    global $json;
    $this->id = $json->nextId();
    $this->name = $_POST["name"];
    $this->email = $_POST["email"];
    $this->password = password_hash($_POST["pass"], PASSWORD_DEFAULT);

  }

  public function getId(){
    return $this->id;
  }
  public function getName(){
    return $this->nombre;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }



}
