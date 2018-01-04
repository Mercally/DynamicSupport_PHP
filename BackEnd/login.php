<?php

$usuario=$_REQUEST['usuario'];
$contrasenia=$_REQUEST['contrasenia'];

require('functions.php');
require_once('settings.php');

$num = 0;
$comando = "SELECT Count(IdUsuario) AS Cuenta, TipoUsuarioId, IdUsuario, Usuario FROM Usuario WHERE Usuario = '$usuario' AND Contrasenia = '$contrasenia' LIMIT 1;";

$result = getSQLResultSet($comando);

  $Cuenta = 0;
  $IdUsuario = -1;
  $NombreUsuario = "";
  $TipoUsuario = -1;

$i = 0;
  while($fila = mysqli_fetch_array($result)) {

    $Cuenta = $fila['Cuenta'];
    $IdUsuario = $fila['IdUsuario'];
    $NombreUsuario = $fila['Usuario'];
    $TipoUsuario = $fila['TipoUsuarioId'];
    $i++;
  }

if($Cuenta == 1)
{
  session_start();

  $_SESSION['IdUsuario'] = $IdUsuario;
  $_SESSION['NombreUsuario'] = $NombreUsuario;
  $_SESSION['TipoUsuario'] = $TipoUsuario;

  printf("<script>alert('Bienvenido $NombreUsuario!');</script>");
  printf("<script>window.location = '$dirFrontEnd/index.php'</script>");
}else{
  printf("<script>alert('Usuario no valido!');</script>");
  printf("<script>window.location = '$dirFrontEnd/index.php'</script>");
  printf("<script> $('#btnModalLogin').click(); </script>");
}

 ?>
