<!doctype html>
<html lang="es">
<head>
<title>dTS | Comentario</title>
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
<main class="container">
<h2><i class="fa fa-commenting-o" aria-hidden="true"></i> Comentarios</h2>
	<hr>
	<p>
		Tu opinión nos interesa mucho como empresa, y es muy valiosa para seguir brindandote el mejor de los servicios, no olvides que es confidencial. Recibirás un correo de respuesta a tu inquietud si nos proporcionas tu correo, de lo contrario no es obligatorio.
	</p>
<form id="contact_form" action="#" method="POST" class="frm-servicio">
<div class="form-group">
    <label for="name" class="" >Tu nombre:</label><br />
    <input id="name" class="form-control" name="nombre" type="text" value="" size="30" />(Obligatorio)
    <br />
    <label for="email">Tu email:</label><br />
    <input id="email" class="form-control" name="correo" type="text" value="" size="30" />(No obligatorio)
    <br />
    <label for="message">Tu mensaje:</label><br />
    <textarea id="message" class="form-control" name="mensaje" rows="7" cols="30" maxlength="120" placeholder="Estoy muy satisfecho por el servicio..."></textarea>(Obligatorio)

</div>
    <input class="btn btn-primary" type="submit" value="Enviar comentario" />
</form><!-- FIN formulario -->
<!-- InstanceEndEditable -->
<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('_footer.html'); ?>
</body>
<?php include_once('_scriptsFooter.php') ?>
</html>
