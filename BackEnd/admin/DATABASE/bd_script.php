<?php

$host = $_REQUEST['host'];
$user = $_REQUEST['user'];
$db = $_REQUEST['name'];
$pass = $_REQUEST['pass'];
$instalar = $_REQUEST['instalar'];

//$borrar = $_REQUEST['borrar'];

require('/../../functions.php');

if($instalar){
  instalarBD($host, $user, $pass, $db);
}

/*
if($borrar){
  borrarDB();
}

function borrarDB(){
  //  variable con la conexion
    $conectado =  mysql_connect($host, $user, $pass, $db);
    if($conectado){
    $consultaDropBD = "DROP DATABASE $db;";
    $ejecutarConsulta = mysql_query($consultaDropBD, $conectado);
    if($ejecutarConsulta){
      echo "<scrip>alert('Correcto, base de datos eliminada exitosamente.');</script>";
    }else{
      echo "<scrip>alert('Error, no se eliminó la base de datos.');</script>";
    }
  }else{
    echo "<scrip>alert('Alerta, no tiene accesso al SGBD.');</script>";
  }
}*/

function instalarBD($host, $user, $pass, $db){
        //  variable con la conexion
          $conectado =  mysql_connect($host, $user, $pass, $db);

            //  creando la Base de Datos
            $consultaCrearBD = "create database if not exists $db;";
            $ejecutarConsulta = mysql_query($consultaCrearBD, $conectado);

            //  Seleccionando la Base de Datos recien creada
            mysql_select_db($db, $conectado);


            /*  ------------ INICIO CODIGO TABLA ASISTENCIA ------------ */

            //  Si la tabla existe, este codigo la elimina
            $dropTabla = "drop table if exists Asistencia;";
            $ejecutarConsulta = mysql_query($dropTabla, $conectado);

            //  Creando la tabla Asistencia
             $creartabla = "create table Asistencia(
                    IdAsistencia int primary key auto_increment,
                    IdTipoAsistencia int not null,
                    Fecha Date not null,
                    Hora Time not null,
                    Comentario varchar(150),
                    IdCliente int not null,
                    IdEmpleado int not null);";

             $ejecutarConsulta = mysql_query($creartabla, $conectado);

             // Insertando 10 registros
             $insertarRegistros =
              "insert into Asistencia(IdTipoAsistencia, Fecha, Hora, Comentario, IdCliente, IdEmpleado )
              values(1, '2017-01-01', '8:30:40', 'Primer Comentario', 1, 1),
                    (2, '2017-02-02', '9:30:40', 'Segundo Comentario', 2, 2),
                    (3, '2017-03-03', '10:30:40', 'Tercer Comentario', 3, 3),
                    (1, '2017-04-04', '11:30:40', 'Cuarto Comentario', 4, 4),
                    (2, '2017-05-05', '12:30:40', 'Quinto Comentario', 5, 5),
                    (3, '2017-06-06', '11:30:40', 'Sexto Comentario', 6, 6),
                    (1, '2017-07-07', '8:30:40', 'Septimo Comentario', 7, 7),
                    (2, '2017-08-08', '8:30:40', 'Octavo Comentario', 8, 8),
                    (3, '2017-09-09', '9:30:40', 'Noveno Comentario', 9, 9),
                    (1, '2017-10-10','10:30:40', 'Decimo Comentario', 10, 10);";

              $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

            /*  ------------ FIN CODIGO TABLA ASISTENCIA ------------ */

            /*  ------------ INICIO CODIGO TABLA CLIENTE ------------ */

            //  Si la tabla existe, este codigo la elimina
            $dropTabla = "drop table if exists Cliente;";
            $ejecutarConsulta = mysql_query($dropTabla, $conectado);

            //  Creando la tabla Cliente
             $creartabla = "create table Cliente(
                    IdCliente int primary key auto_increment,
                    IdTipoCliente int not null,
                    Nombre varchar(50) not null,
                    Apellido varchar(50) not null,
                    FechaNacimiento date not null);";

             $ejecutarConsulta = mysql_query($creartabla, $conectado);

             $insertarRegistros =
              "insert into Cliente(IdTipoCliente, Nombre, Apellido, FechaNacimiento)
              values(1, 'Charles', 'Xavier', '1995-01-01'),
                    (1, 'Bruce', 'Banner', '1996-01-01'),
                    (1, 'Peter', 'Parker', '1992-02-02'),
                    (1, 'Logan', 'Creed', '1993-03-01'),
                    (1, 'Steve', 'Rogers', '1991-07-09'),
                    (1, 'Bruce', 'Wayne', '1990-04-05'),
                    (1, 'Tony', 'Starks', '1992-02-08'),
                    (1, 'Hawk', 'Eye', '1995-11-01'),
                    (1, 'Black', 'Widow', '1983-06-08'),
                    (1, 'Thord', 'Asgardian', '1985-11-01');";

              $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

          /*  ------------ FIN CODIGO TABLA CLIENTE ------------ */


          /*  ------------ INICIO CODIGO TABLA DEPARTAMENTO ------------ */

          //  Si la tabla existe, este codigo la elimina
          $dropTabla = "drop table if exists Departamento;";
          $ejecutarConsulta = mysql_query($dropTabla, $conectado);

          //  Creando la tabla Departamento
           $creartabla = "create table Departamento(
                  IdDepartamento int primary key auto_increment,
                  Nombre varchar(50) not null);";

           $ejecutarConsulta = mysql_query($creartabla, $conectado);

           $insertarRegistros =
            "insert into Departamento(Nombre)
            values('Operaciones'),
                  ('Recursos Humanos'),
                  ('IT'),
                  ('Mercadeo'),
                  ('Gerencia'),
                  ('Mantenimiento'),
                  ('Desarrolladores'),
                  ('Tecnicos'),
                  ('Supervisores'),
                  ('Ingenieria');";

            $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

        /*  ------------ FIN CODIGO TABLA DEPARTAMENTO ------------ */

        /*  ------------ INICIO CODIGO TABLA DIAGNOSTICO ------------ */

        //  Si la tabla existe, este codigo la elimina
        $dropTabla = "drop table if exists Diagnostico;";
        $ejecutarConsulta = mysql_query($dropTabla, $conectado);

        //  Creando la tabla Diagnostico
         $creartabla = "create table Diagnostico(
                          IdDiagnostico int(11) primary key NOT NULL AUTO_INCREMENT,
                          IdTipoDiagnostico int(11) NOT NULL,
                          Fecha date NOT NULL,
                          Hora time NOT NULL,
                          Comentario varchar(150) CHARACTER SET utf8 DEFAULT NULL,
                          IdCliente int(11) NOT NULL,
                          IdEmpleado int(11) NOT NULL
                        );";

         $ejecutarConsulta = mysql_query($creartabla, $conectado);

         $insertarRegistros =
          "insert into Diagnostico(IdTipoDiagnostico, Fecha, Hora, Comentario, IdCliente, IdEmpleado )
          values(1, '2017-01-01', '8:30:40', 'Primer Comentario', 1, 1),
                (0, '2017-02-02', '9:30:40', 'Segundo Comentario', 2, 2),
                (0, '2017-03-03', '10:30:40', 'Tercer Comentario', 3, 3),
                (1, '2017-04-04', '11:30:40', 'Cuarto Comentario', 4, 4),
                (0, '2017-05-05', '12:30:40', 'Quinto Comentario', 5, 5),
                (0, '2017-06-06', '11:30:40', 'Sexto Comentario', 6, 6),
                (1, '2017-07-07', '8:30:40', 'Septimo Comentario', 7, 7),
                (0, '2017-08-08', '8:30:40', 'Octavo Comentario', 8, 8),
                (0, '2017-09-09', '9:30:40', 'Noveno Comentario', 9, 9),
                (1, '2017-10-10','10:30:40', 'Decimo Comentario', 10, 10);";

          $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

      /*  ------------ FIN CODIGO TABLA DIAGNOSTICO ------------ */

      /*  ------------ INICIO CODIGO TABLA DISPOSITIVOS ------------ */

      //  Si la tabla existe, este codigo la elimina
      $dropTabla = "drop table if exists Dispositivos;";
      $ejecutarConsulta = mysql_query($dropTabla, $conectado);

      //  Creando la tabla Dispositivos
       $creartabla = "create table Dispositivos(
                  DispositivoId int(11) NOT NULL primary key AUTO_INCREMENT,
                  Nombre varchar(50) CHARACTER SET utf8 NOT NULL,
                  Descripcion varchar(150) CHARACTER SET utf8 DEFAULT NULL);";

       $ejecutarConsulta = mysql_query($creartabla, $conectado);

       $insertarRegistros =
        "insert into Dispositivos(Nombre, Descripcion)
        values('Laptop', 'De marcas comunes'),
              ('Smartphones', 'De marcas comunes'),
              ('Desktops', 'De marcas comunes'),
              ('SmartTV', 'De marcas comunes'),
              ('Tablets', 'De marcas comunes'),
              ('MP3', 'De marcas comunes');";

        $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

    /*  ------------ FIN CODIGO TABLA DISPOSITIVOS ------------ */

    /*  ------------ INICIO CODIGO TABLA EMPLEADO ------------ */

    //  Si la tabla existe, este codigo la elimina
    $dropTabla = "drop table if exists Empleado;";
    $ejecutarConsulta = mysql_query($dropTabla, $conectado);

    //  Creando la tabla Empleado
     $creartabla = "create table Empleado (
                    IdEmpleado int(11) primary key NOT NULL AUTO_INCREMENT,
                    Nombre varchar(50) CHARACTER SET utf8 NOT NULL,
                    Apellido varchar(50) CHARACTER SET utf8 NOT NULL,
                    Edad int(11) NOT NULL,
                    Telefono int(11) NOT NULL,
                    IdPuestoDepartamento int(11) NOT NULL
                  );";

     $ejecutarConsulta = mysql_query($creartabla, $conectado);

     $insertarRegistros =
      "insert into Empleado(Nombre, Apellido, Edad, Telefono, IdPuestoDepartamento)
      values('Elpa', 'Lito', 23, 23452389, 1),
            ('Soyla', 'Mesa', 43, 23412789, 2),
            ('Aventu', 'Rero', 23, 23546789, 3),
            ('Yoque', 'se', 23, 23454489, 4),
            ('Cami', 'Nando', 33, 23226789, 5),
            ('Vaori', 'Nar', 63, 23466789, 1),
            ('Yaco', 'Miste', 26, 23346789, 2),
            ('Elpa', 'Sito', 53, 23499789, 3),
            ('Baca', 'lao', 25, 23450089, 4),
            ('Alan', 'Brito', 20, 23336789, 5),
            ('Despa', 'Sito', 53, 23499789, 1);";

      $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

  /*  ------------ FIN CODIGO TABLA EMPLEADO ------------ */

  /*  ------------ INICIO CODIGO TABLA MANTENIMIENTO` ------------ */

  //  Si la tabla existe, este codigo la elimina
  $dropTabla = "drop table if exists Mantenimiento;";
  $ejecutarConsulta = mysql_query($dropTabla, $conectado);

  //  Creando la tabla Mantenimiento
   $creartabla = "create table Mantenimiento(
                 ID INT(11) primary key NOT NULL AUTO_INCREMENT,
                 TipoMantenimiento VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL,
                 Dispositivos VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL,
                 Hora TIME DEFAULT NULL,
                 Comentario VARCHAR(150) CHARACTER SET utf8 DEFAULT NULL);";

   $ejecutarConsulta = mysql_query($creartabla, $conectado);

   $insertarRegistros =
    "insert into Mantenimiento(TipoMantenimiento, Dispositivos, Hora, Comentario)
    values(1, '1', '8:30:40', 'se me arruino la pc'),
          (1, '2', '9:30:40', 'no enciende'),
          (1, '3', '10:30:40', 'el bb vomito en mi pc'),
          (1, '4', '11:30:40', 'no tiene audio'),
          (1, '5', '12:30:40', 'no tiene imagen'),
          (1, '1', '13:30:40', 'se friza'),
          (1, '2', '14:30:40', 'se pone lenta'),
          (1, '3', '15:30:40', 'hace ruido'),
          (1, '4', '16:30:40', 'no me deja digitar'),
          (1, '5', '17:30:40', 'el raton no responde'),;";

    $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA MANTENIMIENTO ------------ */

