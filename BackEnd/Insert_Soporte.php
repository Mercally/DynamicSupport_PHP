<?php
    $correo = $_REQUEST['Correo'];
    $telefono = $_REQUEST['Telefono'];
    $comentarios = $_REQUEST['comentario'];

    require_once('functions.php');
    require('settings.php');
    header('Content-Type: text/html; charset=utf-8');

    $comando = "INSERT INTO Soporte(Correo,Telefono,Comentario)VALUES";
    $comando = $comando . " ('$correo','$telefono','$comentarios')";

    $redireccion = "<script>window.location = '$dirFrontEnd/nosotros.php'</script>";
    if(ejecutarSQLCommand($comando))
    {
      printf("<script>alert('se ha enviado una solicitud exitósamente!');</script>");
    }else{
      printf("<script>alert('Ocurrió un error!');</script>");
    }
      echo $redireccion;


?>
