<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tienda Online</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<div class="barAplication">
		<form action="indexSesion.php">
		<button class="logo">
			<img src="images\logo.png" width="70px" height="70px">
		</button>
		</form>
		<input class="buscador" type="search" name="buscar" placeholder="Realiza una busqueda">
		<form action="carritoSesion.php">
		<button class="carrito">
			<img src="images\carrito.png" width="50px" height="50px">
		</button>
		</form>
		<form action="..\index.php">
		<button class="registrarse" style="width: 200px; height: 40px; position: absolute; top: 20px; left: 1090px;">Cerrar sesion</button>
		</form>

	</div>

	<div class="navigationRail">
		<form action="wearSesion.php">
		<button class="ropa">Ropa</button>
		</form>
		<form action="homeSesion.php">
		<button class="hogar">Hogar</button>
		</form>
		<form action="booksSesion.php">
		<button class="libros">Libros</button>
		</form>
		<form action="computoSesion.php">
		<button class="computo">Computo</button>
		</form>
		<form action="paratuautoSesion.php">
		<button class="paraTuAuto">Para tu auto</button>
		</form>
		<textarea class="email">E-mail</textarea>
		<textarea class="escribe">Dejanos un comentario</textarea>
		<button class="enviar">Enviar</button>

	</div>

	<div class="publicidad">
		<img src="images\publilap.jpg" width="700px" style="padding-top: 45px;">
		<form action="wearSesion.php">
			<button class="wearBoton">
				<img src="images\publiropa.jpg" width="510px">
			</button>
		
		</form>
	</div>

	<div class="recomendados">
		<p>Hoy te recomendamos</p>
		<p style="cursor: pointer;"><a href="homeSesion.php" style="text-decoration: none; color: unset;">Hogar</a></p>
		<img src="images\hogar\salanegra.jpg" width="550px" style="position: absolute; top: 200px; left: 120px;">
		<img src="images\hogar\kitjardineria.jpg" width="350px" style="position: absolute; top: 140px; left: 760px;">
		<p style="font-size: 14px; position: absolute; top: 450px; left: 350px; text-align: center;">Juego de sala gris<br>1,750.00 pesos</p>
		<p style="font-size: 14px; position: absolute; top: 450px; left: 850px; text-align: center;">Kit de herramientas de jardinería<br>350.00 pesos</p>
	</div>

	<div class="navigationRail" style="height: 380px;"></div>
	
</body>
</html>