<?php

$idusuario = $_REQUEST['idusuario'];
$tipoUsuarioId = $_REQUEST['tipoUsuarioId'];
$correo=$_REQUEST['correo'];
$usuario=$_REQUEST['usuario'];
$contrasenia=$_REQUEST['contrasenia'];


header( 'Content-Type: text/html; charset=utf-8' );

require('../functions.php');
require_once('../settings.php');

$comando = "UPDATE Usuario SET TipoUsuarioId = $tipoUsuarioId, Correo = '$correo', Usuario = '$usuario', Contrasenia = '$contrasenia'";
$comando = $comando . " WHERE IdUsuario = $idusuario;";

if(ejecutarSQLCommand($comando))
{
  printf("<script>alert('Modificación exitósa!');</script>");
  printf('<script>window.location = "'.$dirUsuario.'Principal.php"</script>');
}else{
  printf("<script>alert('Ocurrió un error!');</script>");
  printf('<script>window.location = "'.$dirUsuario.'Principal.php"</script>');
}


 ?>
