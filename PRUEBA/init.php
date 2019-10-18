<?php
include "clases/dbjson.php";
include "clases/validator.php";
include "clases/auth.php";
include "clases/usuario.php";

$auth = new Auth;
// var_dump($auth);

$file = "db.json";
$json = new DbJson($file);
