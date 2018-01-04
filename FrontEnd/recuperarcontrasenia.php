<!doctype html>
<html lang="es">
<head>
<title>dTS | Recuperar cuenta</title>
<meta charset="utf-8" />
<?php include_once('_scriptsHeader.php'); ?>
</head>
<body>
	<?php include_once('settings.php'); ?>
	<?php include_once('_header.php');	?>
	<?php include_once('_login.php'); ?>
	<?php include_once('_registrarUsuario.php'); ?>
	<?php include_once('_menuSocial.html'); ?>

<!-- TODO EL CODIGO PRINCIPAL -->
<main class="container">
<h2>Recuperar cuenta</h2>
<hr>
<?php 
echo '<form name="frm-recordarcontrasenia" onSubmit="return verificarContras();" method="POST" action="'.$dirBackend.'/recuperarCuenta.php" class="frm-servicio">';
?>
	
	<div class="form-group">
		Correo:
		<input type="email" required name="correo" maxlength="25" placeholder="Correo asociado a la cuenta." class="form-control">
		Nueva Clave:
		<input type="password" required name="contraNew" id="contraNew" placeholder="Contraseña nueva a utilizar."  maxlength="10" class="form-control">
		Confirmar clave:
		<input type="password" required name="contraNewRep" id="contraNewRep" placeholder="Repita contraseña nueva." maxlength="10" class="form-control"><br>
		<input type="submit" value="Modificar" class="btn btn-primary">
		<input type="reset" value="Limpiar" class="btn btn-default">
	</div>
	</form>
	<script type="text/javascript">
	function verificarContras(){
		var contraNew = $('#contraNew').val();
		var contraNewRep = $('#contraNewRep').val();

		if(contraNew == contraNewRep)
		{
			return true;
		}else{
			alert('Las contraseñas no coinciden.');
			return false;
		}
	}
	</script>
<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('_footer.html'); ?>
</body>
<?php include_once('_scriptsFooter.php') ?>
</html>
