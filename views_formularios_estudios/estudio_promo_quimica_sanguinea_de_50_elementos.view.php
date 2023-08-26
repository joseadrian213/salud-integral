<?php
session_start();
// Se comprueba que el usuario este logueado 

if (isset($_SESSION['id_users'])) {

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
        <form action="../controladores/controladores_formularios/controlador_quimica_sanguinea_de_50_elementos.php"
          method="POST">
          <!-- Se muestran los errores  -->

          <?php if (isset($_GET['error'])) { ?>
            <p class="error centrar_texto">
              <?php echo $_GET['error']; ?>
            </p>
          <?php } ?>
          <?php if (isset($_GET['success'])) { ?>
            <p class="success centrar_texto">
              <?php echo $_GET['success']; ?>
            </p>
          <?php } ?>

          <div class="contenedor-label-input">
            <!-- Se envian los datos y en caso de error al insertar se mantienen los datos en inputs para evitar isertar de nuevo  -->

            <label class="label-estudio"> Fecha del estudio </label>
            <input class="input-estudio" type="date"
              value="<?php echo !empty($_SESSION['fecha']) ? $_SESSION['fecha'] : null; ?>" name="fecha" /><br /><br />
            <label class="label-estudio"> Hora del estudio </label>
            <input class="input-estudio" type="time"
              value="<?php echo !empty($_SESSION['hora']) ? $_SESSION['hora'] : null; ?>" name="hora" /><br /><br />
            <label class="label-estudio"> Folio </label>
            <input class="input-estudio" type="text" onkeypress='return validaNumericos(event)'
              value="<?php echo !empty($_SESSION['folio']) ? $_SESSION['folio'] : null; ?>" name="folio" />

            <hr class="separacion-tablas" /><br />

            <p class="titulo-estudio">Examen Promo Quimica Sanguinea De 50 Elementos</p><br />
            <label class="label-estudio">Color </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['color']) ? $_SESSION['color'] : null; ?>" name="color"
              placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Aspecto despues de centrifugar </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['aspecto']) ? $_SESSION['aspecto'] : null; ?>" name="aspecto"
              placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Hemolisis </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['hemolisis']) ? $_SESSION['hemolisis'] : null; ?>" name="hemolisis"
              placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Lipemia </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['lipemia']) ? $_SESSION['lipemia'] : null; ?>" name="lipemia"
              placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Ictericia </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['ictericia']) ? $_SESSION['ictericia'] : null; ?>" name="ictericia"
              placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Glucosa </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['glucosa']) ? $_SESSION['glucosa'] : null; ?>" name="glucosa"
              placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">BUN UREICO </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['bun_ureico']) ? $_SESSION['bun_ureico'] : null; ?>" name="bun_ureico"
              placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Urea Serica </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['urea_serica']) ? $_SESSION['urea_serica'] : null; ?>"
              name="urea_serica" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Creatinina Serica </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['creatinina_serica']) ? $_SESSION['creatinina_serica'] : null; ?>"
              name="creatinina_serica" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Relacion BUN CREATININA </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['relacion_bun_creatinina']) ? $_SESSION['relacion_bun_creatinina'] : null; ?>"
              name="relacion_bun_creatinina" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Acido urico serico </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['acido_urico_serico']) ? $_SESSION['acido_urico_serico'] : null; ?>"
              name="acido_urico_serico" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Colesterol total </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['colesterol_total']) ? $_SESSION['colesterol_total'] : null; ?>"
              name="colesterol_total" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Trigliceridos </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['trigliceridos']) ? $_SESSION['trigliceridos'] : null; ?>"
              name="trigliceridos" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Colesterol de alta densidad HDL</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['colesterol_de_alta_densidad_hdl']) ? $_SESSION['colesterol_de_alta_densidad_hdl'] : null; ?>"
              name="colesterol_de_alta_densidad_hdl" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Colesterol de baja densidad LDL</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['colesterol_de_baja_densidad_ldl']) ? $_SESSION['colesterol_de_baja_densidad_ldl'] : null; ?>"
              name="colesterol_de_baja_densidad_ldl" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Colesterol de muy baja densidad VLDL</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['colesterol_de_muy_baja_densidad_vldl']) ? $_SESSION['colesterol_de_muy_baja_densidad_vldl'] : null; ?>"
              name="colesterol_de_muy_baja_densidad_vldl" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Indice aterogenico I LDL HDL</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['indice_aterogenico_i_ldl_hdl']) ? $_SESSION['indice_aterogenico_i_ldl_hdl'] : null; ?>"
              name="indice_aterogenico_i_ldl_hdl" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Indice aterogenico II COL HDL</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['indice_aterogenico_ii_col_hdl']) ? $_SESSION['indice_aterogenico_ii_col_hdl'] : null; ?>"
              name="indice_aterogenico_ii_col_hdl" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Indice aterogenico III LDL TG</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['indice_aterogenico_iii_ldl_tg']) ? $_SESSION['indice_aterogenico_iii_ldl_tg'] : null; ?>"
              name="indice_aterogenico_iii_ldl_tg" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Indice aterogenico III COL TG</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['indice_aterogenico_iii_col_tg']) ? $_SESSION['indice_aterogenico_iii_col_tg'] : null; ?>"
              name="indice_aterogenico_iii_col_tg" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Lipidos totales</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['lipidos_totales']) ? $_SESSION['lipidos_totales'] : null; ?>"
              name="lipidos_totales" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Bilirrubina total</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['bilirrubina_total']) ? $_SESSION['bilirrubina_total'] : null; ?>"
              name="bilirrubina_total" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Bilirrubina conjugada directa</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['bilirrubina_conjugada_directa']) ? $_SESSION['bilirrubina_conjugada_directa'] : null; ?>"
              name="bilirrubina_conjugada_directa" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Bilirrubina no conjugada indirecta</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['bilirrubina_no_conjugada_indirecta']) ? $_SESSION['bilirrubina_no_conjugada_indirecta'] : null; ?>"
              name="bilirrubina_no_conjugada_indirecta" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Transaminasa glutamico oxalacetica AST</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['transaminasa_glutamico_oxalacetica_ast']) ? $_SESSION['transaminasa_glutamico_oxalacetica_ast'] : null; ?>"
              name="transaminasa_glutamico_oxalacetica_ast" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Transaminasa glutamico piruvica ALTV</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['transaminasa_glutamico_piruvica_altv']) ? $_SESSION['transaminasa_glutamico_piruvica_altv'] : null; ?>"
              name="transaminasa_glutamico_piruvica_altv" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Gamma glutamil transferasa</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['gamma_glutamil_transferasa']) ? $_SESSION['gamma_glutamil_transferasa'] : null; ?>"
              name="gamma_glutamil_transferasa" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Fosfatasa alcalina</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['fosfatasa_alcalina']) ? $_SESSION['fosfatasa_alcalina'] : null; ?>"
              name="fosfatasa_alcalina" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Fosfatasa acida total</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['fosfatasa_acida_total']) ? $_SESSION['fosfatasa_acida_total'] : null; ?>"
              name="fosfatasa_acida_total" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Proteinas totales</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['proteinas_totales']) ? $_SESSION['proteinas_totales'] : null; ?>"
              name="proteinas_totales" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Albumina serica</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['albumina_serica']) ? $_SESSION['albumina_serica'] : null; ?>"
              name="albumina_serica" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Globulinas sericas</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['globulinas_sericas']) ? $_SESSION['globulinas_sericas'] : null; ?>"
              name="globulinas_sericas" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Relacion albumina globulina</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['relacion_albumina_globulina']) ? $_SESSION['relacion_albumina_globulina'] : null; ?>"
              name="relacion_albumina_globulina" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Amilasa serica</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['amilasa_serica']) ? $_SESSION['amilasa_serica'] : null; ?>"
              name="amilasa_serica" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Lipasa serica</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['lipasa_serica']) ? $_SESSION['lipasa_serica'] : null; ?>"
              name="lipasa_serica" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Deshidrogenasa lactica DHL</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['deshidrogenasa_lactica_dhl']) ? $_SESSION['deshidrogenasa_lactica_dhl'] : null; ?>"
              name="deshidrogenasa_lactica_dhl" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Calcio serico</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['calcio_serico']) ? $_SESSION['calcio_serico'] : null; ?>"
              name="calcio_serico" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Fosforo serico</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['fosforo_serico']) ? $_SESSION['fosforo_serico'] : null; ?>"
              name="fosforo_serico" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Magnesio</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['magnesio']) ? $_SESSION['magnesio'] : null; ?>" name="magnesio"
              placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Sodio serico</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['sodio_serico']) ? $_SESSION['sodio_serico'] : null; ?>"
              name="sodio_serico" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Potasio serico</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['potasio_serico']) ? $_SESSION['potasio_serico'] : null; ?>"
              name="potasio_serico" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Cloro serico</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['cloro_serico']) ? $_SESSION['cloro_serico'] : null; ?>"
              name="cloro_serico" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Creatinfosfoquinasa CK TOTAL</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['creatinfosfoquinasa_ck_total']) ? $_SESSION['creatinfosfoquinasa_ck_total'] : null; ?>"
              name="creatinfosfoquinasa_ck_total" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Creatinfosfoquinasa fraccion CK MB</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['creatinfosfoquinasa_fraccion_ck_mb']) ? $_SESSION['creatinfosfoquinasa_fraccion_ck_mb'] : null; ?>"
              name="creatinfosfoquinasa_fraccion_ck_mb" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">TICB fijacion de hierro</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['ticb_fijacion_de_hierro']) ? $_SESSION['ticb_fijacion_de_hierro'] : null; ?>"
              name="ticb_fijacion_de_hierro" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Hierro serico</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['hierro_serico']) ? $_SESSION['hierro_serico'] : null; ?>"
              name="hierro_serico" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Litio serico</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['litio_serico']) ? $_SESSION['litio_serico'] : null; ?>"
              name="litio_serico" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Dioxido de carbono</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['dioxido_de_carbono']) ? $_SESSION['dioxido_de_carbono'] : null; ?>"
              name="dioxido_de_carbono" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Alcohol en sangre</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['alcohol_en_sangre']) ? $_SESSION['alcohol_en_sangre'] : null; ?>"
              name="alcohol_en_sangre" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Factor reumatoide cuantitativo</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['factor_reumatoide_cuantitativo']) ? $_SESSION['factor_reumatoide_cuantitativo'] : null; ?>"
              name="factor_reumatoide_cuantitativo" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio">Proteina c reactiva cuantitativa</label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['proteina_c_reactiva_cuantitativa']) ? $_SESSION['proteina_c_reactiva_cuantitativa'] : null; ?>"
              name="proteina_c_reactiva_cuantitativa" placeholder="Ingresa resultado..." />
          </div>
          <input class="boton" type="submit" value="Enviar resultados" />
          <a href="../menus/menu_estudio.php" class="ca">Regresar al menu</a>
        </form>
      </div>
    </div>
  </body>

  </html>
<?php
} else {
  // En caso de no estar logueado el usuario se redirige hacia el login

  header("Location: ../index.php");
}

?>