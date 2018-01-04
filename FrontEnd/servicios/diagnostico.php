<!doctype html>
<html lang="es"><!-- InstanceBegin template="/Templates/masterpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>dTS | Diagnóstico</title>
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

	<h2> <i class="fa fa-area-chart"></i> Diagnóstico</h2>
	<hr>
	<p>
		Un diagnóstico son el o los resultados que se arrojan luego de un estudio, evaluación o análisis sobre determinado ámbito u objeto. El diagnóstico tiene como propósito reflejar la situación de un dispositivo (así mismo como se visita un médico), estado o sistema para que luego se proceda a realizar una acción o tratamiento que ya se preveía realizar o que a partir de los resultados del diagnóstico se decide llevar a cabo.
	</p>

<h3>Solicitud de diagnóstico</h3>
<div class="form-group col-lg-8">
<form method="POST" name="frm-diagnostico" action="#" class="frm-servicio">
        <b>Tipo:</b>
        <select name="IdServicio" class="form-control">
            <option value="1" selected="true">Hardware</option>
            <option value="2">Software</option>
        </select>

        <b>Fecha:</b>
        <input type="date" name="IdFecha" size="25" class="form-control">

        <b>Hora:</b>
        <input type="time" name="IdTiempo" size="25" class="form-control">

        <b>Costo:</b>
        <input type="number" name="IdCosto" size="25" class="form-control">

        <b>Comentario:</b>
        <textarea cols="40" rows="5" name="comentario" placeholder="Comentario sobre el mantenimiento..." class="form-control"></textarea>
        <br>
        <input type="submit" name="subir" value="Solicitar" class="btn btn-primary">
        <input type="reset" name="borrar" value="Limpiar" class="btn btn-warning" >
    </form>
    </div>
<h4>Otras opciones</h4>
	<hr>
	<a href="asistencia.php">Pedir asesoria técnica...</a><br>
    <a href="../preguntas.php">Preguntas frecuentes...</a><br>
    <a href="../index.php">Nuestos servicios...</a><br>
    <hr>
    <a href="../opinion.php">Danos tu opinión...</a>
</main>
<?php include_once('../_footer.html'); ?>
</body>
<?php include_once('../_scriptsFooter.php') ?>
</html>
