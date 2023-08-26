<?php
include('../conexion_base_de_datos/conexion.php');

if (isset($_SESSION['id_users'])) {

  // Obtenemos el dato enviado desde los botones de informacion por estudio 
  $coproparasitoscopico_3 = $_POST['copropa'];

  // Ralizamos las consultas y las recorremos para rellenar los inputs con los valores correspondientes a cada estudio
  $consulta = "SELECT * FROM coproparasitoscopico_3_muestras WHERE id_coproparasitoscopico_3_muestras ='$coproparasitoscopico_3'";

  $fila = pg_query($consulta);
  $fila = pg_num_rows($fila);
  $fila = intval($fila);

  $result1 = pg_query($conn, $consulta);
  while ($row = pg_fetch_assoc($result1)) {
    $campo1_fecha = $row['fecha_estudio'];
    $campo1_folio = $row['folio'];
    $campo1_hora = $row['hora'];
  }

  $consulta2 = "SELECT * FROM coproparasitoscopico_de_3_muestras WHERE id_coproparasitoscopico_de_3_muestras = '$coproparasitoscopico_3'";
  $result2 = pg_query($conn, $consulta2);
  while ($row = pg_fetch_assoc($result2)) {
    $campo1_coproparasitoscopico_1_muestras = $row['coproparasitoscopico_1_muestras'];
    $campo2_coproparasitoscopico_2_muestras = $row['coproparasitoscopico_2_muestras'];
    $campo3_coproparasitoscopico_3_muestras = $row['coproparasitoscopico_3_muestras'];
  }


  ?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coproparasitoscopico De 3 Muestras</title>
    <link rel="stylesheet" type="text/css" href="../estilos/styles.css">
    <script src="../scripts/funciones.js"></script>
  </head>

  <body>
    <div class="contenedor-principal-estudios">
      <div class="form-contenedor">
        <form action="../conexion_base_datos/conexiones_formularios/conexion_coproparasitoscopico_de_3_muestras.php"
          method="POST">

          <div class="contenedor-label-input">

            <label class="label-estudio"> Fecha del estudio </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo1_fecha ?>" /><br /><br />
            <label class="label-estudio"> Hora del estudio </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo1_hora ?>" /><br /><br />
            <label class="label-estudio"> Folio </label>
            <input class="input-estudio" type="text" disabled value="<?php echo $campo1_folio ?>" />

            <hr class="separacion-tablas" /><br />

            <p class="titulo-estudio">Examen Coproparasitoscopico De 3 Muestras</p><br />
            <label class="label-estudio"> Coproparasitoscopico 1 muestra </label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo1_coproparasitoscopico_1_muestras ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio"> Coproparasitoscopico 2 muestra </label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo2_coproparasitoscopico_2_muestras ?>" />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio"> Coproparasitoscopico 3 muestra </label>
            <input class="input-estudio" type="text" disabled
              value="<?php echo $campo3_coproparasitoscopico_3_muestras ?>" />
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