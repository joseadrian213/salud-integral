<?php
include('../conexion_base_de_datos/conexion.php');

// Obtenemos el dato enviado desde los botones de informacion por estudio 

if (isset($_SESSION['id_users'])) {

     // Ralizamos las consultas y las recorremos para rellenar los inputs con los valores correspondientes a cada estudio


     $examen_general = $_POST['general'];

     $consulta = "SELECT * FROM examen_general_de_orina WHERE id_examen_general_de_orina ='$examen_general'";
     $fila = pg_query($consulta);
     $fila = pg_num_rows($fila);
     $fila = intval($fila);
     $result1 = pg_query($conn, $consulta);

     while ($row = pg_fetch_assoc($result1)) {
          $campo1_fecha = $row['fecha_estudio'];
          $campo1_folio = $row['folio'];
          $campo1_hora = $row['hora'];
     }

     $consulta2 = "SELECT * FROM examen_macroscopico WHERE id_examen_macroscopico = $examen_general";
     $result2 = pg_query($conn, $consulta2);
     while ($row = pg_fetch_assoc($result2)) {
          $campo1_color = $row['color'];
          $campo2_aspecto = $row['aspecto'];
     }

     $consulta3 = "SELECT * FROM analisis_fisico_quimico WHERE id_analisis_fisico_quimico = $examen_general";
     $result3 = pg_query($conn, $consulta3);
     while ($row = pg_fetch_assoc($result3)) {
          $campo1_densidad = $row['densidad'];
          $campo2_ph = $row['ph'];
          $campo3_glucosa = $row['glucosa'];
          $campo4_proteinas = $row['proteinas'];
          $campo5_sangre = $row['sangre'];
          $campo6_hemoglobinas = $row['hemoglobina'];
          $campo7_c_cetonicos = $row['c_cetonicos'];
          $campo8_bilirrubina = $row['bilirrubina'];
          $campo9_urobilinogeno = $row['urobilinogeno'];
          $campo10_nitritos = $row['nitritos'];

     }

     $consulta4 = "SELECT * FROM analisis_microscopico_de_sedimento WHERE id_analisis_microscopico_de_sedimento = $examen_general";
     $result4 = pg_query($conn, $consulta4);
     while ($row = pg_fetch_assoc($result4)) {
          $campo1_celulas_epiteliales = $row['celulas_epiteliales'];
          $campo2_leucocitos = $row['leucocitos'];
          $campo3_bacterias = $row['bacterias'];
          $campo4_filamentos_de_mucina = $row['filamentos_de_mucina'];
          $campo5_cristales_de_oxalato_de_calcio = $row['cristales_de_oxalato_de_calcio'];
          $campo6_antigeno_especifico_de_prostata_psa = $row['antigeno_especifico_de_prostata_psa'];

     }

     ?>


     <!DOCTYPE html>
     <html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Examen General De Orina</title>
          <link rel="stylesheet" type="text/css" href="../estilos/styles.css">
          <script src="../scripts/funciones.js"></script>
     </head>

     <body>
          <div class="contenedor-principal-estudios">
               <div class="form-contenedor">
                    <form action="../conexion_base_datos/conexiones_formularios/conexion_examen_general_de_orina.php"
                         method="POST">

                         <div class="contenedor-label-input">

                              <label class="label-estudio"> Fecha del estudio </label>
                              <input class="input-estudio" type="text" disabled
                                   value="<?php echo $campo1_fecha ?>" /><br /><br />
                              <label class="label-estudio"> Hora del estudio </label>
                              <input class="input-estudio" type="text" disabled
                                   value="<?php echo $campo1_hora ?>" /><br /><br />
                              <label class="label-estudio"> Folio </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo1_folio ?>" />

                              <hr class="separacion-tablas" /><br />

                              <p class="titulo-estudio">Examen Macroscopico</p><br />
                              <label class="label-estudio"> Color </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo1_color ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Aspecto </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo2_aspecto ?>" />
                         </div>

                         <hr class="separacion-tablas" /><br />

                         <div class="contenedor-label-input">
                              <p class="titulo-estudio">Analisis Fisico Quimico</p><br />
                              <label class="label-estudio"> Densidad </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo1_densidad ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> PH </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo2_ph ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Glucosa </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo3_glucosa ?>">
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Proteinas </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo4_proteinas ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Sangre </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo5_sangre ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Hemoglobina </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo6_hemoglobinas ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> C_cetonico </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo7_c_cetonicos ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Bilirrubina </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo8_bilirrubina ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Urobilinogeno </label>
                              <input class="input-estudio" type="text" disabled
                                   value="<?php echo $campo9_urobilinogeno ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Nitritos </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo10_nitritos ?>" />
                         </div>

                         <hr class="separacion-tablas" /><br />

                         <div class="contenedor-label-input">
                              <p class="titulo-estudio">Analisis Microscopico De Sedimento</p><br />
                              <label class="label-estudio"> Celulas Epiteliales </label>
                              <input class="input-estudio" type="text" disabled
                                   value="<?php echo $campo1_celulas_epiteliales ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Leucocitos </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo2_leucocitos ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Bacterias </label>
                              <input class="input-estudio" type="text" disabled value="<?php echo $campo3_bacterias ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Filamentos De Mucina </label>
                              <input class="input-estudio" type="text" disabled
                                   value="<?php echo $campo4_filamentos_de_mucina ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Cristales De Oxalato De Calcio </label>
                              <input class="input-estudio" type="text" disabled
                                   value="<?php echo $campo5_cristales_de_oxalato_de_calcio ?>" />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Antigeno Especifico De Prostata PSA </label>
                              <input class="input-estudio" type="text" disabled
                                   value="<?php echo $campo6_antigeno_especifico_de_prostata_psa ?>" />
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