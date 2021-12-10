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
		<p class="articuloTexto">Computo</p>
		<img src="images/computo/laptop.jpg" width="220px" style="position: absolute; top: 40px; left: 280px;">
		<img src="images/computo/tablet.jpg" width="220px" style="position: absolute; top: 65px; left: 700px;">
		<img src="images/computo/mouse.jpg" width="220px" style="position: absolute; top: 440px; left: 280px;">
		<img src="images/computo/teclado.jpg" width="220px" style="position: absolute; top: 490px; left: 700px;">
		<p style="text-align: center; position: absolute; top: 220px; left: 320px;">Laptop Lenovo Yoga<br>18,000.00 pesos</p>
		<p style="text-align: center; position: absolute; top: 220px; left: 760px;">Tablet HYUNDAI<br>3,000.00 pesos</p>
		<p style="text-align: center; position: absolute; top: 555px; left: 320px;">Mouse Logitech G<br>900.00 pesos</p>
		<p style="text-align: center; position: absolute; top: 555px; left: 760px;">Teclado Razer<br>2,500.00 pesos</p>

	</div>


</body>
</html>