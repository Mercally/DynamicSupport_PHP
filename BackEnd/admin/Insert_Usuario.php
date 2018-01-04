<?php

$TipoUsuarioId=$_REQUEST['tipoUsuarioId'];
$correo=$_REQUEST['correo'];
$usuario=$_REQUEST['usuario'];
$contrasenia=$_REQUEST['contrasenia'];

header( 'Content-Type: text/html; charset=utf-8' );

require('../functions.php');
require_once('../settings.php');

  $comando = "INSERT INTO  Usuario (TipoUsuarioId, Correo, Usuario, Contrasenia) VALUES ($TipoUsuarioId, '$correo', '$usuario', '$contrasenia')";


  if(ejecutarSQLCommand($comando))
  {
    printf("<script>alert('Inserción exitósa!');</script>");
    printf("<script>window.location = '$dirUsuario/Insert.php'</script>");
  }else{
    printf("<script>alert('Ocurrió un error!');</script>");
    printf("<script>window.location = '$dirUsuario/Insert.php'</script>");
  }





 ?>
