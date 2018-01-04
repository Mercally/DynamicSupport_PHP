<!doctype html>
<html lang="es">
<head>
<title>dTS | Contáctanos</title>
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
<table width="100%">
<tr>
    <td colspan="2">
        <img src="img/DTS-logo.png" style="position: absolute; opacity: 1; margin-left: -90px; ">
        <h2> Dynamict Tech Support</h2>
        <hr>
    </td>
</tr>
	<tr>
		<td>

			<img src="img/equipo.png">
		</td>
		<td>
			<p>Somos expertos en servicio técnico, con gran pasión por resolver problemas,
			con experiencia para ayudar a quien no tiene experiencia.</p>

			<p>Dynamic TechSupport fue fundado en 1997 por un grupo de estudiantes de ingenieria en computacion que tenian una misma vision de hacer al mundo un lugar mejor.</p>
		</td>
	</tr>
    <tr>

    <td colspan="2" class="frm-servicio">
    <H3>Contáctanos</H3>
    <p>Si eres una empresa emprendedora que buscar servicios permantentes, puedes contactarnos por este medio o nuestro correo: <b>info@dynamictsupport.com</b></p>
    <hr>
    <h4>Solicitar cita.</h4>

		<?php
echo '<form name="frm-contactanos" action="'.$dirBackend.'/Insert_Soporte.php" method="POST">';//redireccion
		 ?>

        <div class="form-group">
            <b>Correo:</b>
            <input type="email" name="Correo" maxlength="150" required size="25" class="form-control"><br>

            <b>Teléfono:</b>
            <input type="tel" maxlength="8" name="Telefono" required pattern="[0-9]{8}" class="form-control"><br>

            <b>Razón Contacto:</b>
            <textarea name="comentario" cols="40" rows="5" placeholder="Motivo por el cual realiza el citamiento..." required  class="form-control"></textarea><br>

            <input type="submit" value="Enviar" class="btn btn-primary" >
            <input type="reset" name="Borrar" value="Limpiar" class="btn btn-warning">
            </div>
        </form>
    </td>
    </tr>
	<tr>
		<td align="center" style="margin: 25px 0px;">
			<img src="img/telefono.png" width="150"/>
		</td>
		<td>
        <hr>
            <h3>Llámanos, o mandanos un mensaje instantáneo.</h3>
            <hr>
			<p style="margin: 50px 0px;">Si lo prefieres puedes contáctarnos por medio de nuestro WhatsApp en Línea 24/7.<br />
			Atención por WhatsApp número (+503) 7815-3099. <br />Atención por teléfono (+503) 2522-7775.</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
        <h3>Búscanos en el mapa.</h3>
        <hr>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4609.7161254673065!2d-89.20340896216015!3d13.700649549518245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6330f25274b6cf%3A0x409a51c125627a99!2sUniversidad+Tecnologica!5e0!3m2!1ses-419!2ses!4v1486600052770" width="100%" height="250" frameborder="0" style="border:none;" allowfullscreen></iframe>
		</td>
		<!-- Formulario -->
	</tr>
</table>

<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('_footer.html'); ?>
</body>
<?php include_once('_scriptsFooter.php') ?>
</html>
