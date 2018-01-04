<!doctype html>
<html lang="es">
<head>
<title>dTS | Preguntas frecuentes</title>
<meta charset="utf-8" />
<?php include_once('_scriptsHeader.php'); ?>
</head>
<body>
	<?php include_once('settings.php'); ?>
	<?php include_once('_header.php');	?>
	<?php	include_once('_login.php'); ?>
	<?php	include_once('_registrarUsuario.php'); ?>
	<?php	include_once('_menuSocial.html'); ?>

<!-- TODO EL CODIGO PRINCIPAL -->
<!-- InstanceBeginEditable name="contenido" -->
<main class="container">
<h2>Preguntas frecuentes</h2>
<div class="cuadro">
	<h3>¿Quiénes somos?</h3>
	<p>Puedes buscar esta información haciendo clic en <?php echo '<a href="'.$dirFrontEnd.'/nosotros.php">nosotros</a>'; ?>.</p>
</div>
<div class="cuadro-o">
	<h3>¿Qué ofrecemos?</h3>
	<p>Puedes buscar esta información haciendo clic en <?php echo '<a href="'.$dirFrontEnd.'/index.php">inicio</a>'; ?>.</p>
</div>
<div class="cuadro">
	<h3>¿A cuáles paises ofrecemos servicio?</h3>
	<p>Toda Centro America y Panamá.</p>
</div>
<div class="cuadro-o">
	<h3>¿Qué dispositivos soportamos?</h3>
	<p>Puedes buscar esta información haciendo clic en <?php echo '<a href="'.$dirFrontEnd.'/dispositivos.php">dispositivos</a>'; ?>.</p>
</div>
<hr>
<?php echo '<a href="'.$dirServicios.'asistencia.php">Pedir asistencia técnica...</a>'; ?>

<!-- InstanceEndEditable -->
<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('_footer.html'); ?>
</body>
<?php include_once('_scriptsFooter.html') ?>
</html>
