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
    <title>Coproparasitoscopico De 3 Muestras</title>
    <link rel="stylesheet" type="text/css" href="../estilos/styles.css">
    <script src="../scripts/funciones.js"></script>
  </head>

  <body>
    <div class="contenedor-principal-estudios">
      <div class="form-contenedor">
        <form action="../controladores/controladores_formularios/controlador_coproparasitoscopico_de_3_muestras.php"
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

            <p class="titulo-estudio">Examen Coproparasitoscopico De 3 Muestras</p><br />
            <label class="label-estudio"> Coproparasitoscopico 1 muestra </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['coproparasitoscopico_1_muestra']) ? $_SESSION['coproparasitoscopico_1_muestra'] : null; ?>"
              name="coproparasitoscopico_1_muestra" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio"> Coproparasitoscopico 2 muestra </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['coproparasitoscopico_2_muestra']) ? $_SESSION['coproparasitoscopico_2_muestra'] : null; ?>"
              name="coproparasitoscopico_2_muestra" placeholder="Ingresa resultado..." />
          </div>
          <div class="contenedor-label-input">
            <label class="label-estudio"> Coproparasitoscopico 3 muestra </label>
            <input class="input-estudio" type="text"
              value="<?php echo !empty($_SESSION['coproparasitoscopico_3_muestra']) ? $_SESSION['coproparasitoscopico_3_muestra'] : null; ?>"
              name="coproparasitoscopico_3_muestra" placeholder="Ingresa resultado..." />
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