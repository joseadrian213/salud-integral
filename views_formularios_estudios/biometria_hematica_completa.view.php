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
        <title>Examen Biometria Hematica Completa</title>
        <link rel="stylesheet" type="text/css" href="../estilos/styles.css">
        <script src="../scripts/funciones.js"></script>
    </head>

    <body>
        <div class="contenedor-principal-estudios">
            <div class="form-contenedor">
                <form action="../controladores/controladores_formularios/controlador_biometria_hematica_completa.php"
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
                            value="<?php echo !empty($_SESSION['folio']) ? $_SESSION['folio'] : null; ?>" name="folio" />

                        <hr class="separacion-tablas" /><br />

                        <p class="titulo-estudio">Formula roja</p><br />
                        <label class="label-estudio"> Eritrocitos </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['eritrocitos']) ? $_SESSION['eritrocitos'] : null; ?>"
                            name="eritrocitos" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Hemoglobina </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['hemoglobina']) ? $_SESSION['hemoglobina'] : null; ?>"
                            name="hemoglobina" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Hematocrito </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['hematocrito']) ? $_SESSION['hematocrito'] : null; ?>"
                            name="hematocrito" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Volumen globular medio </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['volumen_globular_medio']) ? $_SESSION['volumen_globular_medio'] : null; ?>"
                            name="volumen_globular_medio" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Concentracion media de HB </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['concentracion_media_de_hb']) ? $_SESSION['concentracion_media_de_hb'] : null; ?>"
                            name="concentracion_media_de_hb" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Conc media de HB corpuscular </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['conc_media_de_hb_corpuscular']) ? $_SESSION['conc_media_de_hb_corpuscular'] : null; ?>"
                            name="conc_media_de_hb_corpuscular" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Indice de distribucion de eritrocitos RDW </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['indice_de_distribucion_de_eritrocitos_rdw']) ? $_SESSION['indice_de_distribucion_de_eritrocitos_rdw'] : null; ?>"
                            name="indice_de_distribucion_de_eritrocitos_rdw" placeholder="Ingresa resultado..." />
                    </div>

                    <hr class="separacion-tablas" /><br />

                    <div class="contenedor-label-input">
                        <p class="titulo-estudio">Serie plaquetaria</p><br />
                        <label class="label-estudio"> Plaquetas </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['plaquetas']) ? $_SESSION['plaquetas'] : null; ?>"
                            name="plaquetas" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Volumen plaquetario pedio </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['volumen_plaquetario_pedio']) ? $_SESSION['volumen_plaquetario_pedio'] : null; ?>"
                            name="volumen_plaquetario_pedio" placeholder="Ingresa resultado..." />
                    </div>

                    <hr class="separacion-tablas" /><br />

                    <div class="contenedor-label-input">
                        <p class="titulo-estudio">Formula blanca</p><br />
                        <label class="label-estudio"> Leucocitos totales </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['leucocitos_totales']) ? $_SESSION['leucocitos_totales'] : null; ?>"
                            name="leucocitos_totales" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Neutrofilos totales </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['neutrofilos_totales']) ? $_SESSION['neutrofilos_totales'] : null; ?>"
                            name="neutrofilos_totales" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Neutrofilos segmentados </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['neutrofilos_segmentados']) ? $_SESSION['neutrofilos_segmentados'] : null; ?>"
                            name="neutrofilos_segmentados" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Neutrofilos en banda </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['neutrofilos_en_banda']) ? $_SESSION['neutrofilos_en_banda'] : null; ?>"
                            name="neutrofilos_en_banda" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Metamielocitos </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['metamielocitos']) ? $_SESSION['metamielocitos'] : null; ?>"
                            name="metamielocitos" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Mielocitos </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['mielocitos']) ? $_SESSION['mielocitos'] : null; ?>"
                            name="mielocitos" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Promuelocitos </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['promuelocitos']) ? $_SESSION['promuelocitos'] : null; ?>"
                            name="promuelocitos" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Blastos </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['blastos']) ? $_SESSION['blastos'] : null; ?>" name="blastos"
                            placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Eosinofilos </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['eosinofilos']) ? $_SESSION['eosinofilos'] : null; ?>"
                            name="eosinofilos" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Basofilos </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['basofilos']) ? $_SESSION['basofilos'] : null; ?>"
                            name="basofilos" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Monocitos </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['monocitos']) ? $_SESSION['monocitos'] : null; ?>"
                            name="monocitos" placeholder="Ingresa resultado..." />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Linfocitos </label>
                        <input class="input-estudio" type="text"
                            value="<?php echo !empty($_SESSION['linfocitos']) ? $_SESSION['linfocitos'] : null; ?>"
                            name="linfocitos" placeholder="Ingresa resultado..." />
                    </div>


                    <input class="boton" type="submit" value="Enviar resultados" />
                    <a href="../menus/menu_estudio.php" class="ca">Regresar al menu</a>


                </form>
            </div>
        </div>
    </body>
    </body>

    </html>

    <?php
} else {
    // En caso de no estar logueado el usuario se redirige hacia el login
    header("Location: ../index.php");
}

?>