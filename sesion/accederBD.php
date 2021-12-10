<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "dbtest";

	$conn = mysqli_connect($server, $user, $pass, $database);
		if(!$conn){
			die("La coneccion fallo");
		}

?>