/*  ------------ INICIO CODIGO TABLA PREGUNTA ------------ */

//  Si la tabla existe, este codigo la elimina
$dropTabla = "drop table if exists Pregunta;";
$ejecutarConsulta = mysql_query($dropTabla, $conectado);

//  Creando la tabla Pregunta
 $creartabla = "create table Pregunta(
                PreguntaId int(11) primary key NOT NULL AUTO_INCREMENT,
                Dispositivo int(11) NOT NULL,
                Nombre varchar(50) CHARACTER SET utf8 NOT NULL,
                Descripcion varchar(150) CHARACTER SET utf8 NOT NULL);";

 $ejecutarConsulta = mysql_query($creartabla, $conectado);

 $insertarRegistros =
  "insert into Pregunta(Dispositivo, Nombre, Descripcion)
  values(1, 'Laptop', 'De marcas comunes'),
        (2, 'Smartphones', 'De marcas comunes'),
        (3, 'Desktops', 'De marcas comunes'),
        (4, 'SmartTV', 'De marcas comunes'),
        (5, 'Tablets', 'De marcas comunes'),
        (6, 'Laptop', 'De marcas comunes'),
        (7, 'Smartphones', 'De marcas comunes'),
        (8, 'Desktops', 'De marcas comunes'),
        (9, 'SmartTV', 'De marcas comunes'),
        (10, 'Tablets', 'De marcas comunes'),
        (11, 'MP3', 'De marcas comunes');";

  $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA PREGUNTA ------------ */

