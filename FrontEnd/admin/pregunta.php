<!doctype html>
<html lang="es">
<head>

<title>dTs Admin | Preguntas</title>
<?php include_once('../_scriptsHeader.html'); ?>
</head>
<body>
	<?php include_once('settings.php'); ?>
	<?php include_once('_header.php');	?>
	<?php	include_once('_login.php'); ?>
	<?php	include_once('_registrarUsuario.php'); ?>
	<?php	include_once('_menuSocial.html'); ?>

<!-- TODO EL CODIGO PRINCIPAL -->
<!-- InstanceBeginEditable name="contenido" -->
<h2>Administrar - Preguntas frecuentes</h2>
<p>En este apartado podrá hacer las modificaciones pertinentes para las preguntas frecutnes</p>
<hr>
<form method="post" action="../../Back-End_DynamictSupport/insert_preguntas.php" class="frm-servicio">
<div class="form-group">
	Dispositivo:
	<select name="IdDispositivo" class="form-control">
		<option value="1">Moviles</option>
		<option value="2">Portatil</option>
		<option value="3">Tablets</option>
		<option value="4">Pc</option>
		<option value="5">Smartv</option>
	</select>
	Pregunta:
	<input type="text" name="Pregunta" cols="20" rows="1" required="" class="form-control" placeholder="Pregunta a solventar">
	Descripcion:
	<textarea name="Descripcion" cols="40" rows="3" required class="form-control" placeholder="Solución de la pregunta"></textarea>
<br>
	<input type="submit" value="Enviar" class="btn btn-primary">
	<input type="reset" value="Limpiar" class="btn btn-default">
</div>
</form>

<div style="width: 100%; height: 100px;"></div>

<?php include_once('../_footer.html'); ?>

</body>
<?php include_once('../_scriptsFooter.html') ?>
</html>
