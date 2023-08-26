<?php

class Funciones
{


  public function validar($datos)
  {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
  }

  // public function validar_clave($Contrasena, $user_data)
  // {
   


  //       if (!preg_match('`[a-z]`', $Contrasena)) {
  //         header("Location: ../informacion_general_usuario/registro.php?error=La contraseña debe contener minusculas&$user_data");
  //         exit();
  //       }
  //       if (!preg_match('`[A-Z]`', $Contrasena)) {
  //         header("Location: ../informacion_general_usuario/registro.php?error=La contraseña debe contener MAYUSCULAS&$user_data");
  //         exit();
  //       }
  //       if (!preg_match('`[0-9]`', $Contrasena)) {
  //         header("Location: ../informacion_general_usuario/registro.php?error=La contraseña debe contener numeros&$user_data");
  //         exit();
  //       }
  //       return true;
  //     }

  //   }
  function validar_clave($Contrasena)
  {
      return preg_match('/^((?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$)(?=.*[;:\.,!¡\?¿@#\$%\^&\-_+=\(\)\[\]\{\}])).{8,20}$/', $Contrasena)==1;
  }
}

?>