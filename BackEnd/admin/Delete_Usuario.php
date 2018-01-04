<?php

$IdUsuario = $_GET['IdUsuario'];


require('../functions.php');
require_once('../settings.php');

$comando = "DELETE FROM Usuario WHERE IdUsuario = $IdUsuario";

if(ejecutarSQLCommand($comando))
{
  printf("<script>alert('Eliminación exitósa!');</script>");
  printf('<script>window.location = "'.$dirUsuario.'Principal.php"</script>');
}else{
  printf("<script>alert('Ocurrió un error!');</script>");
  printf('<script>window.location = "'.$dirUsuario.'Principal.php"</script>');
}


 ?>
