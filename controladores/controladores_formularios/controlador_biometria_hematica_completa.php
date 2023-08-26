<?php

include ('../../funciones/funciones.php');

include('../../conexion_base_de_datos/conexion.php');
// Compropbacion de datos no nulos 
if (isset($_POST['eritrocitos']) && isset($_POST['hemoglobina']) && isset($_POST['hematocrito']) && isset($_POST['volumen_globular_medio']) && isset($_POST['concentracion_media_de_hb']) && isset($_POST['conc_media_de_hb_corpuscular']) && isset($_POST['indice_de_distribucion_de_eritrocitos_rdw']) && isset($_POST['plaquetas']) && isset($_POST['volumen_plaquetario_pedio']) && isset($_POST['leucocitos_totales']) && isset($_POST['neutrofilos_totales']) && isset($_POST['neutrofilos_segmentados']) && isset($_POST['neutrofilos_en_banda']) && isset($_POST['metamielocitos']) && isset($_POST['mielocitos']) && isset($_POST['promuelocitos']) && isset($_POST['blastos']) && isset($_POST['eosinofilos']) && isset($_POST['basofilos']) && isset($_POST['monocitos']) && isset($_POST['linfocitos']) && isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['folio']) && isset($_SESSION['id_users'])) {

    $funcion = new Funciones;

    $Eritrocitos = $funcion -> validar($_POST['eritrocitos']);
    $Hemoglobina = $funcion -> validar($_POST['hemoglobina']);
    $Hematocrito = $funcion -> validar($_POST['hematocrito']);
    $Volumen_globular_medio = $funcion -> validar($_POST['volumen_globular_medio']);
    $Concentracion_media_de_hb = $funcion -> validar($_POST['concentracion_media_de_hb']);
    $Conc_media_de_hb_corpuscular = $funcion -> validar($_POST['conc_media_de_hb_corpuscular']);
    $Indice_de_distribucion_de_eritrocitos_rdw = $funcion -> validar($_POST['indice_de_distribucion_de_eritrocitos_rdw']);
    $Plaquetas = $funcion -> validar($_POST['plaquetas']);
    $Volumen_plaquetario_pedio = $funcion -> validar($_POST['volumen_plaquetario_pedio']);
    $Leucocitos_totales = $funcion -> validar($_POST['leucocitos_totales']);
    $Neutrofilos_totales = $funcion -> validar($_POST['neutrofilos_totales']);
    $Neutrofilos_segmentados = $funcion -> validar($_POST['neutrofilos_segmentados']);
    $Neutrofilos_en_banda = $funcion -> validar($_POST['neutrofilos_en_banda']);
    $Metamielocitos = $funcion -> validar($_POST['metamielocitos']);
    $Mielocitos = $funcion -> validar($_POST['mielocitos']);
    $Promuelocitos = $funcion -> validar($_POST['promuelocitos']);
    $Blastos = $funcion -> validar($_POST['blastos']);
    $Eosinofilos = $funcion -> validar($_POST['eosinofilos']);
    $Basofilos = $funcion -> validar($_POST['basofilos']);
    $Monocitos = $funcion -> validar($_POST['monocitos']);
    $Linfocitos = $funcion -> validar($_POST['linfocitos']);
    $Fecha = $funcion -> validar($_POST['fecha']);
    $Hora = $funcion -> validar($_POST['hora']);
    $Folio = $funcion -> validar($_POST['folio']);
    $Usuario = $funcion -> validar($_SESSION['id_users']);

    //Guardamos el valor de post en  session para mentener datos en input en caso de error  
    $_SESSION["fecha"] = $Fecha;
    $_SESSION["hora"] = $Hora;
    $_SESSION["folio"] = $Folio;
    $_SESSION["eritrocitos"] = $Eritrocitos;
    $_SESSION["hemoglobina"] = $Hemoglobina;
    $_SESSION["hematocrito"] = $Hematocrito;
    $_SESSION["volumen_globular_medio"] = $Volumen_globular_medio;
    $_SESSION["concentracion_media_de_hb"] = $Concentracion_media_de_hb;
    $_SESSION["conc_media_de_hb_corpuscular"] = $Conc_media_de_hb_corpuscular;
    $_SESSION["indice_de_distribucion_de_eritrocitos_rdw"] = $Indice_de_distribucion_de_eritrocitos_rdw;
    $_SESSION["plaquetas"] = $Plaquetas;
    $_SESSION["volumen_plaquetario_pedio"] = $Volumen_plaquetario_pedio;
    $_SESSION["leucocitos_totales"] = $Leucocitos_totales;
    $_SESSION["neutrofilos_totales"] = $Neutrofilos_totales;
    $_SESSION["neutrofilos_segmentados"] = $Neutrofilos_segmentados;
    $_SESSION["neutrofilos_en_banda"] = $Neutrofilos_en_banda;
    $_SESSION["metamielocitos"] = $Metamielocitos;
    $_SESSION["mielocitos"] = $Mielocitos;
    $_SESSION["promuelocitos"] = $Promuelocitos;
    $_SESSION["blastos"] = $Blastos;
    $_SESSION["eosinofilos"] = $Eosinofilos;
    $_SESSION["basofilos"] = $Basofilos;
    $_SESSION["monocitos"] = $Monocitos;
    $_SESSION["linfocitos"] = $Linfocitos;



    $user_data = 'Eritrocitos=' . $Eritrocitos . '&Hemoglobina' . $Hemoglobina . '&Hematocrito' . $Hematocrito . '&Volumen_globular_medio' . $Volumen_globular_medio . '&Concentracion_media_de_hb' . $Concentracion_media_de_hb . '&Conc_media_de_hb_corpuscular' . $Conc_media_de_hb_corpuscular . '&Indice_de_distribucion_de_eritrocitos_rdw' . $Indice_de_distribucion_de_eritrocitos_rdw . '&Plaquetas' . $Plaquetas . '&Volumen_plaquetario_pedio' . $Volumen_plaquetario_pedio . '&Leucocitos_totales' . $Leucocitos_totales . '&Neutrofilos_totales' . $Neutrofilos_totales . '&Neutrofilos_segmentados' . $Neutrofilos_segmentados . '&Neutrofilos_en_banda' . $Neutrofilos_en_banda . '&Metamielocitos' . $Metamielocitos . '&Mielocitos' . $Mielocitos . '&Promuelocitos' . $Promuelocitos . '&Blastos' . $Blastos . '&Eosinofilos' . $Eosinofilos . '&Basofilos' . $Basofilos . '&Monocitos' . $Monocitos . '&Linfocitos' . $Linfocitos . '&Fecha' . $Fecha . '&Folio' . $Folio;
    // Se capturan errores al rellenar campos 
    if (empty($Eritrocitos)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Eritrocitos es requerido");
        exit();
    } elseif (empty($Hemoglobina)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Hemoglobina es requerido");
        exit();
    } elseif (empty($Hematocrito)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Hematocrito es requerido");
        exit();
    } elseif (empty($Volumen_globular_medio)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Volumen_globular_medio es requerido");
        exit();
    } elseif (empty($Concentracion_media_de_hb)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Concentracion_media_de_hb es requerido");
        exit();
    } elseif (empty($Conc_media_de_hb_corpuscular)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Conc_media_de_hb_corpuscular es requerido");
        exit();
    } elseif (empty($Indice_de_distribucion_de_eritrocitos_rdw)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Indice_de_distribucion_de_eritrocitos_rdw es requerido");
        exit();
    } elseif (empty($Plaquetas)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Plaquetas es requerido");
        exit();
    } elseif (empty($Volumen_plaquetario_pedio)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Volumen_plaquetario_pedio es requerido");
        exit();
    } elseif (empty($Leucocitos_totales)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Leucocitos_totales es requerido");
        exit();
    } elseif (empty($Neutrofilos_totales)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Neutrofilos_totales es requerido");
        exit();
    } elseif (empty($Neutrofilos_segmentados)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Neutrofilos_segmentados es requerido");
        exit();
    } elseif (empty($Neutrofilos_en_banda)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Neutrofilos_en_banda es requerido");
        exit();
    } elseif (empty($Metamielocitos)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Metamielocitos es requerido");
        exit();
    } elseif (empty($Mielocitos)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Mielocitos es requerido");
        exit();
    } elseif (empty($Promuelocitos)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Promuelocitos es requerido");
        exit();
    } elseif (empty($Blastos)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Blastos es requerido");
        exit();
    } elseif (empty($Eosinofilos)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Eosinofilos es requerido");
        exit();
    } elseif (empty($Basofilos)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Basofilos es requerido");
        exit();
    } elseif (empty($Monocitos)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Monocitos es requerido");
        exit();
    } elseif (empty($Linfocitos)) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Campo Linfocitos es requerido");
        exit();
    }
    // Se insertan los datos en las diferentes tablas pertenecientes la mismo estudio 
    $sql = "INSERT INTO formula_roja(eritrocitos, hemoglobina, hematocrito, volumen_globular_medio, concentracion_media_de_hb, conc_media_de_hb_corpuscular, indice_de_distribucion_de_eritrocitos_rdw) VALUES ('$Eritrocitos','$Hemoglobina','$Hematocrito','$Volumen_globular_medio','$Concentracion_media_de_hb','$Conc_media_de_hb_corpuscular','$Indice_de_distribucion_de_eritrocitos_rdw')";

    $sql2 = "INSERT INTO serie_plaquetaria(plaquetas, volumen_plaquetario_pedio) VALUES ('$Plaquetas','$Volumen_plaquetario_pedio')";

    $sql3 = "INSERT INTO formula_blanca(leucocitos_totales, neutrofilos_totales, neutrofilos_segmentados, neutrofilos_en_banda, metamielocitos, mielocitos, promuelocitos, blastos, eosinofilos, basofilos, monocitos, linfocitos) VALUES ('$Leucocitos_totales', '$Neutrofilos_totales','$Neutrofilos_segmentados','$Neutrofilos_en_banda','$Metamielocitos','$Mielocitos','$Promuelocitos','$Blastos','$Eosinofilos','$Basofilos','$Monocitos','$Linfocitos')";

    // Se hacen las consultas  para rellenar tablas pivote o relacionadas 
    $consulta = "SELECT id_formula_roja FROM formula_roja";
    $fila = pg_query($consulta);
    $fila = pg_num_rows($fila);
    $fila = intval($fila) + 1;

    $consulta2 = "SELECT id_serie_plaquetaria FROM serie_plaquetaria";
    $fila2 = pg_query($consulta2);
    $fila2 = pg_num_rows($fila2);
    $fila2 = intval($fila2) + 1;

    $consulta3 = "SELECT id_formula_blanca FROM formula_blanca";
    $fila3 = pg_query($consulta3);
    $fila3 = pg_num_rows($fila3);
    $fila3 = intval($fila3) + 1;

    $sql4 = "INSERT INTO biometria_hematica_completa(fecha_estudio,hora,folio,formula_roja_id,serie_plaquetaria_id,formula_blanca_id) VALUES ('$Fecha','$Hora','$Folio','$fila','$fila2','$fila3')";


    $consulta4 = "SELECT id_biometria_hematica_completa FROM biometria_hematica_completa";
    $fila4 = pg_query($consulta4);
    $fila4 = pg_num_rows($fila4);
    $fila4 = intval($fila4) + 1;

    $sql5 = "INSERT INTO usuario_estudio(users_id,biometria_hematica_completa_id)VALUES('$Usuario','$fila4')";

    $sql6 = "INSERT INTO estudios(biometria_hematica_completa_id)VALUES('$fila4')";

    $result = pg_query($conn, $sql);
    $result2 = pg_query($conn, $sql2);
    $result3 = pg_query($conn, $sql3);
    $result4 = pg_query($conn, $sql4);
    $result5 = pg_query($conn, $sql5);
    $result6 = pg_query($conn, $sql6);

    if ($result && $result2 && $result3 && $result4 && $result5 && $result6) {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?success=Resultados registrados&$user_data");
        exit();
    } else {
        header("Location: ../../views_formularios_estudios/biometria_hematica_completa.view.php?error=Ocurrio un error desconocido&");
        exit();
    }

}
?>