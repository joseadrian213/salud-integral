<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../estilos/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
		integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="../scripts/funciones.js"></script>
</head>

<body class="registro-login">
	<div class="contenedor">
		<form class="formulario" action="../controladores/controlador_registro.php" method="POST">
			<h2 class="centrar_texto">Registro de Usuarios</h2>
			<hr /><br />
			<!-- Se muestran errores -->

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

			<p class="centro centrar_texto"><b>Datos de usuario</b></p>

			<i class="fa-solid fa-user"></i>
			<label class="etiquetas">Nombre de usuario</label>
			<input class="inputs_formulario" type="text" name="nombre" required minlength="3"
				placeholder="Ingrese su nombre..."><br />

			<i class="fa-sharp fa-solid fa-signature"></i>
			<label class="etiquetas">Apellido Paterno</label>
			<input class="inputs_formulario" type="text" name="apellidop" required minlength="3"
				placeholder="Inserte su apellido paterno..."><br />

			<i class="fa-sharp fa-solid fa-signature"></i>
			<label class="etiquetas">Apellido Materno</label>
			<input class="inputs_formulario" type="text" name="apellidom" required minlength="3"
				placeholder="Inserte su apellido materno..."><br />

			<i class="fa-solid fa-id-card"></i>
			<label class="etiquetas">CURP</label>
			<input class="inputs_formulario" type="text" name="llave_acceso"
				onkeyup="javascript:this.value=this.value.toUpperCase();" required minlength="18" maxlength="18"
				placeholder="Inserte su CURP..."><br />

			<label class="etiquetas">¿No conoces tu curp?</label>
			<a href="https://www.gob.mx/curp/" target="_blank" class="ca">Consultalo aqui</a><br /><br />

			<i class="fa-solid fa-calendar-days"></i>
			<label class="etiquetas">Fecha de Nacimiento</label>
			<input class="inputs_formulario" type="date" name="fecha" required minlength="3"
				placeholder="Inserte su apellido materno..."><br />

			<i class="fa-sharp fa-solid fa-user"></i>
			<label class="etiquetas">Sexo</label>
			<select name="sexo">
				<option value="0">---Elije una opcion---</option>
				<option value="Masculino">Masculino</option>
				<option value="Femenino">Femenino</option>
			</select><br /><br />

			<i class="fa-solid fa-lock"></i>
			<label class="etiquetas">Contraseña</label><br />
			<input class="inputs_formulario" type="password" name="contrasena" required minlength="8" maxlength="30"
				placeholder="Ingresa una contraseña..."><br />
			<label class="etiquetas">Nota: La contraseña debe contener: <br />
				*Una letra minuscula.<br />
				*Una letra mayuscula.<br />
				*Un numero.<br />
				<br /></label>
			<i class="fa-solid fa-lock"></i>
			<label class="etiquetas">Confirma contraseña</label>
			<input class="inputs_formulario" type="password" name="recontrasena" required minlength="8" maxlength="30"
				placeholder="Confirma tu contraseña..."><br />


			<!-- Direccion del usuario-->

			<hr /><br />
			<p class="centro centrar_texto"><b>Direccion</b></p>

			<i class="fa-solid fa-road"></i>
			<label class="etiquetas">Calle</label>
			<input class="inputs_formulario" type="text" name="calle" required minlength="3"
				placeholder="Ingrese su calle..."><br />

			<i class="fa-solid fa-person-shelter"></i>
			<label class="etiquetas">N° Exterior</label>
			<input class="inputs_formulario" type="text" name="exterior" required
				placeholder="Ingrese el numero exterior..."><br />


			<!-- Contacto del usuario -->

			<hr /><br />
			<p class="centro centrar_texto"><b>Informacion de contacto</b></p>

			<i class="fa-sharp fa-solid fa-at"></i>
			<label class="etiquetas">Correo Personal</label>
			<input class="inputs_formulario" type="email" name="correop" placeholder="Ingrese correo personal..."><br />


			<i class="fa-solid fa-envelope-open-text"></i>
			<label class="etiquetas">Correo Adicional</label>
			<input class="inputs_formulario" type="email" name="correoa"
				placeholder="Ingrese correo adicional..."><br />

			<i class="fa-solid fa-mobile"></i>
			<label class="etiquetas">Telefono Personal</label>
			<input class="inputs_formulario" type="tel" name="telefonop" required minlength="10" maxlength="10"
				onkeypress='return validaNumericos(event)' placeholder="Ingrese su Telefono personal..."><br />

			<i class="fa-sharp fa-solid fa-kit-medical"></i>
			<label class="etiquetas">Telefono Emergencia</label>
			<input class="inputs_formulario" type="tel" name="telefonoe" required minlength="10" maxlength="10"
				onkeypress='return validaNumericos(event)' placeholder="Ingrese telefono de emergencia..."><br />

			<i class="fa-solid fa-message"></i>
			<label>Telefono de recado</label>
			<input class="inputs_formulario" type="tel" name="telefonor" required minlength="10" maxlength="10"
				onkeypress='return validaNumericos(event)' placeholder="Ingrese telefono de recado..."><br />

			<!-- Privilegios del usuario -->

			<hr /><br />
			<p class="centro centrar_texto"><b>Privilegios del Usuario</b></p>

			<i class="fa-solid fa-user"></i>
			<label class="etiquetas">Paciente</label>
			<input class="inputs_formulario" type="checkbox" name="paciente"><br>

			<i class="fa-solid fa-user-doctor"></i>
			<label class="etiquetas">Asesor salud</label>
			<input class="inputs_formulario" type="checkbox" name="asesor"><br>

			<i class="fa-sharp fa-solid fa-user-doctor"></i>
			<label class="etiquetas">Administrador salud</label>
			<input class="inputs_formulario" type="checkbox" name="administrador"><br>

			<button class="boton" type="submit">Registrar</button>
			<a href="../index.php" class="ca">Regresar al inicio</a>



		</form>
	</div>
</body>

</html>