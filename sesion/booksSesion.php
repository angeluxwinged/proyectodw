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
		<div class="pos">
		<div class="seccion">
			<h2>Libros</h2>
		</div>
		<div class="product-grid">
			<article>
				<a href="#"><img src="images\libros\elsilmarillion.jpg" width="150px" height="175px"></a>
				<h4>El silmarillion</h4>
				<h3>220.00 pesos</h3>
			</article>
			<article>
				<a href="#"><img src="images\libros\silcence.jpg" width="150px" height="175px"></a>
				<h4>Silence</h4>
				<h3>320.00 pesos</h3>
			</article>
			<article>
				<a href="#"><img src="images\libros\fenomenologia.jpg"  width="150px" height="175px"></a>
				<h4>Fenomenologia del espiritu</h4>
				<h3>300.00 pesos</h3>
			</article>
			<article>
				<a href="#"><img src="images\libros\ensayo.jpg"  width="150px" height="175px"></a>
				<h4>Ensayo sobre la seguera</h4>
				<h3>280.00 pesos</h3>
			</article>
		</div>
		</div>
	</div>

	<div class="navigationRail" style="height: 900px;"></div>
</body>
</html>