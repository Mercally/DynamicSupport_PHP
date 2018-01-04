<!doctype html>
<html lang="es"><!-- InstanceBegin template="/Templates/masterpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>dTs Admin | Clientes</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
	<meta charset="utf-8" />
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <link href="../css/bootstrap.css" rel="stylesheet" />
	<link href="../css/ct-navbar.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/6833ba1e36.js"></script>
</head>
<body>
  
 <div id="navbar-full">
    <div id="navbar">
     
       <!--    
        navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange  
        -->
        <nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand navbar-brand-logo" href="../index.html">
                    <div class="logo">
                    <img src="../img/DTS-logo.png">
                    </div>
                    <div class="brand"> Dynamict Tech Support </div>
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a href="javascript:void(0);" data-toggle="search" class="hidden-xs">
                            <i class="fa fa-search" style="font-size: 35px;" ></i>
                            <p>Search</p>
                        </a>
                    </li>
                     <li>
                        <a href="../dispositivos.html">
                            <i class="fa fa-power-off" style="font-size: 30px;" aria-hidden="true"></i>
                            <p>Dispositivos</p>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-handshake-o" style="font-size: 35px;" aria-hidden="true"></i>
                                <p>Servicios <b class="caret"></b></p>
                            </a>
                          <ul class="dropdown-menu">
                            <li>
                            <a href="../servicios/mantenimiento.html">
                            <i class="fa fa-medkit" aria-hidden="true"></i>&nbsp; Mantenimiento
                            </a>
                            </li>
                            <li>
                            <a href="../servicios/instalacion.html">
                            <i class="fa fa-download" aria-hidden="true"></i>&nbsp; Instalación
                            </a>
                            </li>
                            <li>
                            <a href="../servicios/configuracion.html">
                            <i class="fa fa-gear" aria-hidden="true"></i>&nbsp; Configuración
                            </a>
                            </li>
                            <li>
                            <a href="../servicios/diagnostico.html">
                            <i class="fa fa-area-chart" aria-hidden="true"></i>&nbsp; Diagnóstico
                            </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                            <a href="../preguntas.html">Preguntas frecuentes</a>
							</li>
                          </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-info" style="font-size: 30px;" aria-hidden="true"></i>
                            <p>Acerca de <b class="caret"></b></p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                            <a href="../nosotros.html">
                            <i class="fa fa-users" aria-hidden="true"></i>&nbsp; Nosotros
                            </a>
                            </li>
                            <li>
                            <a href="../opinion.html">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp; Comentarios
                            </a>
                            </li>
                          </ul>
                    </li>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user-o" style="font-size: 30px;" aria-hidden="true"></i>
                            <p>Cuenta <b class="caret"></b></p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                            <a href="#" data-toggle="modal" data-target="#loginModal">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Iniciar sesión
                            </a>
                            </li>
                            <li>
                            <a href="#">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Registrarse
                            </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                            <a href="../recuperarcontrasenia.html">Olvide la contraseña</a>
							</li>
                          </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-database" style="font-size: 30px;" aria-hidden="true"></i>
                            <p>Administrar<b class="caret"></b></p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                            <a href="../admin/empleado.html">
                            <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; Empleados
                            </a>
                            </li>
                            <li>
                            <a href="../admin/cliente.html">
                            <i class="fa fa-users" aria-hidden="true"></i>&nbsp; Clientes
                            </a>
                            <a href="../admin/pregunta.html">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp; Preguntas frecuentes
                            </a>
                            </li>
                          </ul>
                    </li>
                    
              </ul>
              <form class="navbar-form navbar-right navbar-search-form" role="search">                  
                 <div class="form-group">
                      <input type="text" value="" class="form-control" placeholder="Buscar...">
                 </div> 
              </form>        
            </div>
          </div>
        </nav>
       <div class="blurred-container">
           	
            <div class="img-src" style="background-image: url('../img/servicio-soporte-virtual.jpg')">
            <div style="width: 80%">
           	<p class="bienvenida" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">Bienvenido a la nueva era en la nube</p>
           	</div>
            </div>
       </div>
  </div>
</div>
<!-- Formulario de login-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			 <h4 class="modal-title"><i class="fa fa-sign-in" aria-hidden="true"></i> Inicio de Sesión</h4>
		 </div>
		 <div class="modal-body">
			 <form id="loginForm" method="post" class="form-horizontal" action="">
				 <div class="form-group">
					 <label class="col-md-3 control-label">Nombre de Usuario</label>
					 <div class="col-md-7">
						<input type="text" class="form-control" name="usuario" required />
					 </div>
				 </div>
				 <div class="form-group">
		 			<label class="col-md-3 control-label">Password</label>
					 <div class="col-md-7">
						 <input type="password" class="form-control" name="password" required />
					 </div>
				 </div>
				 <div class="form-group">
					 <div class="col-md-5 col-md-offset-3">
						 <button type="submit" class="btn btn-success">Iniciar sesión</button>
					 </div>
				 </div>
				 <div class="divider">
				 	<a href="#" class="btn-link">Registrarme</a> - <a href="#" class="btn-link">Olvidé la contraseña</a>
				 </div>
			 </form>
		 </div>
	 </div>
</div>
</div>
<!-- FIN Formulario de login-->
<div class="main">
<div class="social">
    <ul>
        <li><a href="#" id="twitter"><i class="fa fa-twitter-square" style="color:white;" aria-hidden="true"></i></a></li>
        <li><a href="#" id="facebook"><i class="fa fa-facebook-square" style="color:white;" aria-hidden="true"></i></a></li>
        <li><a href="#" id="youtube"><i class="fa fa-youtube-play" style="color:white;" aria-hidden="true"></i></a></li>
    </ul>
</div>
<main class="container">

<!-- TODO EL CODIGO PRINCIPAL -->
<!-- InstanceBeginEditable name="contenido" -->
<h2>Administrar - Clientes</h2>
<p>En esta página podrá administrar los clientes de la empresa...</p>
<hr>

<form name="frm-nuevoCliente" method="post" action="#" class="frm-servicio">
<div class="form-group">
	Tipo Cliente:
	<select name="IdTipoCliente" class="form-control">
		<option value="1">Natural</option>
		<option value="2">Jurídico</option>
	</select>

	Nombre:
	<input type="text" required name="Nombre" maxlength="25" class="form-control">

	Apellido:
	<input type="text" required name="Apellido" maxlength="25" class="form-control">

	Fecha de Nacimiento:
	<input type="date" name="Fecha" class="form-control">
<br>
	<input type="submit" name="IdIngresar Datos" value="Ingresar Datos" class="btn btn-primary">
	<input type="reset" name="IdLimpiar" value="Limpiar" class="btn btn-default">
</div>
</form>
<!-- InstanceEndEditable -->
<div style="width: 100%; height: 100px;"></div>
</main>
    <footer class="panel-footer" style="width:100%; padding-top:100px">
    <div class="space-100"></div>
    <p class="text-center">Todos los derechos reservados - Dynamict Tech Support&copy; 2017, hecho con <i class="fa fa-html5" aria-hidden="true"></i> y <i class="fa fa-css3" aria-hidden="true"></i></p>
  </footer>
</div>
<!-- end container -->
</body>

<script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>
<script src="../js/ct-navbar.js"></script>
	

<!-- InstanceEnd --></html>
