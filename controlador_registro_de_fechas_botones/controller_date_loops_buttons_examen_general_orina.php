<?php

include('../conexion_base_de_datos/conexion.php');

// Accedemos al usuario logueado
$Usuario = $_SESSION['id_users'];

// Consultamos tabla pivote relacionada con el usuario para obtener estudios pertenecintes al usuario 
$consulta1 = "SELECT users_id, examen_general_de_orina_id FROM usuario_estudio WHERE users_id = '$Usuario' AND examen_general_de_orina_id IS NOT NULL";

$stmt = pg_query($conn, $consulta1);
// Generacion de botones de manera dinamica para dirigir a informacion de cada estudio 
echo '<link rel="stylesheet" type="text/css" href="../estilos/styles.css">';
echo '<div class="contenedor-principal-form">';
echo '<div class="contenedor-form">';

while ($row = pg_fetch_assoc($stmt)) {
  $examen_general = $row['examen_general_de_orina_id'];

  $consluta2 = "SELECT fecha_estudio, id_examen_general_de_orina FROM examen_general_de_orina WHERE id_examen_general_de_orina = $examen_general";

  $stmt2 = pg_query($conn, $consluta2);

  while ($row2 = pg_fetch_assoc($stmt2)) {
    $fecha = $row2['fecha_estudio'];

    echo '<form action="../views_informacion_estudios/info_estudio_examen_general_orina.view.php" method="POST">';
    echo "<input type='text' name='general' value='$examen_general' hidden>";
    echo "<input type='submit' value='Examen general de orina  $fecha' class='boton-form'>";
    echo '</form>';

  }


}
echo '<a href="../menus/menu_mostrar.php" class="ca">Regresar al menu principal</a>';
echo '</div>';



?>