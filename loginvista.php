<?php

   include "accederBD.php";
   error_reporting(0);
   session_start();

   if (isset($_SESSION['username'])) {
    header("Location: sesion/indexSesion.php");
   }

   if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result= mysqli_query($conn, $sql);

    if ($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: sesion/indexSesion.php");
    }else{
        echo "<script>alert('La contrasena o email son incorrectas')</script>";
    }
   }

  ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/estilos.css">
	

</head>  
<body>
    <form class="formulario" method="POST" action="">
    
    <h1>Login</h1>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="email" placeholder="Correo Electronico" name="user" value="<?php echo $email; ?>" required>
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="password" placeholder="Contraseña" name="pass" value="<?php echo $_POST['password']; ?>" required>
         
         </div>
         <input type="submit" name="submit" value="Login" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="registrarvista.php">Registrate </a></p>
     </div>
    </form>
</body>
</html>
