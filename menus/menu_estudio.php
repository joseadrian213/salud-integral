<?php
session_start();
// Comprobamos informacion del usuario con la sesion 

if (isset($_SESSION['id_users'])) {

  ?>


  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Principal</title>
    <link rel="stylesheet" type="text/css" href="../estilos/styles.css">
  </head>

  <body>
    <header class="header-principal">
      <div class="container-div">
        <h1 class="h1-estilo">Salud Integral</h1>
        <nav class="barra">
          <form action="cerrar_sesion.php">
            <!-- Mostramos el nombre del usuario en header -->

            <a class="nav" href="../informacion_general_usuario/informacion_usuario.php">
              Hola: <span class="span">
                <?php echo $_SESSION['name']; ?>
              </span>
            </a>
            <a class="nav" href="../menus/menu_principal.php"> | Regresar al menu principal | </a>
            <a class="nav" href="../funciones/cerrar_sesion.php"> Cerrar Sesión</a>
          </form>
        </nav>
      </div>
    </header><br /><br /><br />
    <main>
      <div class="contenedor-principal-form">
        <div class="contenedor-form">
          <!-- Menu para rellenar estudios  -->
          <a href="../views_formularios_estudios/biometria_hematica_completa.view.php" class="boton-form">Examen Biometria
            hematica completa</a>
          <a href="../views_formularios_estudios/coproparasitoscopico_de_3_muestras.view.php" class="boton-form">Examen
            Coproparasitoscopico de 3 muestras</a>
          <a href="../views_formularios_estudios/examen_general_orina.view.php" class="boton-form">Examen general orina</a>
          <a href="../views_formularios_estudios/estudio_promo_quimica_sanguinea_de_50_elementos.view.php" class="boton-form">Examen Promo
            quimica sanguinea de 50 elementos</a>
        </div>
    </main>
    <?php
    $year = date("Y");
    ?>
    <footer class="footer">
      Salud Integral - Todos los derechos reservados
      <?php echo $year ?>
    </footer>
  </body>

  </html>

<?php
} else {
  header("Location: ../index.php");
}

?>