/*  ------------ INICIO CODIGO TABLA PUESTO ------------ */

//  Si la tabla existe, este codigo la elimina
$dropTabla = "drop table if exists Puesto;";
$ejecutarConsulta = mysql_query($dropTabla, $conectado);

//  Creando la tabla Puesto
 $creartabla = "create table Puesto (
                IdPuesto int(11) primary key NOT NULL AUTO_INCREMENT,
                Nombre varchar(50) CHARACTER SET utf8 NOT NULL,
                SalarioBase float NOT NULL,
                EsDisponible binary(1) NOT NULL);";

 $ejecutarConsulta = mysql_query($creartabla, $conectado);

 $insertarRegistros =
  "insert into Puesto(Nombre, SalarioBase, EsDisponible)
  values('Especialista en HW Windows', 1200.00, 1),
        ('Especialista en HW MAC', 1300.00, 1),
        ('Especialista en HW Android', 1200.00, 1),
        ('Especialista en HW iOS', 1300.00, 0),
        ('Especialista en HW Linux', 1200.00, 1),
        ('Especialista en SW Windows ', 1400.00, 1),
        ('Especialista en SW MAC', 1200.00, 1),
        ('Especialista en SW Andriod', 1300.00, 0),
        ('Especialista en SW iOS', 1500.00, 1),
        ('Especialista en SW Linux', 1200.00, 1);";

  $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA PUESTO ------------ */

