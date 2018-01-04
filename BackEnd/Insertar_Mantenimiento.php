<?php
    $TipoMantenimiento = $_REQUEST['IdTipo'];
    $Dispositivos = $_REQUEST['IdDispositivos'];
    $Hora = $_REQUEST['IdTiempo'];
    $Comentarios = $_REQUEST['Comentario'];

    require_once('functions.php');
    require('settings.php');
    header('Content-Type: text/html; charset=utf-8');

    $comando = "INSERT INTO Mantenimiento(TipoMantenimiento,Dispositivos,Hora,Comentario)VALUES";
    $comando = $comando . " ('$TipoMantenimiento','$Dispositivos','$Hora','$Comentarios')";
    $redireccion = "<script>window.location = '$dirFrontEnd/servicios/mantenimiento.php'</script>";
    if(ejecutarSQLCommand($comando))
    {
      printf("<script>alert('se ha enviado una solicitud exitósamente!');</script>");
      echo $redireccion;

    }else{
      printf("<script>alert('Ocurrió un error!');</script>");
      echo $redireccion;

    }


?>
