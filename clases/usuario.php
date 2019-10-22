<?php
include_once "dbjson.php";

class Usuario
{
  private $id;
  private $name;
  private $apellido;
  private $email;
  private $password;
  private $img;

  function __construct(Array $array, string $ext)
  {
    global $db;

    if(isset($array["id"])){
      $this->id = $array["id"];
      $this->password = $array["pass"];
    } else {
      if ($db instanceof DbJson ){
        $this->id = $db->nextId(); //nextID();
      } else {
        $this->id = null;
      }
      $this->password = password_hash($array["pass"], PASSWORD_DEFAULT);
    }
    $this->name = $array["name"];
    $this->email = $array["email"];
    $this->apellido = $array["apellido"];
    $this->img = $this->id . "." . $ext;


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
  public function getPassword(){
    return $this->password;
  }
  public function getImg(){
    return $this->img;
  }



}
