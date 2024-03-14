<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
  
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="./css/estilos.css">
   
    <script src="./js/app.js" defer></script>
</head>
<body>

    <div class="menu-dashboard">
        <div class="top-menu">
            <div class="logo">
                <img src="./img/logo.svg" alt="">
                <span>Enfermería Wolverine
                </span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>

        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>

        <div class="menu">
            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span>Dashboard</span>
            </div>

            <div class="enlace">
            <a href="consulta.php">
                <i class="bx bx-user"></i>
                <span>Consultas</span>

            </div>

            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span>Historial</span>
            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span>Mensajes</span>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span>Archivos</span>
            </div>


            <div class="enlace">
                <i class="bx bx-cog"></i>
                <a href="logout.php">
                <span>Cerrar sesión</span>
            </div>
        </div>
    </div>
    
</body>
</html>