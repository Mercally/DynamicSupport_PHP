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

<!-- TODO: EL CODIGO PRINCIPAL -->
<main class="container">
<h2><i class="fa fa-user-plus"></i> Crear usuario </h2>

<hr>
<?php
echo '<form method="post" action="'.$dirAdminBackend.'Insert_Usuario.php" class="frm-servicio">';
 ?>
<div class="form-group">

Nivel:
<select class="form-control" name="tipoUsuarioId" required="requerid">
  <option value="0">Usuario regular</option>
  <option value="1">Administrador</option>
</select>
<br>
Correo:
<input class="form-control" type="email" name="correo" maxlength="25" placeholder="ejemplo@servidor.com" required="requerid">
<br>
Usuario:
<input class="form-control" type="text" name="usuario" placeholder="Nombre de usuario" maxlength="10" pattern="[a-zA-ZñÑ_-.,]{10}" title="El nombre de usuario debe tener 10 digitos entre A - Z y _ . - o ," required="requerid">
<br>
Contraseña:
<input class="form-control" type="password" name="contrasenia" required="required" placeholder="Contraseña personal" maxlength="10">
<br>
	<input type="submit" value="Registrar" class="btn btn-primary">
	<input type="reset" value="Limpiar" class="btn btn-default">
</div>
</form>
<br>
<a href="Principal.php">Ir a principal.</a>

</main>
<?php include_once('../../_footer.html'); ?>
</body>
<?php include_once('../../_scriptsFooter.php') ?>
</html>
