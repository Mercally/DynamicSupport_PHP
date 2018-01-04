<!doctype html>
<html lang="es">
<head>
	<title>dTS | Administrar Usuarios</title>
	<meta charset="utf-8" />
	<?php include_once('../../_scriptsHeader.php'); ?>
</head>
<body>

	<?php include_once('../../settings.php'); ?>
	<?php include_once('../../_header.php');	?>
	<?php	include_once('../../_login.php'); ?>
	<?php	include_once('../../_registrarUsuario.php'); ?>
	<?php	include_once('../../_menuSocial.html'); ?>

	<?php

	$IdUsuario = $_GET['IdUsuario'];

	include('../../../Back-End_DynamictSupport/functions.php');

	$commando = "SELECT T.Descripcion, U.Correo, U.Usuario, U.Contrasenia FROM Usuario AS U INNER JOIN TipoUsuario AS T";
	$commando = $commando . " ON U.TipoUsuarioId = T.TipoUsuarioId WHERE IdUsuario = $IdUsuario LIMIT 1;";
	$result = getSQLResultSet($commando);


	 ?>

<!-- TODO: EL CODIGO PRINCIPAL -->
<main class="container">
<h2><i class="fa fa-user"></i> Detalle de Usuario</h2>
<hr>
<div class="form-group frm-servicio">
<?php

	while($fila = mysqli_fetch_array($result)) {
		$Usuario = $fila['Usuario'];
		echo "<label>Nombre de usuario:</label> <input disabled class='form-control' value='$Usuario'>";
		$Descripcion = $fila['Descripcion'];
		echo "<label>Tipo de usuario:</label> <input disabled class='form-control' value='$Descripcion'>";
		$Correo = $fila['Correo'];
		echo "<label>Correo:</label> <input disabled class='form-control' value='$Correo'>";
		$Contrasenia = $fila['Contrasenia'];
		echo "<label>Contraseña:</label> <input disabled class='form-control' value='$Contrasenia'>";
	}

 ?>
</div>
<br>
<a href="Principal.php">Ir a principal.</a>

<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('../../_footer.html'); ?>
</body>
<?php include_once('../../_scriptsFooter.php') ?>
</html>
