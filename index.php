<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="estilos/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
		integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="contenedor">
		<form class="formulario login" action="controladores/controlador_login.php" method="POST">
			<h2 class="centrar_texto">Inicio de Sesion</h2>
			<!-- Se muestran errores -->
			<?php if (isset($_GET['error'])) { ?>
				<p class="error centrar_texto">
					<?php echo $_GET['error']; ?>
				</p>
			<?php } ?>
			<!-- Login -->
			<i class="fa-solid fa-user"></i>
			<label class="etiquetas">CURP</label>
			<input class="inputs_formulario" type="text" name="llave_acceso"
				onkeyup="javascript:this.value=this.value.toUpperCase();" required minlength="18" maxlength="18"
				placeholder="Ingrese su CURP..."><br />

			<i class="fa-solid fa-unlock"></i>
			<label class="etiquetas">Contraseña</label>
			<input class="inputs_formulario" type="password" name="contrasena" required
				placeholder="Inserte su contraseña..."><br />

			<input class="boton" type="submit" value="Ingresar">
			<a href="informacion_general_usuario/registro.php" class="ca">Registrar usuario</a>

		</form>
	</div>
</body>

</html>