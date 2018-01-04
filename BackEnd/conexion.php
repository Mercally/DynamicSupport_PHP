<?php


//TODO: RETORNA LA CONEXION
function conectar(){
/*
$host = "mtechworks.net";
$db = "mtechwor_dynamict";
$user = "mtechwor_dynamic";
$pass = "dynamict123.";*/

$host = "localhost";
$db = "mtechwor_dynamict";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $db);

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      printf("Error: %s\n", $mysqli->connect_errno);
      exit();
  }else{

    return $mysqli;
  }

}

 ?>
