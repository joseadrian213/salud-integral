<?php
include ('../funciones/funciones.php');
include('../conexion_base_de_datos/conexion.php');

// validacion de credenciales de usuario
if (isset($_POST['llave_acceso']) && isset($_POST['contrasena'])) {
  $funcion = new Funciones;
  $funcion->validar($datos);

  $curp = $funcion->validar($_POST['llave_acceso']);
  $contrasena = md5($funcion->validar($_POST['contrasena']));
  // Se capturan los errores 
  if (empty($curp)) {
    header("Location: ../index.php?error=CURP de usuario requerido");
    exit();
  } else if (empty($contrasena)) {
    header("Location: ../index.php?error=Contraseña requerida");
    exit();
  } else {

    $sql = "SELECT * FROM users WHERE curp='$curp' AND password='$contrasena'";

    $result = pg_query($conn, $sql);
    // Se verifican que los datos del usuario sean correctos 
    if (pg_num_rows($result) === 1) {
      $row = pg_fetch_assoc($result);
      if ($row['curp'] === $curp && $row['password'] === $contrasena) {
        $_SESSION['id_users'] = $row['id_users'];
        $_SESSION['name'] = $row['name'];
        header("Location: ../menus/menu_principal.php");
        exit();
      }

    } else {
      header("Location: ../index.php?error=CURP o contraseña incorrectas");
      exit();
    }
  }

}


?>