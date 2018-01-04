<?php


require('conexion.php');

/*
* Ejecutar comandos de tipo Delete, Update, Insert
*/
function ejecutarSQLCommand($commando){

  $mysqli = conectar();
  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      printf("Error: %s\n", $mysqli->connect_errno);
      exit();
  }else{

    if ( $mysqli->multi_query($commando)) {
        return true;
    }else{
        return false;
    }
  $mysqli->close();
  }
}


/*
* Metodo para ejecutar consultas de tipo Select
*/
function getSQLResultSet($commando){

	$mysqli = conectar();
	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		printf("Error: %s\n", $mysqli->connect_errno);
		exit();
	}else{

		$request = mysqli_query($mysqli, $commando);

		return $request;
	}
	$mysqli->close();
}


?>