/*  ------------ INICIO CODIGO TABLA PUESTODEPARTAMENTO ------------ */

//  Si la tabla existe, este codigo la elimina
$dropTabla = "drop table if exists PuestoDepartamento;";
$ejecutarConsulta = mysql_query($dropTabla, $conectado);

//  Creando la tabla PuestoDepartamento
 $creartabla = "create table PuestoDepartamento (
                IdPuestoDepartamento int(11) primary key NOT NULL AUTO_INCREMENT,
                IdPuesto int(11) NOT NULL,
                IdDepartamento int(11) NOT NULL);";

 $ejecutarConsulta = mysql_query($creartabla, $conectado);

 $insertarRegistros =
  "insert into PuestoDepartamento(IdPuesto, IdDepartamento)
  values(1, 1),
        (2, 2),
        (3, 3),
        (4, 4),
        (5, 5),
        (6, 6),
        (7, 7),
        (8, 8),
        (9, 9),
        (10, 10);";

  $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA PUESTODEPARTAMENTO ------------ */


/*  ------------ INICIO CODIGO TABLA SOPORTE ------------ */

//  Si la tabla existe, este codigo la elimina
$dropTabla = "drop table if exists Soporte;";
$ejecutarConsulta = mysql_query($dropTabla, $conectado);

