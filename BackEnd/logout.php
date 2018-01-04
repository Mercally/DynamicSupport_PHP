<?php

include('settings.php');

session_start();

if($_SESSION){
  session_destroy();
  
  printf("<script>alert('La sesión fue cerrada correctamente!');</script>");
  printf("<script>window.location = '$dirFrontEnd/index.php'</script>");
}else{
  printf("<script>window.location = '$dirFrontEnd/index.php'</script>");
}


 ?>
