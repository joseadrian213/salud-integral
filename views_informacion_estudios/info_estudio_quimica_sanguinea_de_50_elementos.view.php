<?php
include('../conexion_base_de_datos/conexion.php');

if (isset($_SESSION['id_users'])) {

  // Obtenemos el dato enviado desde los botones de informacion por estudio 

  $promo_quimica = $_POST['promo'];

  // Ralizamos las consultas y las recorremos para rellenar los inputs con los valores correspondientes a cada estudio

  $consulta = "SELECT * FROM promo_quimica_sanguinea_de_50_elementos WHERE id_promo_quimica_sanguinea_de_50_elementos ='$promo_quimica'";
  $fila = pg_query($consulta);
  $fila = pg_num_rows($fila);
  $fila = intval($fila);
  $result1 = pg_query($conn, $consulta);
  while ($row = pg_fetch_assoc($result1)) {
    $campo1_fecha = $row['fecha_estudio'];
    $campo1_folio = $row['folio'];
    $campo1_hora = $row['hora'];
  }

  $consulta2 = "SELECT * FROM quimica_sanguinea_de_50_elementos WHERE id_quimica_sanguinea_de_50_elementos = '$promo_quimica'";
  $result2 = pg_query($conn, $consulta2);
  while ($row = pg_fetch_assoc($result2)) {

    $campo1_color = $row['color'];
    $campo2_aspecto = $row['aspecto'];
    $campo3_hemolisis = $row['hemolisis'];
    $campo4_lipemia = $row['lipemia'];
    $campo5_ictericia = $row['ictericia'];
    $campo6_glucosa = $row['glucosa'];
    $campo7_bun_ureico = $row['bun_ureico'];
    $campo8_urea_serica = $row['urea_serica'];
    $campo9_creatinina_serica = $row['creatinina_serica'];
    $campo10_relacion_bun_creatinina = $row['relacion_bun_creatinina'];
    $campo11_acido_urico_serico = $row['acido_urico_serico'];
    $campo12_colesterol_total = $row['colesterol_total'];
    $campo13_trigliceridos = $row['trigliceridos'];
    $campo14_colesterol_de_alta_densidad_hdl = $row['colesterol_de_alta_densidad_hdl'];
    $campo15_colesterol_de_baja_densidad_ldl = $row['colesterol_de_baja_densidad_ldl'];
    $campo16_colesterol_de_muy_baja_densidad_vldl = $row['colesterol_de_muy_baja_densidad_vldl'];
    $campo17_indice_aterogenico_i_ldl_hdl = $row['indice_aterogenico_i_ldl_hdl'];
    $campo18_indice_aterogenico_ii_col_hdl = $row['indice_aterogenico_ii_col_hdl'];
    $campo19_indice_aterogenico_iii_ldl_tg = $row['indice_aterogenico_iii_ldl_tg'];
    $campo20_indice_aterogenico_iii_col_tg = $row['indice_aterogenico_iii_col_tg'];
    $campo21_lipidos_totales = $row['lipidos_totales'];
    $campo22_bilirrubina_total = $row['bilirrubina_total'];
    $campo23_bilirrubina_conjugada_directa = $row['bilirrubina_conjugada_directa'];
    $campo24_bilirrubina_no_conjugada_indirecta = $row['bilirrubina_no_conjugada_indirecta'];
    $campo25_transaminasa_glutamico_oxalacetica_ast = $row['transaminasa_glutamico_oxalacetica_ast'];
    $campo26_transaminasa_glutamico_piruvica_altv = $row['transaminasa_glutamico_piruvica_altv'];
    $campo27_gamma_glutamil_transferasa = $row['gamma_glutamil_transferasa'];
    $campo28_fosfatasa_alcalina = $row['fosfatasa_alcalina'];
    $campo29_fosfatasa_acida_total = $row['fosfatasa_acida_total'];
    $campo30_proteinas_totales = $row['proteinas_totales'];
    $campo31_albumina_sericaa = $row['albumina_serica'];
    $campo32_globulinas_sericas = $row['globulinas_sericas'];
    $campo33_relacion_albumina_globulina = $row['relacion_albumina_globulina'];
    $campo34_amilasa_serica = $row['amilasa_serica'];
    $campo35_lipasa_serica = $row['lipasa_serica'];
    $campo36_deshidrogenasa_lactica_dhl = $row['deshidrogenasa_lactica_dhl'];
    $campo37_calcio_serico = $row['calcio_serico'];
    $campo38_fosforo_serico = $row['fosforo_serico'];
    $campo39_magnesio = $row['magnesio'];
    $campo40_sodio_serico = $row['sodio_serico'];
    $campo41_potasio_serico = $row['potasio_serico'];
    $campo42_cloro_serico = $row['cloro_serico'];
    $campo43_creatinfosfoquinasa_ck_total = $row['creatinfosfoquinasa_ck_total'];
    $campo44_creatinfosfoquinasa_fraccion_ck_mb = $row['creatinfosfoquinasa_fraccion_ck_mb'];
    $campo45_ticb_fijacion_de_hierro = $row['ticb_fijacion_de_hierro'];
    $campo46_hierro_serico = $row['hierro_serico'];
    $campo47_litio_serico = $row['litio_serico'];
    $campo48_dioxido_de_carbono = $row['dioxido_de_carbono'];
    $campo49_alcohol_en_sangre = $row['alcohol_en_sangre'];
    $campo50_factor_reumatoide_cuantitativo = $row['factor_reumatoide_cuantitativo'];
    $campo51_proteina_c_reactiva_cuantitativa = $row['proteina_c_reactiva_cuantitativa'];


  }
  ?>


  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen Quimica Sanguinea De 50 Elementos</title>
    <link rel="stylesheet" type="text/css" href="../estilos/styles.css">
    <script src="../scripts/funciones.js"></script>
  </head>

  <body>
    <div class="contenedor-principal-estudios">
      <div class="form-contenedor">
        <form action="../conexion_base_datos/conexiones_formularios/conexion_quimica_sanguinea_de_50_elementos.php"
          method="POST">

          <div class="contenedor-label-input">

            <label class="label-estudio"> Fecha del estudio </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo1_fecha ?>" /><br /><br />
            <label class="label-estudio"> Hora del estudio </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo1_hora ?>" /><br /><br />
            <label class="label-estudio"> Folio </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo1_folio ?>" />

            <hr class="separacion-tablas" /><br />

            <p class="titulo-estudio">Examen Promo Quimica Sanguinea De 50 Elementos</p><br />
            <label class="label-estudio">Color </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo1_color ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Aspecto despues de centrifugar </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo2_aspecto ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Hemolisis </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo3_hemolisis ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Lipemia </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo4_lipemia ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Ictericia </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo5_ictericia ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Glucosa </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo6_glucosa ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">BUN UREICO </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo7_bun_ureico ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Urea Serica </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo8_urea_serica ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Creatinina Serica </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo9_creatinina_serica ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Relacion BUN CREATININA </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo10_relacion_bun_creatinina ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Acido urico serico </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo11_acido_urico_serico ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Colesterol total </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo12_colesterol_total ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Trigliceridos </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo13_trigliceridos ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Colesterol de alta densidad HDL</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo14_colesterol_de_alta_densidad_hdl ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Colesterol de baja densidad LDL</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo15_colesterol_de_baja_densidad_ldl ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Colesterol de muy baja densidad VLDL</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo16_colesterol_de_muy_baja_densidad_vldl ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Indice aterogenico I LDL HDL</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo17_indice_aterogenico_i_ldl_hdl ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Indice aterogenico II COL HDL</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo18_indice_aterogenico_ii_col_hdl ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Indice aterogenico III LDL TG</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo19_indice_aterogenico_iii_ldl_tg ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Indice aterogenico III COL TG</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo20_indice_aterogenico_iii_col_tg ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Lipidos totales</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo21_lipidos_totales ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Bilirrubina total</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo22_bilirrubina_total ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Bilirrubina conjugada directa</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo23_bilirrubina_conjugada_directa ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Bilirrubina no conjugada indirecta</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo24_bilirrubina_no_conjugada_indirecta ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Transaminasa glutamico oxalacetica AST</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo25_transaminasa_glutamico_oxalacetica_ast ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Transaminasa glutamico piruvica ALTV</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo26_transaminasa_glutamico_piruvica_altv ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Gamma glutamil transferasa</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo27_gamma_glutamil_transferasa ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Fosfatasa alcalina</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo28_fosfatasa_alcalina ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Fosfatasa acida total</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo29_fosfatasa_acida_total ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Proteinas totales</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo30_proteinas_totales ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Albumina serica</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo31_albumina_sericaa ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Globulinas sericas</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo32_globulinas_sericas ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Relacion albumina globulina</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo33_relacion_albumina_globulina ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Amilasa serica</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo34_amilasa_serica ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Lipasa serica</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo35_lipasa_serica ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Deshidrogenasa lactica DHL</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo36_deshidrogenasa_lactica_dhl ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Calcio serico</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo37_calcio_serico ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Fosforo serico</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo38_fosforo_serico ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Magnesio</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo39_magnesio ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Sodio serico</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo40_sodio_serico ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Potasio serico</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo41_potasio_serico ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Cloro serico</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo42_cloro_serico ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Creatinfosfoquinasa CK TOTAL</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo43_creatinfosfoquinasa_ck_total ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Creatinfosfoquinasa fraccion CK MB</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo44_creatinfosfoquinasa_fraccion_ck_mb ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">TICB fijacion de hierro</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo45_ticb_fijacion_de_hierro ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Hierro serico</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo46_hierro_serico ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Litio serico</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo47_litio_serico ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Dioxido de carbono</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo48_dioxido_de_carbono ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Alcohol en sangre</label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo49_alcohol_en_sangre ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Factor reumatoide cuantitativo</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo50_factor_reumatoide_cuantitativo ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Proteina c reactiva cuantitativa</label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo51_proteina_c_reactiva_cuantitativa ?>" />
          </div>

          <a href="../menus/menu_mostrar.php" class="ca">Regresar al menu</a>
        </form>
      </div>
    </div>
  </body>

  </html>

<?php
} else {
  header("Location: ../index.php");
}

?>