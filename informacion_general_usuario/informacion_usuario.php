<?php 

session_start();
$conn = pg_connect('host=localhost dbname=salud_integral user=postgres password=123');
// Se captura el usuario y se hace la consulta para obtener sus datos 
$Usuario = $_SESSION['id_users'];

$consulta = "SELECT * FROM users WHERE id_users = '$Usuario' ";
$result = pg_query($conn, $consulta); 
while ($row = pg_fetch_assoc($result)) {
$campo1_name = $row['name'];
$campo2_lastname_paternal = $row['lastname_paternal'];
$campo3_lastname_mother = $row['lastname_mother'];
$campo4_curp = $row['curp'];
$campo5_fecha_de_nacimiento = $row['fecha_de_nacimiento'];
$campo6_sexo = $row['sexo'];
$campo7_calle = $row['calle'];
$campo8_numero_exterior = $row['numero_exterior'];
$campo9_email = $row['email'];
$campo10_correo_adicionalo = $row['correo_adicional'];
$campo11_telefono_personal = $row['telefono_personal'];
$campo12_telefono_emergencia = $row['telefono_emergencia'];
$campo13_telefono_recado = $row['telefono_recado'];
$campo14_paciente = $row['paciente'];
$campo15_asesor_salud = $row['asesor_salud'];
$campo16_administrador = $row['administrador'];
}

 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Informacion Usuario</title>
	<link rel="stylesheet" type="text/css" href="estilos/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="../estilos/styles.css">
</head>
<body class="registro-login">
	<div class="contenedor">
	<form class="formulario" action="controladores/controlador_registro.php" method="POST">
		<h2 class="centrar_texto">Informacion de Usuario</h2><hr /><br />
<!-- Mostramos los datos del usuario logueado -->
		<p class="centro centrar_texto"><b>Datos de usuario</b></p>
	
		<i class="fa-solid fa-user"></i>
		<label  class="etiquetas">Nombre de usuario</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo1_name ?>"><br />
		
		<i class="fa-sharp fa-solid fa-signature"></i>
		<label  class="etiquetas">Apellido Paterno</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo2_lastname_paternal ?>"><br />

		<i class="fa-sharp fa-solid fa-signature"></i>
		<label  class="etiquetas">Apellido Materno</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo3_lastname_mother ?>"><br />

		<i class="fa-solid fa-id-card"></i>
		<label  class="etiquetas">CURP</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo4_curp ?>"><br />

		<i class="fa-solid fa-calendar-days"></i>
		<label  class="etiquetas">Fecha de Nacimiento</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo5_fecha_de_nacimiento ?>"><br />

		<i class="fa-sharp fa-solid fa-user"></i>	
		<label  class="etiquetas">Sexo</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo6_sexo ?>">
		<br /><br />


		
   <!-- Direccion del usuario-->
	
		<hr /><br />
		<p class="centro centrar_texto"><b>Direccion</b></p>

		<i class="fa-solid fa-road"></i>
		<label  class="etiquetas">Calle</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo7_calle ?>"><br />

		<i class="fa-solid fa-person-shelter"></i>
		<label  class="etiquetas">N° Exterior</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo8_numero_exterior ?>"><br />
	
		
	<!-- Contacto del usuario -->

		<hr /><br />
		<p class="centro centrar_texto"><b>Informacion de contacto</b></p>

		<i class="fa-sharp fa-solid fa-at"></i>
		<label  class="etiquetas">Correo Personal</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo9_email ?>"><br />


		<i class="fa-solid fa-envelope-open-text"></i>
		<label  class="etiquetas">Correo Adicional</label >
		<input class="inputs_formulario" type="email" disabled value="<?php echo $campo10_correo_adicionalo ?>"><br />

		<i class="fa-solid fa-mobile"></i>
		<label  class="etiquetas">Telefono Personal</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo11_telefono_personal ?>"><br />

		<i class="fa-sharp fa-solid fa-kit-medical"></i>
		<label  class="etiquetas">Telefono Emergencia</label >
		<input class="inputs_formulario" type="text"  disabled value="<?php echo $campo12_telefono_emergencia ?>"><br />

		<i class="fa-solid fa-message"></i>
		<label >Telefono de recado</label >
		<input class="inputs_formulario" type="text" disabled value="<?php echo $campo13_telefono_recado ?>"><br />


		<a href="../menus/menu_principal.php" class="ca">Regresar al inicio</a>



	</form>
	</div>
</body>
</html>