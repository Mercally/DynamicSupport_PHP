<?php

$correo = $_REQUEST['correo'];
$contrasenia = $_REQUEST['contraNew'];

    require('functions.php');
    require('settings.php');

$comando = "UPDATE Usuario SET Contrasenia = '$contrasenia' WHERE Correo = '$correo';";

$req = ejecutarSQLCommand($comando);

if($req){
    echo "<script>alert('Se modificó correctamente la contraseña.');</script>";
}else{
    echo "<script>alert('No se modificó la contraseña, verifique su correo.');</script>";
}

echo "<script>window.location = '$dirFrontEnd/recuperarcontrasenia.php'</script>";

?>