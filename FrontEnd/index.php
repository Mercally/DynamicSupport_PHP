<!doctype html>
<html lang="es">
<head>
	<title>dTS | Inicio</title>
	<meta charset="utf-8" />
	<?php include_once('_scriptsHeader.php'); ?>
</head>
<body>

	<?php include_once('settings.php'); ?>
	<?php include_once('_header.php');	?>
	<?php	include_once('_login.php'); ?>
	<?php	include_once('_registrarUsuario.php'); ?>
	<?php	include_once('_menuSocial.html'); ?>

<!-- TODO: EL CODIGO PRINCIPAL -->
<main class="container">
<h2><i class="fa fa-home"></i> Inicio  </h2>
<h3>Nuestros servicios</h3>
<hr/>
	<table width="100%">
				<tr>
					<td width="15%">
						<?php
						echo '<img src="'.$dirImg.'mantenimiento.png" width="150" height="120"';
						 ?>
					</td>
					<td width="35%">
						Si lo que buscas es evitar que tus dispositivos se dañen antes de que termine su vida util, estas en el mejor sitio de la web.
						<br />
						<?php
						echo '<a href="'.$dirServicios.'mantenimiento.php" class="btn btn-success">';
						 ?>Saber más</a>
					</td>
					<td>
						<?php
						echo '<img src="'.$dirImg.'configuracion.png" width="150" height="120">';
						 ?>
					</td>
					<td>
						Tu equipo anda mal, pues dejanos hecharle un vistazo, contamos con los mejores profesionales, seguro que resolvemos tus problemas.
						<br />
						<?php
						echo '<a href="'.$dirServicios.'diagnostico.php" class="btn btn-success">';
						 ?>Saber más</a>
					</td>
				</tr>
				<tr>
					<td width="15%">
						<?php
						echo '<img src="'.$dirImg.'diagnostico.png" width="150" height="120">';
						 ?>
					</td>
					<td width="35%">
						Realizamos una evaluación de rendimiento a tus dispositivos, y te ayudamos a mejorar esas partes de tu equipo de trabajo, para tener control sobre tu estabilidad y rendimiento.
						<br />
						<?php
						echo '<a href="'.$dirServicios.'diagnostico.php" class="btn btn-success">';
						 ?>Saber más</a>
					</td>
					<td>
						<?php
						echo '<img src="'.$dirImg.'asistencia.png" width="150" height="120">';
						 ?>
					</td>
					<td>
						¿No encuentras especificamente tu necesidad? Llámanos, un profesional te asistirá, seguramente es lo que necesitas, no esperes más.
						<br />
						<?php
						echo '<a href="'.$dirServicios.'asistencia.php" class="btn btn-success">';
						 ?>Saber más</a>
					</td>
				</tr>
				<tr>
					<td>
						<?php
						echo '<img src="'.$dirImg.'instalacion.png" width="150" height="120">';
						 ?>

					</td>
					<td>
						¿Estas buscando software nuevo para tu equipo? Cuanta con nosotros, contamos con multiples tiendas en linea para que tu te hagas de los mejores programas al mejor precio.
						<br />
						<?php
						echo '<a href="'.$dirServicios.'instalacion.php" class="btn btn-success">';
						 ?>Saber más</a>
					</td>
					<td colspan="2" align="center">
						<?php
						echo '<a href="'.$dirFrontEnd.'/preguntas.php" class="btn btn-default">Preguntas frecuentes</a> ';
						echo ' <a href="'.$dirFrontEnd.'/opinion.php" class="btn btn-default">Danos tu opinión</a>';
						 ?>
					</td>
				</tr>
			</table>
			<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('_footer.html'); ?>
</body>
<?php include_once('_scriptsFooter.php') ?>
</html>
