<?php
include('../conexion_base_de_datos/conexion.php');

// Accedemos al usuario logueado

$Usuario = $_SESSION['id_users'];

// Consultamos tabla pivote relacionada con el usuario para obtener estudios pertenecintes al usuario 

$consulta1 = "SELECT users_id, coproparasitoscopico_3_muestras_id FROM usuario_estudio WHERE users_id = '$Usuario' AND coproparasitoscopico_3_muestras_id IS NOT NULL";

$stmt = pg_query($conn, $consulta1);

// Generacion de botones de manera dinamica para dirigir a informacion de cada estudio 

echo '<link rel="stylesheet" type="text/css" href="../estilos/styles.css">';
echo '<div class="contenedor-principal-form">';
echo '<div class="contenedor-form">';

while ($row = pg_fetch_assoc($stmt)) {

  $coproparasitoscopico_3 = $row['coproparasitoscopico_3_muestras_id'];

  $consluta2 = "SELECT fecha_estudio, id_coproparasitoscopico_3_muestras FROM coproparasitoscopico_3_muestras WHERE id_coproparasitoscopico_3_muestras = $coproparasitoscopico_3";

  $stmt2 = pg_query($conn, $consluta2);

  while ($row2 = pg_fetch_assoc($stmt2)) {
    $fecha = $row2['fecha_estudio'];
    echo '<form action="../views_informacion_estudios/info_estudio_coproparasitoscopico_de_3_muestras.view.php" method="POST">';
    echo "<input type='text' name='copropa' value='$coproparasitoscopico_3' hidden>";
    echo "<input type='submit' value='Coproparasitoscopico de 3 muestras  $fecha' class='boton-form'>";
    echo '</form>';

  }


}
echo '<a href="../menus/menu_mostrar.php" class="ca">Regresar al menu principal</a>';
echo '</div>';

?>