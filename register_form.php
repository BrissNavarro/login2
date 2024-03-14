<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM user_form WHERE name = '$name' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'el usuario ya existe!';

   }else{

      if($pass != $cpass){
         $error[] = 'Las contraseñas no coinciden';
      }else{
         $insert = "INSERT INTO user_form(name,password) VALUES('$name','$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registro</title>

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Registrar</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Usuario">
      <input type="password" name="password" required placeholder="Password">
      <input type="password" name="cpassword" required placeholder="Confirma tu password">
         
      <input type="submit" name="submit" value="Registrar" class="form-btn">
      <p>¿Ya tienes cuenta? <a href="login_form.php">inicia sesión</a></p>
   </form>

</div>

</body>
</html>