<?php
include ('../../funciones/funciones.php');
include('../../conexion_base_de_datos/conexion.php');

// Compropbacion de datos no nulos 

if (isset($_POST['color']) && isset($_POST['aspecto']) && isset($_POST['densidad']) && isset($_POST['ph']) && isset($_POST['glucosa']) && isset($_POST['proteinas']) && isset($_POST['sangre']) && isset($_POST['hemoglobina']) && isset($_POST['c_cetonicos']) && isset($_POST['bilirrubina']) && isset($_POST['urobilinogeno']) && isset($_POST['nitritos']) && isset($_POST['celulas_epiteliales']) && isset($_POST['leucocitos']) && isset($_POST['bacterias']) && isset($_POST['filamentos_de_mucina']) && isset($_POST['cristales_de_oxalato_de_calcio']) && isset($_POST['antigeno_especifico_de_prostata_PSA']) && isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['folio']) && isset($_SESSION['id_users'])) {

  $funcion = new Funciones;

  $Color = $funcion -> validar($_POST['color']);
  $Aspecto = $funcion -> validar($_POST['aspecto']);
  $Densidad = $funcion -> validar($_POST['densidad']);
  $Ph = $funcion -> validar($_POST['ph']);
  $Glucosa = $funcion -> validar($_POST['glucosa']);
  $Proteinas = $funcion -> validar($_POST['proteinas']);
  $Sangre = $funcion -> validar($_POST['sangre']);
  $Hemoglobina = $funcion -> validar($_POST['hemoglobina']);
  $C_cetonico = $funcion -> validar($_POST['c_cetonicos']);
  $Bilirrubina = $funcion -> validar($_POST['bilirrubina']);
  $Urobilinogeno = $funcion -> validar($_POST['urobilinogeno']);
  $Nitritos = $funcion -> validar($_POST['nitritos']);
  $Celulas_epiteliales = $funcion -> validar($_POST['celulas_epiteliales']);
  $Leucocitos = $funcion -> validar($_POST['leucocitos']);
  $Bacterias = $funcion -> validar($_POST['bacterias']);
  $Filamentos_de_mucina = $funcion -> validar($_POST['filamentos_de_mucina']);
  $Cristales_de_oxalato_de_calcio = $funcion -> validar($_POST['cristales_de_oxalato_de_calcio']);
  $Antigeno_especifico_de_prostata_PSA = $funcion -> validar($_POST['antigeno_especifico_de_prostata_PSA']);
  $Fecha = $funcion -> validar($_POST['fecha']);
  $Hora = $funcion -> validar($_POST['hora']);
  $Folio = $funcion -> validar($_POST['folio']);
  $Usuario = $funcion -> validar($_SESSION['id_users']);

  //Guardamos el valor de post en  session para mentener datos en input en caso de error  

  $_SESSION["fecha"] = $Fecha;
  $_SESSION["hora"] = $Hora;
  $_SESSION["folio"] = $Folio;
  $_SESSION["color"] = $Color;
  $_SESSION["aspecto"] = $Aspecto;
  $_SESSION["densidad"] = $Densidad;
  $_SESSION["ph"] = $Ph;
  $_SESSION["glucosa"] = $Glucosa;
  $_SESSION["proteinas"] = $Proteinas;
  $_SESSION["sangre"] = $Sangre;
  $_SESSION["hemoglobina"] = $Hemoglobina;
  $_SESSION["c_cetonicos"] = $C_cetonicos;
  $_SESSION["bilirrubina"] = $Bilirrubina;
  $_SESSION["urobilinogeno"] = $Urobilinogeno;
  $_SESSION["nitritos"] = $nitritos;
  $_SESSION["celulas_epiteliales"] = $Celulas_epiteliales;
  $_SESSION["leucocitos"] = $Leucocitos;
  $_SESSION["bacterias"] = $Bacterias;
  $_SESSION["filamentos_de_mucina"] = $Filamentos_de_mucina;
  $_SESSION["cristales_de_oxalato_de_calcio"] = $Cristales_de_oxalato_de_calcio;
  $_SESSION["antigeno_especifico_de_prostata_PSA"] = $Antigeno_especifico_de_prostata_PSA;

  $user_data = 'Color=' . $Color . '&Aspecto' . $Aspecto . '&Densidad' . $Densidad . '&Ph' . $Ph . '&Glucosa' . $Glucosa . '&Proteinas' . $Proteinas . '&Sangre' . $Sangre . '&Hemoglobina' . $Hemoglobina . '&C_cetonico' . $C_cetonico . '&Bilirrubina' . $Bilirrubina . '&Urobilinogeno' . $Urobilinogeno . '&Nitritos' . $Nitritos . '&Celulas_epiteliales' . $Celulas_epiteliales . '&Leucocitos' . $Leucocitos . '&Bacterias' . $Bacterias . '&Filamentos_de_mucina' . $Filamentos_de_mucina . '&Cristales_de_oxalato_de_calcio' . $Cristales_de_oxalato_de_calcio . '&Antigeno_especifico_de_prostata_PSA' . $Antigeno_especifico_de_prostata_PSA . '&Fecha' . $Fecha . '&Folio' . $Folio;

  // Se capturan errores al rellenar campos 

  if (empty($Color)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo Color es requerido");
    exit();
  } else if (empty($Aspecto)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo Aspecto es requerido");
    exit();
  } else if (empty($Densidad)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo Densidad es requerido");
    exit();
  } else if (empty($Ph)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo PH es requerido");
    exit();
  } else if (empty($Glucosa)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo Glucosa es requerido");
    exit();
  } else if (empty($Proteinas)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo Proteinas es requerido");
    exit();
  } else if (empty($Sangre)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo Sangre es requerido");
    exit();
  } else if (empty($Hemoglobina)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo Hemoglobina es requerido");
    exit();
  } else if (empty($C_cetonico)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo C_cetonico es requerido");
    exit();
  } else if (empty($Bilirrubina)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo es requerido");
    exit();
  } else if (empty($Urobilinogeno)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo es requerido");
    exit();
  } else if (empty($Nitritos)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo es requerido");
    exit();
  } else if (empty($Celulas_epiteliales)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo es requerido");
    exit();
  } else if (empty($Leucocitos)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo es requerido");
    exit();
  } else if (empty($Bacterias)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo es requerido");
    exit();
  } else if (empty($Filamentos_de_mucina)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo es requerido");
    exit();
  } else if (empty($Cristales_de_oxalato_de_calcio)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo es requerido");
    exit();
  } else if (empty($Antigeno_especifico_de_prostata_PSA)) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Campo es requerido$user_data");
    exit();
  }

  // Se insertan los datos en las diferentes tablas pertenecientes la mismo estudio 

  $sql = "INSERT INTO examen_macroscopico(color, aspecto) VALUES ('$Color', '$Aspecto')";

  $sql2 = "INSERT INTO analisis_fisico_quimico(densidad, ph, glucosa, proteinas, sangre, hemoglobina, c_cetonicos, bilirrubina, urobilinogeno, nitritos) VALUES ('$Densidad', '$Ph', '$Glucosa', '$Proteinas', '$Sangre', '$Hemoglobina', '$C_cetonico', '$Bilirrubina', '$Urobilinogeno', '$Nitritos')";

  $sql3 = "INSERT INTO analisis_microscopico_de_sedimento(celulas_epiteliales, leucocitos, bacterias, filamentos_de_mucina, cristales_de_oxalato_de_calcio, antigeno_especifico_de_prostata_psa) VALUES ( '$Celulas_epiteliales', '$Leucocitos' , '$Bacterias' , '$Filamentos_de_mucina', '$Cristales_de_oxalato_de_calcio', '$Antigeno_especifico_de_prostata_PSA')";

  // Se hacen las consultas  para rellenar tablas pivote o relacionadas 

  $consulta = "SELECT id_examen_macroscopico FROM examen_macroscopico";
  $fila = pg_query($consulta);
  $fila = pg_num_rows($fila);
  $fila = intval($fila) + 1;

  $consulta2 = "SELECT id_analisis_fisico_quimico FROM analisis_fisico_quimico";
  $fila2 = pg_query($consulta2);
  $fila2 = pg_num_rows($fila2);
  $fila2 = intval($fila2) + 1;

  $consulta3 = "SELECT id_analisis_microscopico_de_sedimento FROM analisis_microscopico_de_sedimento";
  $fila3 = pg_query($consulta3);
  $fila3 = pg_num_rows($fila3);
  $fila3 = intval($fila3) + 1;

  $sql4 = "INSERT INTO examen_general_de_orina(fecha_estudio,hora,folio,examen_macroscopico_id,analisis_fisico_quimico_id,analisis_microscopico_de_sedimento_id) VALUES ('$Fecha','$Hora','$Folio','$fila','$fila2','$fila3')";

  $consulta4 = "SELECT id_examen_general_de_orina FROM examen_general_de_orina";
  $fila4 = pg_query($consulta4);
  $fila4 = pg_num_rows($fila4);
  $fila4 = intval($fila4) + 1;

  $sql5 = "INSERT INTO usuario_estudio(users_id,examen_general_de_orina_id)VALUES('$Usuario','$fila4')";

  $sql6 = "INSERT INTO estudios(examen_general_de_orina_id)VALUES('$fila4')";

  $result = pg_query($conn, $sql);
  $result2 = pg_query($conn, $sql2);
  $result3 = pg_query($conn, $sql3);
  $result4 = pg_query($conn, $sql4);
  $result5 = pg_query($conn, $sql5);
  $result6 = pg_query($conn, $sql6);

  if ($result && $result2 && $result3 && $result4 && $result5 && $result6) {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?success=Resultados registrados&$user_data");
    exit();
  } else {
    header("Location: ../../views_formularios_estudios/examen_general_orina.view.php?error=Ocurrio un error desconocido&");
    exit();
  }

}


?>