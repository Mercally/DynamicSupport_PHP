<!doctype html>
<html lang="es"><!-- InstanceBegin template="/Templates/masterpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>dTS | Configuracón</title>
<?php include_once('../_scriptsHeader.php'); ?>

</head>
<body>

  <?php require('../settings.php'); ?>
  <?php	include_once('../_header.php'); ?>
	<?php	include_once('../_login.php'); ?>
	<?php	include_once('../_registrarUsuario.php'); ?>
	<?php	include_once('../_menuSocial.html'); ?>

<!-- TODO EL CODIGO PRINCIPAL -->
<!-- InstanceBeginEditable name="contenido" -->
<main class="container">

	<h2><i class="fa fa-gear" aria-hidden="true"></i> Configuración</h2>
	<hr>
	<p>
	La configuración predeterminada, típica o por defecto es la que no se ha definido aún, generalmente no es la más recomendada, ya que por ese mismo motivo se le da la posibilidad al usuario de modificarla, una configuración predeterminada tiene que estar preparada para:
	<br><br>
	Usuarios de todas las edades y ambos sexos.<br>
	Generalmente en español o inglés.<br>
	Nivel gráfico medio.<br>
	Seguridad media.<br>
	</p>
	<hr>
	<a href="asistencia.php">Pedir asesoria técnica...</a>

</main>
<?php include_once('../_footer.html'); ?>
</body>
<?php include_once('../_scriptsFooter.php') ?>
</html>
