<!doctype html>
<html lang="es"><!-- InstanceBegin template="/Templates/masterpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>dTS | Asistencia</title>

<?php include_once('../_scriptsHeader.php'); ?>

</head>
<body>
  <?php include_once('../settings.php'); ?>
  <?php	include_once('../_header.php'); ?>
	<?php	include_once('../_login.php'); ?>
	<?php	include_once('../_registrarUsuario.php'); ?>
	<?php	include_once('../_menuSocial.html'); ?>

<!-- TODO EL CODIGO PRINCIPAL -->
<main class="container">

<h2> <i class="fa fa-life-saver"></i> Asistencia</h2>
	<hr>
	<p>
		¿No encuentras tu dispositivo?<br>
		¿Tienes alguna duda? ¿No la encuentras en <?php echo '<a href="'.$dirFrontEnd.'/preguntas.php">Preguntas frecuentes</a>?' ?><br>
		¿Alguna inquietud?<br><br>
		Tienes la opción de solicitar por este medio una cita con alguno de nuestros profesionales, para ello puedes llenar el siguiente formulario, en menos de 30 min te estaran contactando por el medio que tu eligas.<br>
	</p>
<h3>Citar asistencia técnica</h3>
<hr>
<form method="POST" action="#" name="frm-asistencia" class="frm-servicio">
<div class="form-group" >
        <b>Medio</b>
        <select name="IdMedio" class="form-control" required>
            <option value="1" selected="true">Teléfono</option>
            <option value="2">Correo</option>
            <option value="3">Chat</option>
        </select>
        <b>Tipo:</b>
        <select name="IdTipo" class="form-control" required>
            <option value="1" selected="true">Mantenimiento</option>
            <option value="2">Instalación</option>
            <option value="3">Configuración</option>
            <option value="3">Diagnóstico</option>
        </select>
        <b>Fecha:</b>
        <input type="date" name="IdFecha" size="25" class="form-control" required>
        <b>Hora:</b>
        <input type="time" name="IdHora" size="15" class="form-control" required>
        <b>Descripcion:</b>
        <textarea name="descripcion" cols="40" rows="3" class="form-control" placeholder="Breve y consisa descripción del problema..." required></textarea>
        <br>
        <input type="submit" name="subir" value="Enviar" class="btn btn-primary">
        <input type="reset" name="borrar" value="Limpiar" class="btn btn-warning" >
        </div>
    </form>

	<hr>
	<p>
		¿Tienes algun código de caso?
	</p>

<!-- InstanceEndEditable -->
<div style="width: 100%; height: 100px;"></div>
</main>

<?php include_once('../_footer.html'); ?>
</body>
<?php include_once('../_scriptsFooter.php') ?>
</html>
