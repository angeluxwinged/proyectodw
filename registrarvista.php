<?php

   include "accederBD.php";
   error_reporting(0);
   session_start();

   if(isset($_SESSION['username'])){
      header("Location: index.php");
   }

   if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $cpassword = md5($_POST['cpassword']);

   if ($password==$cpassword) {
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      if (!$result->num_rows > 0) {

         $sql = "INSERT INTO users (user,email,password) VALUES ('$username','$email','$password')";
         $result = mysqli_query($conn, $sql);

         if ($result) {
            echo "<script>alert('buena')</script>";

            $username = "";
            $email = "";
            $_POST['password'] = '';
            $_POST['cpassword'] = '';
            header("Location: index.php");
         }else{
            echo "<script>alert('Ocurrio un error')</script>";
         }

         }else{
            echo "<script>alert('Correo ya existente')</script>";
         }

         }else{
            echo "<script>alert('La contrasena no coincide')</script>";
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
 <form class="formulario" method="POST">
    
    <h1>Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="username" placeholder="Nombre de usuario" value="<?php echo $username; ?>" required>
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="email" placeholder="Correo Electronico" value="<?php echo $email; ?>" required>
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="password" placeholder="Contraseña" value="<?php echo $_POST['password']; ?>" required>
         
         </div>

         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="cpassword" placeholder="Confirmar contraseña" value="<?php echo $_POST['cpassword']; ?>" required>
         </div>
         <button type="submit" name="submit" class="button" style="height: 60px;">Registrarse</button>
         <p>Al registrarte, aceptas nuestras condiciones de uso y política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.php">Iniciar Sesion</a></p>
     </div>
    </form>
</body>
</html>