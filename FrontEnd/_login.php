<html>
<body>

<!-- Formulario de login-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			 <h4 class="modal-title"><i class="fa fa-sign-in" aria-hidden="true"></i> Inicio de Sesión</h4>
		 </div>
		 <div class="modal-body">
			 <?php
			 echo '<form id="loginForm" method="post" class="form-horizontal" action="'.$dirBackend.'/login.php">';
			  ?>
				 <div class="form-group">
					 <label class="col-md-3 control-label">Nombre de Usuario</label>
					 <div class="col-md-7">
						<input type="text" class="form-control" name="usuario" maxlenght="10" required />
					 </div>
				 </div>
				 <div class="form-group">
		 			<label class="col-md-3 control-label">Contreña</label>
					 <div class="col-md-7">
						 <input type="password" class="form-control" name="contrasenia" maxlenght="10" required />
					 </div>
				 </div>
				 <div class="form-group">
					 <div class="col-md-5 col-md-offset-3">
						 <button type="submit" class="btn btn-success">Iniciar sesión</button>
					 </div>
				 </div>
				 <div class="divider">
					 <?php
					 echo '<a href="#" data-toggle="modal" data-target="#signinModal" data-dismiss="modal">Registrarme</a>';
					 echo " - ";
					 echo '<a href="'.$dirFrontEnd.'/recuperarcontrasenia.php" class="btn-link">Olvidé la contraseña</a>';
						?>
				 </div>
			 </form>
		 </div>
	 </div>
</div>
</div>
<!-- FIN Formulario de login-->
</body>
</html>
