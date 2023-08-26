<?php
include ('../funciones/funciones.php');

$conn = pg_connect('host=localhost dbname=salud_integral user=postgres password=123');


// Compropbacion de datos no nulos 
if (isset($_POST['nombre']) && isset($_POST['apellidop']) && isset($_POST['apellidom']) && isset($_POST['fecha']) && isset($_POST['llave_acceso']) && isset($_POST['contrasena']) && isset($_POST['recontrasena']) && isset($_POST['calle']) && isset($_POST['exterior']) && isset($_REQUEST['correop']) && isset($_REQUEST['correoa']) && isset($_REQUEST['telefonop']) && isset($_REQUEST['telefonoe']) && isset($_REQUEST['telefonor'])) {

  $funcion = new Funciones;

  $Nombre = $funcion -> validar($_POST['nombre']);
  $Apellidop = $funcion -> validar($_POST['apellidop']);
  $Apellidom = $funcion -> validar($_POST['apellidom']);
  $Fecha = $funcion -> validar($_POST['fecha']);
  $Sexo = $funcion -> validar($_POST['sexo']);
  $Curp = $funcion -> validar($_POST['llave_acceso']);
  $Contrasena = md5($funcion -> validar($_POST['contrasena']));
  $Recontrasena = md5($funcion -> validar($_POST['recontrasena']));
  $Calle = $funcion -> validar($_POST['calle']);
  $Exterior = $funcion -> validar($_POST['exterior']);
  $Correop = $funcion -> validar($_REQUEST['correop']);
  $Correoa = $funcion -> validar($_REQUEST['correoa']);
  $Telefonop = $funcion -> validar($_REQUEST['telefonop']);
  $Telefonoe = $funcion -> validar($_REQUEST['telefonoe']);
  $Telefonor = $funcion -> validar($_REQUEST['telefonor']);


  $user_data = 'Nombre=' . $Nombre . '&Apellidop' . $Apellidop . '&Apellidom' . $Apellidom . '&Curp' . $Curp . '&Contrasena' . $Contrasena . '&Calle' . $Calle . '&Exterior' . $Exterior . '&Correop' . $Correop . '&Correoa' . $Correoa . '&Telefonop' . $Telefonop . '&Telefonoe' . $Telefonoe . '&Telefonor' . $Telefonor;



  //Se capturan errores al insertar datos 
  if (empty($Nombre)) {
    header("Location: ../informacion_general_usuario/registro.php?error=Nombre de usuario requerido");
    exit();
  } else if (empty($Apellidop)) {
    header("Location: ../informacion_general_usuario/registro.php?error=Apellido paterno requerido");
    exit();
  } else if (empty($Apellidom)) {
    header("Location: ../informacion_general_usuario/registro.php?error=Apellido materno requerido");
    exit();
  } else if (empty($Calle)) {
    header("Location: ../informacion_general_usuario/registro.php?error=Calle requerida");
    exit();
  } else if (empty($Exterior)) {
    header("Location: ../informacion_general_usuario/registro.php?error=Numero exterior requerido");
    exit();
  } else if (empty($Correop)) {
    header("Location: ../informacion_general_usuario/registro.php?error=Correo Personal requerido");
    exit();
  } else if (empty($Correoa)) {
    header("Location: ../informacion_general_usuario/registro.php?error=Correo Adicional requerido");
    exit();
  } elseif ($Correoa == $Correop) {
    header("Location: ../informacion_general_usuario/registro.php?error=Correos adicional duplicado");
    exit();
  } else if (empty($Telefonop)) {
    header("Location: ../informacion_general_usuario/registro.php?error=Telefono personal requerido");
    exit();
  } else if (empty($Telefonoe)) {
    header("Location: ../informacion_general_usuario/registro.php?error=Telefono emergencia requerido");
    exit();
  } elseif ($Telefonoe == $Telefonop) {
    header("Location: ../informacion_general_usuario/registro.php?error=El telefono de emergencia debe ser distinto");
    exit();
  } else if (empty($Telefonor)) {
    header("Location: ../informacion_general_usuario/registro.php?error=Telefono recado requerido");
    exit();
  } else if ($Contrasena !== $Recontrasena) {
    header("Location: ../informacion_general_usuario/registro.php?error=La contraseña no coincide&$user_data");
    exit();
  }

  $funcion -> validar_clave($Contrasena);
 
  

  //  Se validan los datos del usuario en caso de exitir se manda el error  
  $sql = "SELECT * FROM users WHERE curp = '$Curp'";
  $resultado = pg_query($conn, $sql);

  if (pg_num_rows($resultado) > 0) {
    header("Location: ../informacion_general_usuario/registro.php?error=CURP ya registrado");
    exit();
  } else if ($resultado) {
    if (filter_var($Correop, FILTER_VALIDATE_EMAIL)) {
      if (filter_var($Correoa, FILTER_VALIDATE_EMAIL)) {

        // Se capturan datos nulos en caso de no serlo se insertan en la base de datos 
        if (isset($_REQUEST['paciente']) && isset($_REQUEST['asesor']) && isset($_REQUEST['administrador'])) {

          $sql = "INSERT INTO users(name, lastname_paternal, lastname_mother, fecha_de_nacimiento, sexo, curp, calle, numero_exterior, email, correo_adicional, telefono_personal, telefono_emergencia, telefono_recado, password, paciente, asesor_salud, administrador) VALUES('$Nombre', '$Apellidop', '$Apellidom', '$Fecha', '$Sexo','$Curp', '$Calle', '$Exterior', '$Correop', '$Correoa', '$Telefonop', '$Telefonoe', '$Telefonor' ,'$Contrasena', '$_REQUEST[paciente]', '$_REQUEST[asesor]', '$_REQUEST[administrador]')";

        } elseif (isset($_REQUEST['paciente']) && isset($_REQUEST['asesor'])) {

          $sql = "INSERT INTO users(name, lastname_paternal, lastname_mother, fecha_de_nacimiento, sexo,curp, calle, numero_exterior, email, correo_adicional, telefono_personal, telefono_emergencia, telefono_recado, password, paciente, asesor_salud) VALUES('$Nombre', '$Apellidop', '$Apellidom', '$Fecha', '$Sexo','$Curp', '$Calle', '$Exterior', '$Correop', '$Correoa', '$Telefonop', '$Telefonoe', '$Telefonor' ,'$Contrasena', '$_REQUEST[paciente]', '$_REQUEST[asesor]')";


        } elseif (isset($_REQUEST['paciente']) && isset($_REQUEST['administrador'])) {

          $sql = "INSERT INTO users(name, lastname_paternal, lastname_mother, fecha_de_nacimiento,sexo,curp, calle, numero_exterior, email, correo_adicional, telefono_personal, telefono_emergencia, telefono_recado, password, paciente, administrador) VALUES('$Nombre', '$Apellidop', '$Apellidom', '$Fecha', '$Sexo','$Curp', '$Calle', '$Exterior', '$Correop', '$Correoa', '$Telefonop', '$Telefonoe', '$Telefonor' ,'$Contrasena', '$_REQUEST[paciente]', '$_REQUEST[administrador]')";

        } else if (isset($_REQUEST['administrador']) and isset($_REQUEST['asesor'])) {

          $sql = "INSERT INTO users(name, lastname_paternal, lastname_mother, fecha_de_nacimiento,sexo,curp, calle, numero_exterior, email, correo_adicional, telefono_personal, telefono_emergencia, telefono_recado, password, asesor_salud, administrador) VALUES('$Nombre', '$Apellidop', '$Apellidom', '$Fecha', '$Sexo','$Curp', '$Calle', '$Exterior', '$Correop', '$Correoa', '$Telefonop', '$Telefonoe', '$Telefonor' ,'$Contrasena', '$_REQUEST[asesor]', '$_REQUEST[administrador]')";

        } else if (isset($_REQUEST['paciente'])) {
          $sql = "INSERT INTO users(name, lastname_paternal, lastname_mother, fecha_de_nacimiento,sexo,curp, calle, numero_exterior, email, correo_adicional, telefono_personal, telefono_emergencia, telefono_recado, password, paciente) VALUES('$Nombre', '$Apellidop', '$Apellidom', '$Fecha', '$Sexo','$Curp', '$Calle', '$Exterior', '$Correop', '$Correoa', '$Telefonop', '$Telefonoe', '$Telefonor' ,'$Contrasena', '$_REQUEST[paciente]')";

        } else if (isset($_REQUEST['asesor'])) {

          $sql = "INSERT INTO users(name, lastname_paternal, lastname_mother, fecha_de_nacimiento,sexo,curp, calle, numero_exterior, email, correo_adicional, telefono_personal, telefono_emergencia, telefono_recado, password, asesor_salud) VALUES('$Nombre', '$Apellidop', '$Apellidom', '$Fecha', '$Sexo','$Curp', '$Calle', '$Exterior', '$Correop', '$Correoa', '$Telefonop', '$Telefonoe', '$Telefonor' ,'$Contrasena', '$_REQUEST[asesor]')";

        } else if (isset($_REQUEST['administrador'])) {

          $sql = "INSERT INTO users(name, lastname_paternal, lastname_mother, fecha_de_nacimiento,sexo,curp, calle, numero_exterior, email, correo_adicional, telefono_personal, telefono_emergencia, telefono_recado, password, administrador) VALUES('$Nombre', '$Apellidop', '$Apellidom', '$Fecha', '$Sexo','$Curp', '$Calle', '$Exterior', '$Correop', '$Correoa', '$Telefonop', '$Telefonoe', '$Telefonor' ,'$Contrasena', '$_REQUEST[administrador]')";

        }
        $result = pg_query($conn, $sql);
        if ($result) {
          header("Location: ../informacion_general_usuario/registro.php?success=Cuenta creada con exito&$user_data");
          exit();
        } else {
          header("Location: ../informacion_general_usuario/registro.php?error=Ocurrio un error desconocido&");
          exit();
        }
      }
    }
  }
}


?>