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

$commando = "SELECT TipoUsuarioId, Correo, Usuario, Contrasenia FROM Usuario WHERE IdUsuario = $IdUsuario LIMIT 1;";
$result = getSQLResultSet($commando);



$Usuario = "";
$Contrasenia = "";
$Correo = "";
$TipoUsuarioId = -1;

  while($fila = mysqli_fetch_array($result)) {

		$TipoUsuarioId = $fila['TipoUsuarioId'];
	  $Correo = $fila['Correo'];
	  $Usuario = $fila['Usuario'];
		$Contrasenia = $fila['Contrasenia'];

	}

 ?>
<!-- TODO: EL CODIGO PRINCIPAL -->
<main class="container">
<h2><i class="fa fa-pencil-square-o"></i> Editar usuario </h2>

<hr>
<?php
	echo '<form method="post" action="'.$dirAdminBackend.'Update_Usuario.php" class="frm-servicio">';
?>
<div class="form-group">
<input type="hidden" name="idusuario" <?php echo 'value="'.$IdUsuario.'"' ?>>
Nivel:
<select class="form-control" name="tipoUsuarioId" required="requerid">
<?php

	if($TipoUsuarioId > 0){
	  echo '<option value="0">Usuario regular</option>';
		echo '<option value="1" selected >Administrador</option>';
	}else{
		echo '<option value="0" selected >Usuario regular</option>';
		echo '<option value="1">Administrador</option>';
	}
 ?>
</select>
<br>
Correo:
<input class="form-control" <?php echo 'value="'.$Correo.'"'; ?> type="email" name="correo" maxlength="25" placeholder="ejemplo@servidor.com" required="requerid">
<br>
Usuario:
<input class="form-control" <?php echo 'value="'.$Usuario.'"'; ?> type="text" name="usuario" placeholder="Nombre de usuario" maxlength="10" pattern="[a-zA-ZñÑ_-.,]{10}" title="El nombre de usuario debe tener 10 digitos entre A - Z y _ . - o ," required="requerid">
<br>
Contraseña:
<input class="form-control" <?php echo 'value="'.$Contrasenia.'"'; ?> type="password" name="contrasenia" required="required" placeholder="Contraseña personal" maxlength="10">
<br>
	<input type="submit" value="Modificar" class="btn btn-primary">
	<input type="reset" value="Restablecer" class="btn btn-default">
</div>
</form>
<br>
<a href="Principal.php">Ir a principal.</a>

<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('../../_footer.html'); ?>
</body>
<?php include_once('../../_scriptsFooter.php') ?>
</html>
