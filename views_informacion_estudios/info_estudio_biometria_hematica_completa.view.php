<?php
include('../conexion_base_de_datos/conexion.php');

if (isset($_SESSION['id_users'])) {

    // Obtenemos el dato enviado desde los botones de informacion por estudio 

    $Biometria = $_POST['biometria'];

    // Ralizamos las consultas y las recorremos para rellenar los inputs con los valores correspondientes a cada estudio

    $consulta = "SELECT * FROM biometria_hematica_completa WHERE id_biometria_hematica_completa ='$Biometria'";
    $fila = pg_query($consulta);
    $fila = pg_num_rows($fila);
    $fila = intval($fila);
    $result1 = pg_query($conn, $consulta);
    while ($row = pg_fetch_assoc($result1)) {
        $campo1_fecha = $row['fecha_estudio'];
        $campo1_folio = $row['folio'];
        $campo1_hora = $row['hora'];
    }


    $consulta2 = "SELECT * FROM formula_roja WHERE id_formula_roja = '$Biometria'";
    $result = pg_query($conn, $consulta2);
    while ($row = pg_fetch_assoc($result)) {
        $campo1 = $row['eritrocitos'];
        $campo2 = $row['hemoglobina'];
        $campo3 = $row['hematocrito'];
        $campo4 = $row['volumen_globular_medio'];
        $campo5 = $row['concentracion_media_de_hb'];
        $campo6 = $row['conc_media_de_hb_corpuscular'];
        $campo7 = $row['indice_de_distribucion_de_eritrocitos_rdw'];
    }

    $consulta3 = "SELECT * FROM serie_plaquetaria WHERE id_serie_plaquetaria = '$Biometria'";
    $result2 = pg_query($conn, $consulta3);
    while ($row = pg_fetch_assoc($result2)) {
        $campo1_plaquetas = $row['plaquetas'];
        $campo2_volumen_plaquetario_pedio = $row['volumen_plaquetario_pedio'];

    }

    $consulta4 = "SELECT * FROM formula_blanca WHERE id_formula_blanca = '$Biometria'";
    $result3 = pg_query($conn, $consulta4);
    while ($row = pg_fetch_assoc($result3)) {
        $campo1_leucocitos_totales = $row['leucocitos_totales'];
        $campo2_neutrofilos_totales = $row['neutrofilos_totales'];
        $campo3_neutrofilos_segmentados = $row['neutrofilos_segmentados'];
        $campo4_neutrofilos_en_banda = $row['neutrofilos_en_banda'];
        $campo5_metamielocitos = $row['metamielocitos'];
        $campo6_mielocitos = $row['mielocitos'];
        $campo7_promuelocitos = $row['promuelocitos'];
        $campo8_blastos = $row['blastos'];
        $campo9_eosinofilos = $row['eosinofilos'];
        $campo10_basofilos = $row['basofilos'];
        $campo11_monocitos = $row['monocitos'];
        $campo12_linfocitos = $row['linfocitos'];
    }

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
                <form action="../conexion_base_datos/conexiones_formularios/conexion_biometria_hematica_completa.php"
                    method="POST">

                    <div class="contenedor-label-input">

                        <label class="label-estudio"> Fecha del estudio </label>
                        <input class="input-estudio" type="text" disabled value="<?php echo $campo1_fecha ?>" /><br /><br />
                        <label class="label-estudio"> Hora del estudio </label>
                        <input class="input-estudio" type="text" disabled value="<?php echo $campo1_hora ?>" /><br /><br />
                        <label class="label-estudio"> Folio </label>
                        <input class="input-estudio" type="text" disabled value="<?php echo $campo1_folio ?>" />

                        <hr class="separacion-tablas" /><br />

                        <p class="titulo-estudio">Formula roja</p><br />
                        <label class="label-estudio"> Eritrocitos </label>
                        <input class="input-estudio" type="text" disabled name="eritrocitos"
                            value="<?php echo $campo1 ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Hemoglobina </label>
                        <input class="input-estudio" type="text" disabled name="hemoglobina"
                            value="<?php echo $campo2 ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Hematocrito </label>
                        <input class="input-estudio" type="text" disabled name="hematocrito"
                            value="<?php echo $campo3 ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Volumen globular medio </label>
                        <input class="input-estudio" type="text" disabled name="volumen_globular_medio"
                            value="<?php echo $campo4 ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Concentracion media de HB </label>
                        <input class="input-estudio" type="text" disabled name="concentracion_media_de_hb"
                            value="<?php echo $campo5 ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Conc media de HB corpuscular </label>
                        <input class="input-estudio" type="text" disabled name="conc_media_de_hb_corpuscular"
                            value="<?php echo $campo6 ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Indice de distribucion de eritrocitos RDW </label>
                        <input class="input-estudio" type="text" disabled name="indice_de_distribucion_de_eritrocitos_rdw"
                            value="<?php echo $campo7 ?>" />
                    </div>

                    <hr class="separacion-tablas" /><br />

                    <div class="contenedor-label-input">
                        <p class="titulo-estudio">Serie plaquetaria</p><br />
                        <label class="label-estudio"> Plaquetas </label>
                        <input class="input-estudio" type="text" disabled name="plaquetas"
                            value="<?php echo $campo1_plaquetas ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Volumen plaquetario pedio </label>
                        <input class="input-estudio" type="text" disabled name="volumen_plaquetario_pedio"
                            value="<?php echo $campo1_plaquetas ?>" />
                    </div>

                    <hr class="separacion-tablas" /><br />

                    <div class="contenedor-label-input">
                        <p class="titulo-estudio">Formula blanca</p><br />
                        <label class="label-estudio"> Leucocitos totales </label>
                        <input class="input-estudio" type="text" disabled name="leucocitos_totales"
                            value="<?php echo $campo1_leucocitos_totales ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Neutrofilos totales </label>
                        <input class="input-estudio" type="text" disabled name="neutrofilos_totales"
                            value="<?php echo $campo2_neutrofilos_totales ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Neutrofilos segmentados </label>
                        <input class="input-estudio" type="text" disabled name="neutrofilos_segmentados"
                            value="<?php echo $campo3_neutrofilos_segmentados ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Neutrofilos en banda </label>
                        <input class="input-estudio" type="text" disabled name="neutrofilos_en_banda"
                            value="<?php echo $campo4_neutrofilos_en_banda ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Metamielocitos </label>
                        <input class="input-estudio" type="text" disabled name="metamielocitos"
                            value="<?php echo $campo5_metamielocitos ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Mielocitos </label>
                        <input class="input-estudio" type="text" disabled name="mielocitos"
                            value="<?php echo $campo6_mielocitos ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Promuelocitos </label>
                        <input class="input-estudio" type="text" disabled name="promuelocitos"
                            value="<?php echo $campo7_promuelocitos ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Blastos </label>
                        <input class="input-estudio" type="text" disabled name="blastos"
                            value="<?php echo $campo8_blastos ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Eosinofilos </label>
                        <input class="input-estudio" type="text" disabled name="eosinofilos"
                            value="<?php echo $campo9_eosinofilos ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Basofilos </label>
                        <input class="input-estudio" type="text" disabled name="basofilos"
                            value="<?php echo $campo10_basofilos ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Monocitos </label>
                        <input class="input-estudio" type="text" disabled name="monocitos"
                            value="<?php echo $campo11_monocitos ?>" />
                    </div>
                    <div class="contenedor-label-input">
                        <label class="label-estudio"> Linfocitos </label>
                        <input class="input-estudio" type="text" disabled name="linfocitos"
                            value="<?php echo $campo12_linfocitos ?>" />
                    </div>

                    <a href="../menus/menu_mostrar.php" class="ca">Regresar al menu</a>


                </form>
            </div>
        </div>
    </body>
    </body>

    </html>

<?php
} else {
    header("Location: ../index.php");
}

?>