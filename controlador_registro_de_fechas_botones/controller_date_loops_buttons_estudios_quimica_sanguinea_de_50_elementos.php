<?php
include('../conexion_base_de_datos/conexion.php');

// Accedemos al usuario logueado

$Usuario = $_SESSION['id_users'];

// Consultamos tabla pivote relacionada con el usuario para obtener estudios pertenecintes al usuario 

$consulta1 = "SELECT users_id, promo_quimica_sanguinea_de_50_elementos_id FROM usuario_estudio WHERE users_id = '$Usuario' AND promo_quimica_sanguinea_de_50_elementos_id IS NOT NULL";
$stmt = pg_query($conn, $consulta1);

// Generacion de botones de manera dinamica para dirigir a informacion de cada estudio 

echo '<link rel="stylesheet" type="text/css" href="../estilos/styles.css">';
echo '<div class="contenedor-principal-form">';
echo '<div class="contenedor-form">';

while ($row = pg_fetch_assoc($stmt)) {

  $promo_50_elementos = $row['promo_quimica_sanguinea_de_50_elementos_id'];

  $consluta2 = "SELECT fecha_estudio, id_promo_quimica_sanguinea_de_50_elementos FROM promo_quimica_sanguinea_de_50_elementos WHERE id_promo_quimica_sanguinea_de_50_elementos = $promo_50_elementos";

  $stmt2 = pg_query($conn, $consluta2);

  while ($row2 = pg_fetch_assoc($stmt2)) {
    $fecha = $row2['fecha_estudio'];
    echo '<form action="../views_informacion_estudios/info_estudio_quimica_sanguinea_de_50_elementos.view.php" method="POST">';
    echo "<input type='text' name='promo' value='$promo_50_elementos' hidden>";
    echo "<input type='submit' value='Promo quimica sanguinea de 50 elementos  $fecha' class='boton-form'>";
    echo '</form>';

  }


}
echo '<a href="../menus/menu_mostrar.php" class="ca">Regresar al menu principal</a>';
echo '</div>';



?>