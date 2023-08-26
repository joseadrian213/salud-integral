<?php
session_start();
// Se comprueba que el usuario este logueado 

if (isset($_SESSION['id_users'])) {

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
                    <form action="../controladores/controladores_formularios/controlador_examen_general_de_orina.php"
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
                                   value="<?php echo !empty($_SESSION['fecha']) ? $_SESSION['fecha'] : null; ?>"
                                   name="fecha" /><br /><br />
                              <label class="label-estudio"> Hora del estudio </label>
                              <input class="input-estudio" type="time"
                                   value="<?php echo !empty($_SESSION['hora']) ? $_SESSION['hora'] : null; ?>"
                                   name="hora" /><br /><br />
                              <label class="label-estudio"> Folio </label>
                              <input class="input-estudio" type="text" onkeypress='return validaNumericos(event)'
                                   value="<?php echo !empty($_SESSION['folio']) ? $_SESSION['folio'] : null; ?>"
                                   name="folio" />

                              <hr class="separacion-tablas" /><br />

                              <p class="titulo-estudio">Examen Macroscopico</p><br />
                              <label class="label-estudio"> Color </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['color']) ? $_SESSION['color'] : null; ?>" name="color"
                                   placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Aspecto </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['aspecto']) ? $_SESSION['aspecto'] : null; ?>"
                                   name="aspecto" placeholder="Ingresa resultado..." />
                         </div>

                         <hr class="separacion-tablas" /><br />

                         <div class="contenedor-label-input">
                              <p class="titulo-estudio">Analisis Fisico Quimico</p><br />
                              <label class="label-estudio"> Densidad </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['densidad']) ? $_SESSION['densidad'] : null; ?>"
                                   name="densidad" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> PH </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['ph']) ? $_SESSION['ph'] : null; ?>" name="ph"
                                   placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Glucosa </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['glucosa']) ? $_SESSION['glucosa'] : null; ?>"
                                   name="glucosa" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Proteinas </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['proteinas']) ? $_SESSION['proteinas'] : null; ?>"
                                   name="proteinas" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Sangre </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['sangre']) ? $_SESSION['sangre'] : null; ?>"
                                   name="sangre" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Hemoglobina </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['hemoglobina']) ? $_SESSION['hemoglobina'] : null; ?>"
                                   name="hemoglobina" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> C_cetonico </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['c_cetonicos']) ? $_SESSION['c_cetonicos'] : null; ?>"
                                   name="c_cetonicos" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Bilirrubina </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['bilirrubina']) ? $_SESSION['bilirrubina'] : null; ?>"
                                   name="bilirrubina" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Urobilinogeno </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['urobilinogeno']) ? $_SESSION['urobilinogeno'] : null; ?>"
                                   name="urobilinogeno" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Nitritos </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['nitritos']) ? $_SESSION['nitritos'] : null; ?>"
                                   name="nitritos" placeholder="Ingresa resultado..." />
                         </div>

                         <hr class="separacion-tablas" /><br />

                         <div class="contenedor-label-input">
                              <p class="titulo-estudio">Analisis Microscopico De Sedimento</p><br />
                              <label class="label-estudio"> Celulas Epiteliales </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['celulas_epiteliales']) ? $_SESSION['celulas_epiteliales'] : null; ?>"
                                   name="celulas_epiteliales" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Leucocitos </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['leucocitos']) ? $_SESSION['leucocitos'] : null; ?>"
                                   name="leucocitos" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Bacterias </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['bacterias']) ? $_SESSION['bacterias'] : null; ?>"
                                   name="bacterias" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Filamentos De Mucina </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['filamentos_de_mucina']) ? $_SESSION['filamentos_de_mucina'] : null; ?>"
                                   name="filamentos_de_mucina" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Cristales De Oxalato De Calcio </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['cristales_de_oxalato_de_calcio']) ? $_SESSION['cristales_de_oxalato_de_calcio'] : null; ?>"
                                   name="cristales_de_oxalato_de_calcio" placeholder="Ingresa resultado..." />
                         </div>
                         <div class="contenedor-label-input">
                              <label class="label-estudio"> Antigeno Especifico De Prostata PSA </label>
                              <input class="input-estudio" type="text"
                                   value="<?php echo !empty($_SESSION['antigeno_especifico_de_prostata_PSA']) ? $_SESSION['antigeno_especifico_de_prostata_PSA'] : null; ?>"
                                   name="antigeno_especifico_de_prostata_PSA" placeholder="Ingresa resultado..." />
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