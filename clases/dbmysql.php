<?php

/**
 *
 */
class DbMysql extends Db
{
  private $dbMysql;

  public function __construct()
  {
    $dsn = "mysql:host=127.0.0.1;dbname=05armo;port=3306";
    $user = "root";
    $pass = "root"; //VER NUESTRA BASE DE DATOS

    try {
      $this->dbMysql = new PDO($dsn, $user, $pass); //Resuelve la conexión.
      $this->dbMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para poder ver en php los errores que devuelva SQL

    } catch (\Exception $e) {
        echo "Hubo en error. Mensaje: ";
        var_dump($e->getMessage());
        $db = null;
    }
  }

  public function guardarUsuario(Usuario $user, string $ext, string $file = null){

    $stmt = $this->dbMysql->prepare("INSERT INTO usuarios VALUES(default, :name, :apellido, :email, :password, :img)");

    $stmt->bindValue(":name", $user->getName());
    $stmt->bindValue(":apellido", $user->getApellido());
    $stmt->bindValue(":email", $user->getEmail());
    $stmt->bindValue(":password", $user->getPassword());
    $stmt->bindValue(":img", $user->getImg());

    $stmt->execute();

  }

  public function buscarUsuarioPorMail(string $email){

    $stmt = $this->dbMysql->prepare("SELECT * FROM usuarios WHERE email = :email");

    $stmt->bindValue(":email", $email);
    $stmt->execute();

    $usuarioArray = $stmt->fetch(PDO::FETCH_ASSOC);
    if($usuarioArray){
        $ext =  pathinfo($usuarioArray["img"], PATHINFO_EXTENSION);
        $usuario = new Usuario($usuarioArray, $ext);
    } else {
      $usuario = null;
    }
    return $usuario;

  }














}
