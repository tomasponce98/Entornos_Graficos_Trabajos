<?php session_start(); 
if (!isset($_SESSION["contador"]))
{ $_SESSION["contador"] = 1; }
else{ $_SESSION["contador"]++; }
$Cantidad_visitas=$_SESSION["contador"];
echo "<h1>Pagina secundaria</h1>";
$cuerpo='
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>

<p>Cantidad de paginas visitadas: '.$Cantidad_visitas.'</p>
<a href="ejercicio4.php"> Ir a la pagina principal</a>
</body>
</html>
';
echo $cuerpo
?>