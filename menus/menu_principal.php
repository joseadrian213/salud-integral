<?php
session_start();
// Comprobamos informacion del usuario con la sesion 
if (isset($_SESSION['id_users']) && isset($_SESSION['name'])) {

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
						<a class="nav" href="../funciones/cerrar_sesion.php">| Cerrar Sesión</a>
					</form>
				</nav>
			</div>
		</header><br /><br /><br />
		<main>
			<!-- Menu principal -->
			<div class="contenedor-principal-form">
				<div class="contenedor-form">
					<a href="menu_mostrar.php" class="boton-form">Informacion de estudios</a>
					<a href="menu_estudio.php" class="boton-form">Llenado de estudios</a>
					<a href="../informacion_general_usuario/informacion_usuario.php" class="boton-form">Informacion de usuario</a>
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