<!doctype html>
<html lang="es">
<head>
	<title>dTS | Administrar Usuarios</title>
	<meta charset="utf-8" />
	<?php include_once('../../_scriptsHeader.php'); ?>
</head>
<body>

	<?php include_once('../../settings.php'); ?>
	<?php include_once('../../_header.php');	?>
	<?php	include_once('../../_login.php'); ?>
	<?php	include_once('../../_registrarUsuario.php'); ?>
	<?php	include_once('../../_menuSocial.html'); ?>

<!-- TODO: EL CODIGO PRINCIPAL -->
<main class="container">
	<h2><i class="fa fa-home"></i> Administrar usuarios </h2>
	<hr/>
	<?php echo '<a href="'.$dirUsuario.'Insert.php" class="btn btn-success">Nuevo</a>'; ?>

	<h2>Registros</h2>
<style>
table tbody td{
		padding: 5px 0px;
	}
</style>

	<table class="table-striped" width="100%">
		<tr class="success">
		<th width="25%">
			TIPO
		</th>
		<th width="25%">
			CORREO
		</th>
		<th width="25%">
			NOMBRE DE USUARIO
		</th>
		<th width="25%">
			<center>
			ACCIONES
		</center>
		</th>
		</tr>
		<tbody>
	<?php

		include('../../../Back-End_DynamictSupport/functions.php');
		
		$comando = "SELECT U.IdUsuario, T.Descripcion, U.Correo, U.Usuario FROM Usuario AS U INNER JOIN TipoUsuario AS T ON U.TipoUsuarioId = T.TipoUsuarioId;";

		$result = getSQLResultSet($comando);

		while ($fila = mysqli_fetch_array($result)) {

		$Descripcion = $fila['Descripcion'];
		$Correo = $fila['Correo'];
		$Usuario = $fila['Usuario'];
		$IdUsuario = $fila['IdUsuario'];

		$btnDetalles = '<a class="btn btn-primary" href="Details.php?IdUsuario='.$IdUsuario.'">Detalles</a>';
		$btnModificar = '<a class="btn btn-warning" href="Edit.php?IdUsuario='.$IdUsuario.'">Modificar</a>';
		$btnEliminar = '<a class="btn btn-danger" href="Delete.php?IdUsuario='.$IdUsuario.'">Eliminar</a>';

			echo "<tr><td>$Descripcion</td><td>$Correo</td><td>$Usuario</td><td><center>$btnDetalles $btnModificar $btnEliminar</center></td></tr>";

		}
	 ?>
	 </tbody>
	 <tfoot>
	 	<tr>
	 		<td colspan="4"></td>
	 	</tr>
	 </tfoot>
	</table>

	<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('../../_footer.html'); ?>
</body>
<?php include_once('../../_scriptsFooter.php') ?>
</html>
