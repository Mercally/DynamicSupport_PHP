<!doctype html>
<html lang="es">
<head>

<title>dTS | Mantenimiento</title>

<?php include_once('../_scriptsHeader.php'); ?>

</head>
<body>

  <?php require('../settings.php'); ?>
  <?php	include_once('../_header.php'); ?>
	<?php	include_once('../_login.php'); ?>
	<?php	include_once('../_registrarUsuario.php'); ?>
	<?php	include_once('../_menuSocial.html'); ?>

<!-- TODO EL CODIGO PRINCIPAL -->
<main class="container">
	<h2><i class="fa fa-medkit" aria-hidden="true"></i> Mantenimiento</h2>
	<hr>
	<p>
	El mantenimiento de ordenadores consiste básicamente en el cuidado preventivo y correctivo de los equipos informáticos de una empresa. Actualizaciones de hardware y software, revisión de espacio en disco, defragmentación, etc.
	</p>
	<p>
	El mantenimiento de servidores es un poco más complejo y requiere de personal con elevada cualificación técnica y de confianza.  Dado que en los servidores suele encontrarse la información más crítica de la empresa.  Tareas comunes de este mantenimiento son la actualización de software y hardware, las copias de seguridad, el visionado de logs, análisis de rendimiento, etc.
	</p>
	<h3>Solicite su mantenimiento ahora mismo:</h3>
	<hr>
  <div class="frm-servicio">

  <?php
      echo '<form name="frm-Mantenimiento action="'.$dirBackend.'/Insertar_Mantenimiento.php" method="POST">';//redireccion
   ?>

	Tipo de mantenimiento:
	<select name="IdTipo" class="form-control">
		<option value="1">Software</option>
		<option value="2">Hardware</option>
	</select>

	Dispositivo:
	<select name="IdDispositivos" class="form-control">
		<option value="1">Celulares</option>
		<option value="2">Computadora</option>
		<option value="3">Laptop</option>
	</select>

	Hora:
	<input type="time" 	name="IdTiempo" required class="form-control">

	Comentario:
	<textarea name="Comentario" cols="40" rows="3" maxlength="150" required placeholder="Breve comentario del porque se solicita el mantenimiento..." class="form-control"></textarea>
<br>
	<input type="submit" value="Enviar solicitud" class="btn btn-primary">
	<input type="reset" value="Limpiar" class="btn btn-defatult">
</div>
</form>
	<hr>
  <?php
  echo '<a href="'.$dirServicios.'asistencia.html">Pedir asesoria técnica...</a>';
   ?>

</main>
<?php include_once('../_footer.html'); ?>
</body>
<?php include_once('../_scriptsFooter.php') ?>
</html>
