<?php
/**
 *
 */
abstract class Db
{
  abstract public function guardarUsuario(Usuario $user,  string $ext, string $file = null);
  abstract public function buscarUsuarioPorMail(string $email);

}