//  Creando la tabla Soporte
 $creartabla = "create table Soporte (
  SoporteId int(11) primary key NOT NULL AUTO_INCREMENT,
  Correo varchar(150) CHARACTER SET utf8 NOT NULL,
  Telefono varchar(8) CHARACTER SET utf8 NOT NULL,
  Comentario varchar(150) CHARACTER SET utf8 NOT NULL);";

 $ejecutarConsulta = mysql_query($creartabla, $conectado);

 $insertarRegistros =
  "insert into Soporte(Correo, Telefono, Comentario)
  values('uncorreo@mail.com', '11111111', 'comentario soporte'),
        ('doscorreo@mail.com', '22222222', 'comentario soporte'),
        ('trescorreo@mail.com', '33333333', 'comentario soporte'),
        ('cuatrocorreo@mail.com', '44444444', 'comentario soporte'),
        ('cincocorreo@mail.com', '55555555', 'comentario soporte'),
        ('seiscorreo@mail.com', '66666666', 'comentario soporte'),
        ('sietecorreo@mail.com', '77777777', 'comentario soporte'),
        ('ochocorreo@mail.com', '88888888', 'comentario soporte'),
        ('nuevecorreo@mail.com', '99999999', 'comentario soporte'),
        ('diezcorreo@mail.com', '12345678', 'comentario soporte');";

  $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA SOPORTE ------------ */

/*  ------------ INICIO CODIGO TABLA TIPOASISTENCIA ------------ */

//  Si la tabla existe, este codigo la elimina
$dropTabla = "drop table if exists TipoAsistencia;";
$ejecutarConsulta = mysql_query($dropTabla, $conectado);

//  Creando la tabla TipoAsistencia
 $creartabla = "create table TipoAsistencia (
                IdTipoAsistencia int(11) primary key NOT NULL AUTO_INCREMENT,
                Nombre varchar(50) CHARACTER SET utf8 NOT NULL);";

 $ejecutarConsulta = mysql_query($creartabla, $conectado);

 $insertarRegistros =
  "insert into TipoAsistencia(Nombre)
  values('Mantenimiento'),
        ('Configuracion'),
        ('Instalacion'),
        ('Diagnostico');";

  $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA TIPOASISTENCIA ------------ */

/*  ------------ INICIO CODIGO TABLA TIPOCLIENTE ------------ */

//  Si la tabla existe, este codigo la elimina
$dropTabla = "drop table if exists TipoCliente;";
$ejecutarConsulta = mysql_query($dropTabla, $conectado);

//  Creando la tabla TipoCliente
 $creartabla = "create table TipoCliente(
  IdTipoCliente int(11) primary key NOT NULL AUTO_INCREMENT,
  Nombre varchar(50) CHARACTER SET utf8 NOT NULL,
  EsDisponible binary(1) NOT NULL);";

 $ejecutarConsulta = mysql_query($creartabla, $conectado);

 $insertarRegistros =
  "insert into TipoCliente(Nombre, EsDisponible)
  values('Natural', 1),
        ('Juridico', 1),
        ('Natural', 1),
        ('Juridico', 1),
        ('Natural', 0),
        ('Juridico', 0),
        ('Natural', 0),
        ('Juridico', 1),
        ('Natural', 0),
        ('Natural', 0);";

  $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA TIPOCLIENTE ------------ */

/*  ------------ INICIO CODIGO TABLA TIPODIAGNOSTICO ------------ */

//  Si la tabla existe, este codigo la elimina
$dropTabla = "drop table if exists TipoDiagnostico;";
$ejecutarConsulta = mysql_query($dropTabla, $conectado);

//  Creando la tabla TipoDiagnostico
 $creartabla = "create table TipoDiagnostico(
                IdTipoDiagnostico int(11) primary key NOT NULL AUTO_INCREMENT,
                Nombre varchar(50) CHARACTER SET utf8 NOT NULL);";

 $ejecutarConsulta = mysql_query($creartabla, $conectado);

 $insertarRegistros =
  "insert into TipoDiagnostico(Nombre)
  values('Hardware'),
        ('Hardware'),
        ('Hardware'),
        ('Hardware'),
        ('Hardware'),
        ('Software'),
        ('Software'),
        ('Software'),
        ('Software'),
        ('Software');";

  $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA TIPODIAGNOSTICO ------------ */


