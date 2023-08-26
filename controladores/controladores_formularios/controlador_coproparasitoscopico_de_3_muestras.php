<?php
include ('../../funciones/funciones.php');
include('../../conexion_base_de_datos/conexion.php');

// Compropbacion de datos no nulos 

if (isset($_POST['coproparasitoscopico_1_muestra']) && isset($_POST['coproparasitoscopico_2_muestra']) && isset($_POST['coproparasitoscopico_3_muestra']) && isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['folio']) && isset($_SESSION['id_users'])) {

  $funcion = new Funciones;

  $Coproparasitoscopico_1_muestra = $funcion -> validar($_POST['coproparasitoscopico_1_muestra']);
  $Coproparasitoscopico_2_muestra = $funcion -> validar($_POST['coproparasitoscopico_2_muestra']);
  $Coproparasitoscopico_3_muestra = $funcion -> validar($_POST['coproparasitoscopico_3_muestra']);
  $Fecha = $funcion -> validar($_POST['fecha']);
  $Hora = $funcion -> validar($_POST['hora']);
  $Folio = $funcion -> validar($_POST['folio']);
  $Usuario = $funcion -> validar($_SESSION['id_users']);

  //Guardamos el valor de post en  session para mentener datos en input en caso de error  

  $_SESSION["fecha"] = $Fecha;
  $_SESSION["hora"] = $Hora;
  $_SESSION["folio"] = $Folio;
  $_SESSION["coproparasitoscopico_1_muestra"] = $Coproparasitoscopico_1_muestra;
  $_SESSION["coproparasitoscopico_2_muestra"] = $Coproparasitoscopico_2_muestra;
  $_SESSION["coproparasitoscopico_3_muestra"] = $Coproparasitoscopico_3_muestra;


  $user_data = 'Coproparasitoscopico_1_muestra=' . $Coproparasitoscopico_1_muestra . '&Coproparasitoscopico_2_muestra' . $Coproparasitoscopico_2_muestra . '&Coproparasitoscopico_3_muestra' . $Coproparasitoscopico_3_muestra . '&Fecha' . $Fecha . '&Folio' . $Folio;

  // Se capturan errores al rellenar campos 

  if (empty($Coproparasitoscopico_1_muestra)) {
    header("Location: ../../views_formularios_estudios/coproparasitoscopico_de_3_muestras.view.php?error=Campo Coproparasitoscopico 1 muestra es requerido");
    exit();
  } else if (empty($Coproparasitoscopico_2_muestra)) {
    header("Location: ../../views_formularios_estudios/coproparasitoscopico_de_3_muestras.view.php?error=Campo Coproparasitoscopico 2 muestra es requerido");
    exit();
  } else if (empty($Coproparasitoscopico_3_muestra)) {
    header("Location: ../../views_formularios_estudios/coproparasitoscopico_de_3_muestras.view.php?error=Campo Coproparasitoscopico 3 muestra es requerido");
    exit();
  }
  // Se insertan los datos en la tabla
  $sql = "INSERT INTO coproparasitoscopico_de_3_muestras(coproparasitoscopico_1_muestras, coproparasitoscopico_2_muestras, coproparasitoscopico_3_muestras) VALUES ('$Coproparasitoscopico_1_muestra', '$Coproparasitoscopico_2_muestra', '$Coproparasitoscopico_3_muestra')";


  // Se hacen las consultas  para rellenar tablas pivote o relacionadas 

  $consulta = "SELECT id_coproparasitoscopico_de_3_muestras FROM coproparasitoscopico_de_3_muestras";
  $fila = pg_query($consulta);
  $fila = pg_num_rows($fila);
  $fila = intval($fila) + 1;


  $sql3 = "INSERT INTO coproparasitoscopico_3_muestras(fecha_estudio, hora, folio,coproparasitoscopico_de_3_muestras_id) VALUES ('$Fecha', '$Hora','$Folio','$fila')";


  $sql4 = "INSERT INTO usuario_estudio(users_id,coproparasitoscopico_3_muestras_id)VALUES('$Usuario','$fila')";

  $sql6 = "INSERT INTO estudios(coproparasitoscopico_3_muestras_id)VALUES('$fila')";


  $result = pg_query($conn, $sql);
  $result2 = pg_query($conn, $sql3);
  $result3 = pg_query($conn, $sql4);
  $result4 = pg_query($conn, $sql6);




  if ($result && $result2 && $result3) {
    header("Location: ../../views_formularios_estudios/coproparasitoscopico_de_3_muestras.view.php?success=Resultados registrados&$user_data");
    exit();
  } else {
    header("Location: ../../views_formularios_estudios/coproparasitoscopico_de_3_muestras.view.php?error=Ocurrio un error desconocido&");
    exit();
  }


}




?>