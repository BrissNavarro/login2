<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $pass = md5($_POST['password']);

   $select = "SELECT * FROM user_form WHERE name = '$name' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      $_SESSION['user_name'] = $row['name'];
      header('location:user_page.php');
      exit();

   }else{
      $error[] = 'usuario o contraseña incorrecto';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Enfermería</title>

  
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Bienvenido</h3>
      <?php
      if(isset($error)){
         foreach($error as $error_msg){
            echo '<span class="error-msg">'.$error_msg.'</span>';
         }
      }
      ?>
      <input type="text" name="name" required placeholder="Ingresa tu nombre">
      <input type="password" name="password" required placeholder="Ingresa tu password">
      <input type="submit" name="submit" value="Inicia sesión" class="form-btn">
      <p> <a href="register_form.php">Registrate</a></p>
   </form>

</div>

</body>
</html>
