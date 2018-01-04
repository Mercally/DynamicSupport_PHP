<!doctype html>
<html lang="es">
<head>
	<title>dTS | Administrar Usuarios</title>
	<meta charset="utf-8" />
	<?php include_once('../../_scriptsHeader.php'); ?>
</head>
<body>
	<!-- TODO: EL CODIGO PRINCIPAL -->

	<?php include_once('../../settings.php'); ?>
	<?php include_once('../../_header.php');	?>
	<?php	include_once('../../_login.php'); ?>
	<?php	include_once('../../_registrarUsuario.php'); ?>
	<?php	include_once('../../_menuSocial.html'); ?>
<main class="container">
    <h1><i class="fa fa-database"></i> Crear la Base de Datos</h1>
    <h3>Esta operación puede tardar unos segundos.</h3>

<?php
echo '<form action="'.$dirDataBaseBackend.'bd_script.php" method="post">';
 ?>

	<label for="">Host:</label>
	<input type="text" class="form-control" maxlength="50" name="host" value="localhost" placeholder="Host de servicio" readonly required>
	<br>
	<label for="">Base de datos:</label>
	<input type="text" class="form-control" maxlength="50" name="name" value="mtechwor_dynamict" placeholder="Nombre de la base de datos" readonly required>
	<br>
	<label for="">Usuario:</label>
	<input type="text" class="form-control" maxlength="50" name="user" value="root" placeholder="Usuario de acceso" readonly required>
	<br>
	<label for="">Contraseña:</label>
	<input type="password" class="form-control" maxlength="50" name="pass" value="" placeholder="Contraseña de la base de datos">
	<br>
	<input type="submit" name="instalar" class="btn btn-success" value="Instalar BD">
	<input type="reset" class="btn btn-primary" value="Limpiar">
</form>
<br>
<!--
<h3>Eliminar base de datos</h3>
<?php
//echo '<form action="'.$dirDataBaseBackend.'bd_script.php" method="post">';
 ?>
	<label for="">Host:</label>
	<input type="text" class="form-control" maxlength="50" name="host" value="localhost" placeholder="Host de servicio" readonly required>
	<br>
	<label for="">Base de datos:</label>
	<input type="text" class="form-control" maxlength="50" name="name" value="mtechwor_dynamict" placeholder="Nombre de la base de datos" readonly required>
	<br>
	<label for="">Usuario:</label>
	<input type="text" class="form-control" maxlength="50" name="user" value="root" placeholder="Usuario de acceso" readonly required>
	<br>
	<label for="">Contraseña:</label>
	<input type="password" class="form-control" maxlength="50" name="pass" value="" placeholder="Contraseña de la base de datos">
	<br>
	<input type="submit" name="borrar" class="btn btn-warning" value="Eliminar BD">
</form>
-->

</main>
<?php include_once('../../_footer.html'); ?>
</body>
<?php include_once('../../_scriptsFooter.php') ?>
</html>
