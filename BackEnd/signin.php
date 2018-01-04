<?php

$usuario=$_REQUEST['usuario'];
$email=$_REQUEST['email'];
$contrasenia=$_REQUEST['contrasenia'];

header( 'Content-Type: text/html; charset=utf-8' );

require('functions.php');
require_once('settings.php');


  $comando = "INSERT INTO  Usuario (TipoUsuarioId, Correo, Usuario, Contrasenia) VALUES (0, '$email', '$usuario', '$contrasenia')";

  if(ejecutarSQLCommand($comando)){

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

      session_start();

      $_SESSION['IdUsuario'] = $IdUsuario;
      $_SESSION['NombreUsuario'] = $NombreUsuario;
      $_SESSION['TipoUsuario'] = $TipoUsuario;

    printf("<script>alert('Registro exitóso!');</script>");
    printf("<script>window.location = '$dirFrontEnd/index.php'</script>");
  }else{
    printf("<script>alert('Ocurrió un error!');</script>");
    printf("<script>window.location = '$dirFrontEnd/index.php'</script>");
  }

 ?>
