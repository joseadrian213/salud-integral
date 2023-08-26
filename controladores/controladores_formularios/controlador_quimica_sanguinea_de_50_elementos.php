<?php
include ('../../funciones/funciones.php');
include('../../conexion_base_de_datos/conexion.php');

// Compropbacion de datos no nulos 

if (isset($_POST['color']) && isset($_POST['aspecto']) && isset($_POST['hemolisis']) && isset($_POST['lipemia']) && isset($_POST['ictericia']) && isset($_POST['glucosa']) && isset($_POST['bun_ureico']) && isset($_POST['urea_serica']) && isset($_POST['creatinina_serica']) && isset($_POST['relacion_bun_creatinina']) && isset($_POST['acido_urico_serico']) && isset($_POST['colesterol_total']) && isset($_POST['trigliceridos']) && isset($_POST['colesterol_de_alta_densidad_hdl']) && isset($_POST['colesterol_de_baja_densidad_ldl']) && isset($_POST['colesterol_de_muy_baja_densidad_vldl']) && isset($_POST['indice_aterogenico_i_ldl_hdl']) && isset($_POST['indice_aterogenico_ii_col_hdl']) && isset($_POST['indice_aterogenico_iii_ldl_tg']) && isset($_POST['indice_aterogenico_iii_col_tg']) && isset($_POST['lipidos_totales']) && isset($_POST['bilirrubina_total']) && isset($_POST['bilirrubina_conjugada_directa']) && isset($_POST['bilirrubina_no_conjugada_indirecta']) && isset($_POST['transaminasa_glutamico_oxalacetica_ast']) && isset($_POST['transaminasa_glutamico_piruvica_altv']) && isset($_POST['gamma_glutamil_transferasa']) && isset($_POST['fosfatasa_alcalina']) && isset($_POST['fosfatasa_acida_total']) && isset($_POST['proteinas_totales']) && isset($_POST['albumina_serica']) && isset($_POST['globulinas_sericas']) && isset($_POST['relacion_albumina_globulina']) && isset($_POST['amilasa_serica']) && isset($_POST['lipasa_serica']) && isset($_POST['deshidrogenasa_lactica_dhl']) && isset($_POST['calcio_serico']) && isset($_POST['fosforo_serico']) && isset($_POST['magnesio']) && isset($_POST['sodio_serico']) && isset($_POST['potasio_serico']) && isset($_POST['cloro_serico']) && isset($_POST['creatinfosfoquinasa_ck_total']) && isset($_POST['creatinfosfoquinasa_fraccion_ck_mb']) && isset($_POST['ticb_fijacion_de_hierro']) && isset($_POST['hierro_serico']) && isset($_POST['litio_serico']) && isset($_POST['dioxido_de_carbono']) && isset($_POST['alcohol_en_sangre']) && isset($_POST['factor_reumatoide_cuantitativo']) && isset($_POST['proteina_c_reactiva_cuantitativa']) && isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['folio']) && isset($_SESSION['id_users'])) {

  // Limpíamos los datos 

  $funcion = new Funciones;

  $Color = $funcion -> validar($_POST['color']);
  $Aspecto = $funcion -> validar($_POST['aspecto']);
  $Hemolisis = $funcion -> validar($_POST['hemolisis']);
  $Lipemia = $funcion -> validar($_POST['lipemia']);
  $Ictericia = $funcion -> validar($_POST['ictericia']);
  $Glucosa = $funcion -> validar($_POST['glucosa']);
  $Bun_ureico = $funcion -> validar($_POST['bun_ureico']);
  $Urea_serica = $funcion -> validar($_POST['urea_serica']);
  $Creatinina_serica = $funcion -> validar($_POST['creatinina_serica']);
  $Relacion_bun_creatinina = $funcion -> validar($_POST['relacion_bun_creatinina']);
  $Acido_urico_serico = $funcion -> validar($_POST['acido_urico_serico']);
  $Colesterol_total = $funcion -> validar($_POST['colesterol_total']);
  $Trigliceridos = $funcion -> validar($_POST['trigliceridos']);
  $Colesterol_de_alta_densidad_hdl = $funcion -> validar($_POST['colesterol_de_alta_densidad_hdl']);
  $Colesterol_de_baja_densidad_ldl = $funcion -> validar($_POST['colesterol_de_baja_densidad_ldl']);
  $Colesterol_de_muy_baja_densidad_vldl = $funcion -> validar($_POST['colesterol_de_muy_baja_densidad_vldl']);
  $Indice_aterogenico_i_ldl_hdl = $funcion -> validar($_POST['indice_aterogenico_i_ldl_hdl']);
  $Indice_aterogenico_ii_col_hdl = $funcion -> validar($_POST['indice_aterogenico_ii_col_hdl']);
  $Indice_aterogenico_iii_ldl_tg = $funcion -> validar($_POST['indice_aterogenico_iii_ldl_tg']);
  $Indice_aterogenico_iii_col_tg = $funcion -> validar($_POST['indice_aterogenico_iii_col_tg']);
  $Lipidos_totales = $funcion -> validar($_POST['lipidos_totales']);
  $Bilirrubina_total = $funcion -> validar($_POST['bilirrubina_total']);
  $Bilirrubina_conjugada_directa = $funcion -> validar($_POST['bilirrubina_conjugada_directa']);
  $Bilirrubina_no_conjugada_indirecta = $funcion -> validar($_POST['bilirrubina_no_conjugada_indirecta']);
  $Transaminasa_glutamico_oxalacetica_ast = $funcion -> validar($_POST['transaminasa_glutamico_oxalacetica_ast']);
  $Transaminasa_glutamico_piruvica_altv = $funcion -> validar($_POST['transaminasa_glutamico_piruvica_altv']);
  $Gamma_glutamil_transferasa = $funcion -> validar($_POST['gamma_glutamil_transferasa']);
  $Fosfatasa_alcalina = $funcion -> validar($_POST['fosfatasa_alcalina']);
  $Fosfatasa_acida_total = $funcion -> validar($_POST['fosfatasa_acida_total']);
  $Proteinas_totales = $funcion -> validar($_POST['proteinas_totales']);
  $Albumina_serica = $funcion -> validar($_POST['albumina_serica']);
  $Globulinas_sericas = $funcion -> validar($_POST['globulinas_sericas']);
  $Relacion_albumina_globulina = $funcion -> validar($_POST['relacion_albumina_globulina']);
  $Amilasa_serica = $funcion -> validar($_POST['amilasa_serica']);
  $Lipasa_serica = $funcion -> validar($_POST['lipasa_serica']);
  $Deshidrogenasa_lactica_dhl = $funcion -> validar($_POST['deshidrogenasa_lactica_dhl']);
  $Calcio_serico = $funcion -> validar($_POST['calcio_serico']);
  $Fosforo_serico = $funcion -> validar($_POST['fosforo_serico']);
  $Magnesio = $funcion -> validar($_POST['magnesio']);
  $Sodio_serico = $funcion -> validar($_POST['sodio_serico']);
  $Potasio_serico = $funcion -> validar($_POST['potasio_serico']);
  $Cloro_serico = $funcion -> validar($_POST['cloro_serico']);
  $Creatinfosfoquinasa_ck_total = $funcion -> validar($_POST['creatinfosfoquinasa_ck_total']);
  $Creatinfosfoquinasa_fraccion_ck_mb = $funcion -> validar($_POST['creatinfosfoquinasa_fraccion_ck_mb']);
  $Ticb_fijacion_de_hierro = $funcion -> validar($_POST['ticb_fijacion_de_hierro']);
  $Hierro_serico = $funcion -> validar($_POST['hierro_serico']);
  $Litio_serico = $funcion -> validar($_POST['litio_serico']);
  $Dioxido_de_carbono = $funcion -> validar($_POST['dioxido_de_carbono']);
  $Alcohol_en_sangre = $funcion -> validar($_POST['alcohol_en_sangre']);
  $Factor_reumatoide_cuantitativo = $funcion -> validar($_POST['factor_reumatoide_cuantitativo']);
  $Proteina_c_reactiva_cuantitativa = $funcion -> validar($_POST['proteina_c_reactiva_cuantitativa']);
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
  $_SESSION["hemolisis"] = $Hemolisis;
  $_SESSION["lipemia"] = $Lipemia;
  $_SESSION["ictericia"] = $Ictericia;
  $_SESSION["glucosa"] = $Glucosa;
  $_SESSION["bun_ureico"] = $Bun_ureico;
  $_SESSION["urea_serica"] = $Urea_serica;
  $_SESSION["creatinina_serica"] = $Creatinina_serica;
  $_SESSION["relacion_bun_creatinina"] = $Relacion_bun_creatinina;
  $_SESSION["acido_urico_serico"] = $Acido_urico_serico;
  $_SESSION["colesterol_total"] = $Colesterol_total;
  $_SESSION["trigliceridos"] = $Trigliceridos;
  $_SESSION["colesterol_de_alta_densidad_hdl"] = $Colesterol_de_alta_densidad_hdl;
  $_SESSION["colesterol_de_baja_densidad_ldl"] = $Colesterol_de_baja_densidad_ldl;
  $_SESSION["colesterol_de_muy_baja_densidad_vldl"] = $Colesterol_de_muy_baja_densidad_vldl;
  $_SESSION["indice_aterogenico_i_ldl_hdl"] = $Indice_aterogenico_i_ldl_hdl;
  $_SESSION["indice_aterogenico_ii_col_hdl"] = $Indice_aterogenico_ii_col_hdl;
  $_SESSION["indice_aterogenico_iii_ldl_tg"] = $Indice_aterogenico_iii_ldl_tg;
  $_SESSION["indice_aterogenico_iii_col_tg"] = $Indice_aterogenico_iii_col_tg;
  $_SESSION["lipidos_totales"] = $Lipidos_totales;
  $_SESSION["bilirrubina_total"] = $Bilirrubina_total;
  $_SESSION["bilirrubina_conjugada_directa"] = $Bilirrubina_conjugada_directa;
  $_SESSION["bilirrubina_no_conjugada_indirecta"] = $Bilirrubina_no_conjugada_indirecta;
  $_SESSION["transaminasa_glutamico_oxalacetica_ast"] = $Transaminasa_glutamico_oxalacetica_ast;
  $_SESSION["transaminasa_glutamico_piruvica_altv"] = $Transaminasa_glutamico_piruvica_altv;
  $_SESSION["gamma_glutamil_transferasa"] = $Gamma_glutamil_transferasa;
  $_SESSION["fosfatasa_alcalina"] = $Fosfatasa_alcalina;
  $_SESSION["fosfatasa_acida_total"] = $Fosfatasa_acida_total;
  $_SESSION["proteinas_totales"] = $Proteinas_totales;
  $_SESSION["albumina_serica"] = $Albumina_serica;
  $_SESSION["globulinas_sericas"] = $Globulinas_sericas;
  $_SESSION["relacion_albumina_globulina"] = $Relacion_albumina_globulina;
  $_SESSION["amilasa_serica"] = $Amilasa_serica;
  $_SESSION["lipasa_serica"] = $Lipasa_serica;
  $_SESSION["deshidrogenasa_lactica_dhl"] = $Deshidrogenasa_lactica_dhl;
  $_SESSION["calcio_serico"] = $Calcio_serico;
  $_SESSION["fosforo_serico"] = $Fosforo_serico;
  $_SESSION["magnesio"] = $Magnesio;
  $_SESSION["sodio_serico"] = $Sodio_serico;
  $_SESSION["potasio_serico"] = $Potasio_serico;
  $_SESSION["cloro_serico"] = $Cloro_serico;
  $_SESSION["creatinfosfoquinasa_ck_total"] = $Creatinfosfoquinasa_ck_total;
  $_SESSION["creatinfosfoquinasa_fraccion_ck_mb"] = $Creatinfosfoquinasa_fraccion_ck_mb;
  $_SESSION["ticb_fijacion_de_hierro"] = $Ticb_fijacion_de_hierro;
  $_SESSION["hierro_serico"] = $Hierro_serico;
  $_SESSION["litio_serico"] = $Litio_serico;
  $_SESSION["dioxido_de_carbono"] = $Dioxido_de_carbono;
  $_SESSION["alcohol_en_sangre"] = $Alcohol_en_sangre;
  $_SESSION["factor_reumatoide_cuantitativo"] = $Factor_reumatoide_cuantitativo;
  $_SESSION["proteina_c_reactiva_cuantitativa"] = $Proteina_c_reactiva_cuantitativa;


  $user_data = 'Color=' . $Color . '&Aspecto' . $Aspecto . '&Hemolisis' . $Hemolisis . '&Lipemia' . $Lipemia . '&Ictericia' . $Ictericia . '&Glucosa' . $Glucosa . '&Bun_ureico' . $Bun_ureico . '&Urea_serica' . $Urea_serica . '&Creatinina_serica' . $Creatinina_serica . '&Relacion_bun_creatinina' . $Relacion_bun_creatinina . '&Acido_urico_serico' . $Acido_urico_serico . '&Colesterol_total' . $Colesterol_total . '&Trigliceridos' . $Trigliceridos . '&Colesterol_de_alta_densidad_hdl' . $Colesterol_de_alta_densidad_hdl . '&Colesterol_de_baja_densidad_ldl' . $Colesterol_de_baja_densidad_ldl . '&Colesterol_de_muy_baja_densidad_vldl' . $Colesterol_de_muy_baja_densidad_vldl . '&Indice_aterogenico_i_ldl_hdl' . $Indice_aterogenico_i_ldl_hdl . '&Indice_aterogenico_ii_col_hdl' . $Indice_aterogenico_ii_col_hdl . '&Indice_aterogenico_iii_ldl_tg' . $Indice_aterogenico_iii_ldl_tg . '&Indice_aterogenico_iii_col_tg' . $Indice_aterogenico_iii_col_tg . '&Lipidos_totales' . $Lipidos_totales . '&Bilirrubina_total' . $Bilirrubina_total . '&Bilirrubina_conjugada_directa' . $Bilirrubina_conjugada_directa . '&Bilirrubina_no_conjugada_indirecta' . $Bilirrubina_no_conjugada_indirecta . '&Transaminasa_glutamico_oxalacetica_ast' . $Transaminasa_glutamico_oxalacetica_ast . '&Transaminasa_glutamico_piruvica_altv' . $Transaminasa_glutamico_piruvica_altv . '&Gamma_glutamil_transferasa' . $Gamma_glutamil_transferasa . '&Fosfatasa_alcalina' . $Fosfatasa_alcalina . '&Fosfatasa_acida_total' . $Fosfatasa_acida_total . '&Proteinas_totales' . $Proteinas_totales . '&Albumina_serica' . $Albumina_serica . '&Globulinas_sericas' . $Globulinas_sericas . '&Relacion_albumina_globulina' . $Relacion_albumina_globulina . '&Amilasa_serica' . $Amilasa_serica . '&Lipasa_serica' . $Lipasa_serica . '&Deshidrogenasa_lactica_dhl' . $Deshidrogenasa_lactica_dhl . '&Calcio_serico' . $Calcio_serico . '&Fosforo_serico' . $Fosforo_serico . '&Magnesio' . $Magnesio . '&Sodio_serico' . $Sodio_serico . '&Potasio_serico' . $Potasio_serico . '&Cloro_serico' . $Cloro_serico . '&Creatinfosfoquinasa_ck_total' . $Creatinfosfoquinasa_ck_total . '&Creatinfosfoquinasa_fraccion_ck_mb' . $Creatinfosfoquinasa_fraccion_ck_mb . '&Ticb_fijacion_de_hierro' . $Ticb_fijacion_de_hierro . '&Hierro_serico' . $Hierro_serico . '&Litio_serico' . $Litio_serico . '&Dioxido_de_carbono' . $Dioxido_de_carbono . '&Alcohol_en_sangre' . $Alcohol_en_sangre . '&Factor_reumatoide_cuantitativo' . $Factor_reumatoide_cuantitativo . '&Proteina_c_reactiva_cuantitativa' . $Proteina_c_reactiva_cuantitativa . '&Fecha' . $Fecha . '&Folio' . $Folio;

  // Se capturan errores al rellenar campos 

  if (empty($Color)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Color es requerido");
    exit();
  } else if (empty($Aspecto)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Aspecto es requerido");
    exit();
  } else if (empty($Hemolisis)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Hemolisis es requerido");
    exit();
  } else if (empty($Lipemia)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Lipemia es requerido");
    exit();
  } else if (empty($Ictericia)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Ictericia es requerido");
    exit();
  } else if (empty($Glucosa)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Glucosa es requerido");
    exit();
  } else if (empty($Bun_ureico)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Bun_ureico es requerido");
    exit();
  } else if (empty($Urea_serica)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Urea_serica es requerido");
    exit();
  } else if (empty($Creatinina_serica)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Creatinina_serica es requerido");
    exit();
  } else if (empty($Relacion_bun_creatinina)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Relacion_bun_creatinina es requerido");
    exit();
  } else if (empty($Acido_urico_serico)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Acido_urico_serico es requerido");
    exit();
  } else if (empty($Colesterol_total)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Colesterol_total es requerido");
    exit();
  } else if (empty($Trigliceridos)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Trigliceridos es requerido");
    exit();
  } else if (empty($Colesterol_de_alta_densidad_hdl)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Colesterol_de_alta_densidad_hdl es requerido");
    exit();
  } else if (empty($Colesterol_de_baja_densidad_ldl)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Colesterol_de_baja_densidad_ldl es requerido");
    exit();
  } else if (empty($Colesterol_de_muy_baja_densidad_vldl)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Colesterol_de_muy_baja_densidad_vldl es requerido");
    exit();
  } else if (empty($Indice_aterogenico_i_ldl_hdl)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Indice_aterogenico_i_ldl_hdl es requerido");
    exit();
  } else if (empty($Indice_aterogenico_ii_col_hdl)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Indice_aterogenico_ii_col_hdl es requerido");
    exit();
  } else if (empty($Indice_aterogenico_iii_ldl_tg)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Indice_aterogenico_iii_ldl_tg es requerido");
    exit();
  } else if (empty($Indice_aterogenico_iii_col_tg)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Indice_aterogenico_iii_col_tg es requerido");
    exit();
  } else if (empty($Lipidos_totales)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Lipidos_totales es requerido");
    exit();
  } else if (empty($Bilirrubina_total)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Bilirrubina_total es requerido");
    exit();
  } else if (empty($Bilirrubina_conjugada_directa)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Bilirrubina_conjugada_directa es requerido");
    exit();
  } else if (empty($Bilirrubina_no_conjugada_indirecta)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Bilirrubina_no_conjugada_indirecta es requerido");
    exit();
  } else if (empty($Transaminasa_glutamico_oxalacetica_ast)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Transaminasa_glutamico_oxalacetica_ast es requerido");
    exit();
  } else if (empty($Transaminasa_glutamico_piruvica_altv)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Transaminasa_glutamico_piruvica_altv es requerido");
    exit();
  } else if (empty($Gamma_glutamil_transferasa)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Gamma_glutamil_transferasa es requerido");
    exit();
  } else if (empty($Fosfatasa_alcalina)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Fosfatasa_alcalina es requerido");
    exit();
  } else if (empty($Fosfatasa_acida_total)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Fosfatasa_acida_total es requerido");
    exit();
  } else if (empty($Proteinas_totales)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Proteinas_totales es requerido");
    exit();
  } else if (empty($Albumina_serica)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Albumina_serica es requerido");
    exit();
  } else if (empty($Globulinas_sericas)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Globulinas_sericas es requerido");
    exit();
  } else if (empty($Relacion_albumina_globulina)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Relacion_albumina_globulina es requerido");
    exit();
  } else if (empty($Amilasa_serica)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Amilasa_serica es requerido");
    exit();
  } else if (empty($Lipasa_serica)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Lipasa_serica es requerido");
    exit();
  } else if (empty($Deshidrogenasa_lactica_dhl)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Deshidrogenasa_lactica_dhl es requerido");
    exit();
  } else if (empty($Calcio_serico)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Calcio_serico es requerido");
    exit();
  } else if (empty($Fosforo_serico)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Fosforo_serico es requerido");
    exit();
  } else if (empty($Magnesio)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Magnesio es requerido");
    exit();
  } else if (empty($Sodio_serico)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Sodio_serico es requerido");
    exit();
  } else if (empty($Potasio_serico)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Potasio_serico es requerido");
    exit();
  } else if (empty($Cloro_serico)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Cloro_serico es requerido");
    exit();
  } else if (empty($Creatinfosfoquinasa_ck_total)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Creatinfosfoquinasa_ck_total es requerido");
    exit();
  } else if (empty($Creatinfosfoquinasa_fraccion_ck_mb)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Creatinfosfoquinasa_fraccion_ck_mb es requerido");
    exit();
  } else if (empty($Ticb_fijacion_de_hierro)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Ticb_fijacion_de_hierro es requerido");
    exit();
  } else if (empty($Hierro_serico)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Hierro_serico es requerido");
    exit();
  } else if (empty($Litio_serico)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Litio_serico es requerido");
    exit();
  } else if (empty($Dioxido_de_carbono)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Dioxido_de_carbono es requerido");
    exit();
  } else if (empty($Alcohol_en_sangre)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Alcohol_en_sangre es requerido");
    exit();
  } else if (empty($Factor_reumatoide_cuantitativo)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Factor_reumatoide_cuantitativo es requerido");
    exit();
  } else if (empty($Proteina_c_reactiva_cuantitativa)) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Campo Proteina_c_reactiva_cuantitativa es requerido");
    exit();
  }

  // Se insertan los datos en la tabla

  $sql = "INSERT INTO quimica_sanguinea_de_50_elementos(color,aspecto,hemolisis,lipemia,ictericia,glucosa, bun_ureico, urea_serica, creatinina_serica, relacion_bun_creatinina, acido_urico_serico, colesterol_total, trigliceridos, colesterol_de_alta_densidad_hdl, colesterol_de_baja_densidad_ldl, colesterol_de_muy_baja_densidad_vldl, indice_aterogenico_i_ldl_hdl, indice_aterogenico_ii_col_hdl, indice_aterogenico_iii_ldl_tg, indice_aterogenico_iii_col_tg, lipidos_totales, bilirrubina_total, bilirrubina_conjugada_directa, bilirrubina_no_conjugada_indirecta, transaminasa_glutamico_oxalacetica_ast, transaminasa_glutamico_piruvica_altv, gamma_glutamil_transferasa, fosfatasa_alcalina, fosfatasa_acida_total, proteinas_totales, albumina_serica, globulinas_sericas, relacion_albumina_globulina, amilasa_serica, lipasa_serica, deshidrogenasa_lactica_dhl, calcio_serico, fosforo_serico, magnesio, sodio_serico, potasio_serico, cloro_serico, creatinfosfoquinasa_ck_total, creatinfosfoquinasa_fraccion_ck_mb, ticb_fijacion_de_hierro, hierro_serico, litio_serico, dioxido_de_carbono, alcohol_en_sangre, factor_reumatoide_cuantitativo, proteina_c_reactiva_cuantitativa) VALUES ('$Color','$Aspecto','$Hemolisis','$Lipemia','$Ictericia','$Glucosa', '$Bun_ureico', '$Urea_serica', '$Creatinina_serica', '$Relacion_bun_creatinina', '$Acido_urico_serico', '$Colesterol_total', '$Trigliceridos','$Colesterol_de_alta_densidad_hdl','$Colesterol_de_baja_densidad_ldl','$Colesterol_de_muy_baja_densidad_vldl','$Indice_aterogenico_i_ldl_hdl','$Indice_aterogenico_ii_col_hdl','$$Indice_aterogenico_iii_ldl_tg', '$Indice_aterogenico_iii_col_tg','$Lipidos_totales','$Bilirrubina_total','$Bilirrubina_conjugada_directa','$Bilirrubina_no_conjugada_indirecta','$Transaminasa_glutamico_oxalacetica_ast','$Transaminasa_glutamico_piruvica_altv','$Gamma_glutamil_transferasa','$Fosfatasa_alcalina','$Fosfatasa_acida_total','$Proteinas_totales','$Albumina_serica','$Globulinas_sericas','$Relacion_albumina_globulina','$Amilasa_serica','$Lipasa_serica','$Deshidrogenasa_lactica_dhl','$Calcio_serico','$Fosforo_serico','$Magnesio','$Sodio_serico','$Potasio_serico','$Cloro_serico','$Creatinfosfoquinasa_ck_total','$Creatinfosfoquinasa_fraccion_ck_mb','$Ticb_fijacion_de_hierro','$Hierro_serico','$Litio_serico','$Dioxido_de_carbono','$Alcohol_en_sangre','$Factor_reumatoide_cuantitativo','$Proteina_c_reactiva_cuantitativa')";

  // Se hacen las consultas  para rellenar tablas pivote o relacionadas 

  $consulta = "SELECT id_quimica_sanguinea_de_50_elementos FROM quimica_sanguinea_de_50_elementos";
  $fila = pg_query($consulta);
  $fila = pg_num_rows($fila);
  $fila = intval($fila) + 1;

  $sql2 = "INSERT INTO promo_quimica_sanguinea_de_50_elementos(fecha_estudio,hora,folio,quimica_sanguinea_de_50_elementos_id) VALUES ('$Fecha','$Hora','$Folio','$fila')";

  $sql3 = "INSERT INTO usuario_estudio(users_id,promo_quimica_sanguinea_de_50_elementos_id)VALUES('$Usuario','$fila')";

  $sql4 = "INSERT INTO estudios(promo_quimica_sanguinea_de_50_elementos_id)VALUES('$fila')";

  $result = pg_query($conn, $sql);
  $result2 = pg_query($conn, $sql2);
  $result3 = pg_query($conn, $sql3);
  $result4 = pg_query($conn, $sql4);

  if ($result && $result2 && $result3 && $result4) {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?success=Resultados registrados&$user_data");
    exit();
  } else {
    header("Location: ../../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php?error=Ocurrio un error desconocido&");
    exit();
  }

}

?>