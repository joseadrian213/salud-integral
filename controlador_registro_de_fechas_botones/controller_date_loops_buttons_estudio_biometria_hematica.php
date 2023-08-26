<?php
include('../conexion_base_de_datos/conexion.php');

// Accedemos al usuario logueado

$Usuario = $_SESSION['id_users'];

// Consultamos tabla pivote relacionada con el usuario para obtener estudios pertenecintes al usuario 

$consulta1 = "SELECT users_id, biometria_hematica_completa_id FROM usuario_estudio WHERE users_id = '$Usuario' AND biometria_hematica_completa_id IS NOT NULL";

$stmt = pg_query($conn, $consulta1);

// Generacion de botones de manera dinamica para dirigir a informacion de cada estudio 

echo '<link rel="stylesheet" type="text/css" href="../estilos/styles.css">';
echo '<div class="contenedor-principal-form">';
echo '<div class="contenedor-form">';

while ($row = pg_fetch_assoc($stmt)) {

  $biometria_id = $row['biometria_hematica_completa_id'];

  $consluta2 = "SELECT fecha_estudio, id_biometria_hematica_completa FROM biometria_hematica_completa WHERE id_biometria_hematica_completa = $biometria_id";

  $stmt2 = pg_query($conn, $consluta2);

  while ($row2 = pg_fetch_assoc($stmt2)) {
    $fecha = $row2['fecha_estudio'];
    echo '<form action="../views_informacion_estudios/info_estudio_biometria_hematica_completa.view.php" method="POST">';
    echo "<input type='text' name='biometria' value='$biometria_id' hidden>";
    echo "<input type='submit' value='Biometria Hematica Completa  $fecha' class='boton-form'>";
    echo '</form>';

  }


}
echo '<a href="../menus/menu_mostrar.php" class="ca">Regresar al menu principal</a>';
echo '</div>';

?>