<html>
<body>

<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			 <h4 class="modal-title"><i class="fa fa-sign-in" aria-hidden="true"></i> Registro de usuario</h4>
		 </div>
		 <div class="modal-body">
			 <?php
			 echo '<form id="signinForm" method="post" class="form-horizontal" action="'.$dirBackend.'/signin.php">';
			  ?>
				 <div class="form-group">
					 <label class="col-md-3 control-label">Nombre de Usuario</label>
					 <div class="col-md-7">
						<input type="text" class="form-control" maxlength="10" name="usuario" required />
					 </div>
				 </div>
				 <div class="form-group">
					 <label class="col-md-3 control-label">Correo</label>
					 <div class="col-md-7">
						<input type="email" class="form-control" maxlength="25" name="email" required />
					 </div>
				 </div>
				 <div class="form-group">
		 			<label class="col-md-3 control-label">Contraseña</label>
					 <div class="col-md-7">
						 <input type="password" class="form-control" maxlength="10" name="contrasenia" required />
					 </div>
				 </div>
				 <div class="form-group">
					 <div class="col-md-5 col-md-offset-3">
						 <button type="submit" class="btn btn-success">Registrarse</button>
					 </div>
				 </div>
				 <div class="divider">
					 <?php
					 echo '<a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Iniciar sesión</a>';
					 echo " - ";
					 echo '<a href="'.$dirFrontEnd.'/recuperarcontrasenia.php" class="btn-link">Olvidé la contraseña</a>';
						?>
				 </div>
			 </form>
		 </div>
	 </div>
</div>
</div>

</body>
</html>
