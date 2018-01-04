<!doctype html>
<html lang="es">
<head>
	<title>dTS | Usuario principal</title>
	<meta charset="utf-8" />
	<?php include_once('_scriptsHeader.php'); ?>
</head>
<body>

	<?php include_once('settings.php'); ?>
	<?php include_once('_header.php');	?>
	<?php	include_once('_login.php'); ?>
	<?php	include_once('_registrarUsuario.php'); ?>
	<?php	include_once('_menuSocial.html'); ?>
	<?php include('../Back-End_DynamictSupport/functions.php'); ?>

	<?php

	$IdUsuario = $_SESSION['IdUsuario'];

	$comando = "SELECT T.Descripcion, U.Correo, U.Usuario, U.Contrasenia FROM Usuario AS U INNER JOIN TipoUsuario AS T";
	$comando = $comando . " ON U.TipoUsuarioId = T.TipoUsuarioId WHERE IdUsuario = $IdUsuario LIMIT 1;";

	$result = getSQLResultSet($comando);

	 ?>

<!-- TODO: EL CODIGO PRINCIPAL -->
<main class="container">
<h2><i class="fa fa-user-o"></i> <?php echo $_SESSION['NombreUsuario']; ?></h2>
<hr/>

<h3>Datos personales:</h3>
<?php
if($result){
	while($fila = mysqli_fetch_array($result)){
		$Usuario = $fila['Usuario'];
		echo "<label>Nombre de usuario:</label> <input disabled class='form-control' value='$Usuario'>";
		$Descripcion = $fila['Descripcion'];
		echo "<label>Tipo de usuario:</label> <input disabled class='form-control' value='$Descripcion'>";
		$Correo = $fila['Correo'];
		echo "<label>Correo:</label> <input disabled class='form-control' value='$Correo'>";
		$Contrasenia = $fila['Contrasenia'];
		echo "<label>Contraseña:</label> <input disabled class='form-control' value='$Contrasenia'>";
	}
}else{
	echo "<label>No se encontraron datos.</label>";
}

 ?>

<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('_footer.html'); ?>
</body>
<?php include_once('_scriptsFooter.php') ?>
</html>
