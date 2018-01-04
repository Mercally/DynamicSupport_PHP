<!doctype html>
<html lang="es">
<head>
	<title>dTS | Dispositivos</title>
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
<h2><i class="fa fa-power-off"></i> Dispositivos</h2>
<hr>
<p>Lista de dispositivos soportados para mantenimiento y soporte</p>
<table width="100%">
            <tr>
                <td width="15%" align="center"><img src="img/dispositivos/moviles.png"/> </td>
                <td>
                	<ul>
                		<li>iPhone</li>
                		<li>Windows Phone</li>
                		<li>Sony Xperia</li>
                		<li>Samsung</li>
                		<li>Huawei</li>
                		<li>HTC</li>
                		<li>at&t</li>
                	</ul>
                </td>
                <td width="15%" align="center"><img src="img/dispositivos/pc.png"/> </td>
                <td>
					<ul>
						<li>Apple</li>
						<li>Microsoft Compaq</li>
						<li>Dell</li>
                        <li>Compaq</li>
                        <li>Hp</li>
					</ul>
                </td>
            </tr>
            <tr>
				<td align="center"><img src="img/dispositivos/portatil.png"/> </td>
				<td>
				<ul>
					<li>Sony Vaio</li>
					<li>Hp</li>
					<li>Compaq</li>
					<li>Toshiba</li>
					<li>Acer</li>
					<li>Dell</li>
				</ul>
				</td>
                <td align="center"><img src="img/dispositivos/smarttv.png"/> </td>
                <td>
                	<ul>
                		<li>Android TV</li>
                		<li>Sony Bravia</li>
                		<li>LG</li>
                		<li>Samsung</li>
                	</ul>
				</td>
            </tr>
            <tr>
            	<td align="center"><img src="img/dispositivos/tablets.png"/> </td>
            	<td>
            		<ul>
            			<li>Apple</li>
                		<li>Windows</li>
                		<li>Samsung</li>
                		<li>Levono</li>
            		</ul>
            	</td>
            	<td align="center">
								<?php
								echo '<a href="'.$dirServicios.'/asistencia.php" class="btn btn-warning">No encuentro mi dispositivo</a>';
								 ?>
            	</td>
            </tr>
        </table>
<main>
<?php include_once('_footer.html'); ?>
</body>
<?php include_once('_scriptsFooter.php') ?>
</html>
