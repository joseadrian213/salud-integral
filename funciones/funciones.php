<?php

class Funciones
{
  // Permite convertir algunos parámetros de código PHP a entidades HTML, esto con el objetivo de evitar 
// inyección de código y modificación del mismo. 


  public function validar($datos)
  {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
  }
}

?>