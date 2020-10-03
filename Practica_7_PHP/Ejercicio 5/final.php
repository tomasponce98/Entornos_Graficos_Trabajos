<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
</head>
<body>
    Usuario registrado:
    <?php 
    echo $_SESSION['Usuario'] .','. $_SESSION['Clave'];
    ?>  
    <br>
    <a href="Ejercicio5.php">Volver al inicio</a>
</body>
</html>