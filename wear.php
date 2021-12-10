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
		<form action="index.php">
		<button class="logo">
			<img src="images\logo.png" width="70px" height="70px">
		</button>
		</form>
		<input class="buscador" type="search" name="buscar" placeholder="Realiza una busqueda">
		<form action="loginvista.php">
		<button class="carrito">
			<img src="images\carrito.png" width="50px" height="50px">
		</button>
		</form>
		<form action="loginvista.php">
		<button class="iniciarSesion">Iniciar sesion</button>
		</form>
		<form action="registrarvista.php">
		<button class="registrarse">Registrarse</button>
		</form>

	</div>

	<div class="navigationRail">
		<form action="wear.php">
		<button class="ropa">Ropa</button>
		</form>
		<form action="home.php">
		<button class="hogar">Hogar</button>
		</form>
		<form action="books.php">
		<button class="libros">Libros</button>
		</form>
		<form action="computo.php">
		<button class="computo">Computo</button>
		</form>
		<form action="paratuauto.php">
		<button class="paraTuAuto">Para tu auto</button>
		</form>
		<textarea class="email">E-mail</textarea>
		<textarea class="escribe">Dejanos un comentario</textarea>
		<button class="enviar">Enviar</button>

	</div>
		<div class="pos">
		<div class="seccion">
			<h2>Ropa</h2>
		</div>
		<div class="product-grid">
			<article>
				<a href="#"><img src="images\ropa\parcamisetas.jpg" width="150px" height="175px"></a>
				<h4>Par de camisetas de cuello redondo</h4>
				<h3>310.00 pesos</h3>
			</article>
			<article>
				<a href="#"><img src="images\ropa\sudaderagris.jpg" width="150px" height="175px"></a>
				<h4>Sudadera gris</h4>
				<h3>700.00 pesos</h3>
			</article>
			<article>
				<a href="#"><img src="images\ropa\pijamarosa.jpg"  width="150px" height="175px"></a>
				<h4>Pijama rosa</h4>
				<h3>400.00 pesos</h3>
			</article>
			<article>
				<a href="#"><img src="images\ropa\gafassol.jpg"  width="150px" height="175px"></a>
				<h4>Gafas de sol</h4>
				<h3>700.00 pesos</h3>
			</article>
		</div>
		</div>
	</div>

	<div class="navigationRail" style="height: 900px;"></div>
</body>
</html>