/*  ------------ INICIO CODIGO TABLA TIPOMANTENIMIENTO ------------ */

//  Si la tabla existe, este codigo la elimina
$dropTabla = "drop table if exists TipoMantenimiento;";
$ejecutarConsulta = mysql_query($dropTabla, $conectado);

//  Creando la tabla TipoMantenimiento
 $creartabla = "create table TipoMantenimiento (
  IdTipoMantenimiento int(11) primary key NOT NULL AUTO_INCREMENT,
  Nombre varchar(50) CHARACTER SET utf8 NOT NULL);";

 $ejecutarConsulta = mysql_query($creartabla, $conectado);

 $insertarRegistros =
  "insert into TipoMantenimiento(Nombre)
  values('Hardware'),
        ('Hardware'),
        ('Hardware'),
        ('Hardware'),
        ('Hardware'),
        ('Software'),
        ('Software'),
        ('Software'),
        ('Software'),
        ('Software');";

  $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA TIPOMANTENIMIENTO ------------ */


/*  ------------ INICIO CODIGO TABLA TIPOUSUARIO ------------ */

//  Si la tabla existe, este codigo la elimina
$dropTabla = "drop table if exists TipoUsuario;";
$ejecutarConsulta = mysql_query($dropTabla, $conectado);

//  Creando la tabla TipoUsuario
 $creartabla = "create table TipoUsuario(
               TipoUsuarioId INT(11)primary key NOT NULL,
               Descripcion VARCHAR(50) CHARACTER SET utf8 NOT NULL);";

 $ejecutarConsulta = mysql_query($creartabla, $conectado);

 $insertarRegistros =
  "insert into TipoUsuario(TipoUsuarioId, Descripcion)
  values(0, 'Usuario regular'),
        (1, 'Administrador');";

  $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA TIPOUSUARIO ------------ */


/*  ------------ INICIO CODIGO TABLA USUARIO ------------ */

//  Si la tabla existe, este codigo la elimina
$dropTabla = "drop table if exists Usuario;";
$ejecutarConsulta = mysql_query($dropTabla, $conectado);

//  Creando la tabla Usuario
 $creartabla = "create table Usuario (
                IdUsuario int(11) primary key NOT NULL AUTO_INCREMENT,
                TipoUsuarioId int(11) NOT NULL,
                Correo varchar(25) CHARACTER SET utf8 NOT NULL,
                Usuario varchar(10) CHARACTER SET utf8 NOT NULL,
                Contrasenia varchar(10) CHARACTER SET utf8 NOT NULL);";

 $ejecutarConsulta = mysql_query($creartabla, $conectado);

 $insertarRegistros =
  "insert into Usuario(TipoUsuarioId, Correo, Usuario, Contrasenia)
  values(0, 'regular1@mail.com', 'regular1', 'password'),
        (0, 'regular2@mail.com', 'regular2', 'password'),
        (0, 'regular3@mail.com', 'regular3', 'password'),
        (0, 'regular4@mail.com', 'regular4', 'password'),
        (0, 'regular5@mail.com', 'regular4', 'password'),
        (1, 'admin1@mail.com', 'admin1', 'password1'),
        (1, 'admin2@mail.com', 'admin2', 'password1'),
        (1, 'admin3@mail.com', 'admin3', 'password1'),
        (1, 'admin4@mail.com', 'admin4', 'password1'),
        (1, 'admin5@mail.com', 'admin5', 'password1');";

  $ejecutarConsulta = mysql_query($insertarRegistros, $conectado);

/*  ------------ FIN CODIGO TABLA USUARIO ------------ */

            //  obteniendo respuesta por algun error
             if($ejecutarConsulta){
                 echo("la base de datos y la tabla fueron creados satisfactoriamente.<br>");
             }else{
                 echo("ocurrio un error al crear la base de datos <br>");
                 echo("el codigo de error es: <br>".mysql_errno()."<br><br>");
             }

            @mysql_free_result($ejecutarConsulta);
            mysql_close($conectado);

          }
?>
