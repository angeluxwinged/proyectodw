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

	<div class="articulos">
		<p class="articuloTexto">Para tu auto</p>
		<img src="images/autos/llanta.jpg" width="120px" style="position: absolute; top: 26px; left: 325px;">
		<img src="images/autos/llantas.jpg" width="220px" style="position: absolute; top: 45px; left: 700px;">
		<img src="images/autos/cruz.jpg" width="110px" style="position: absolute; top: 375px; left: 310px;">
		<img src="images/autos/volante.jpg" width="170px" style="position: absolute; top: 395px; left: 720px;">
		<p style="text-align: center; position: absolute; top: 220px; left: 320px;">Llanta MICHELIN<br>1,500.00 pesos</p>
		<p style="text-align: center; position: absolute; top: 220px; left: 720px;">Juego 4 llantas SUMIMOTO<br>7,800.00 pesos</p>
		<p style="text-align: center; position: absolute; top: 555px; left: 320px;">Llave cruz<br>600.00 pesos</p>
		<p style="text-align: center; position: absolute; top: 555px; left: 760px;">Volante<br>800.00 pesos</p>
		
	</div>


</body>
</html>