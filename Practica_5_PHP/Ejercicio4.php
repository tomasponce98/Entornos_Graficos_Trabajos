<?php session_start(); 
if (!isset($_SESSION["contador"]))
{ $_SESSION["contador"] = 1; }
else{ $_SESSION["contador"]++; }
$Cantidad_visitas=$_SESSION["contador"];
echo "<h1>Pagina principal</h1>";
$cuerpo='
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>

<p>Cantidad de paginas visitas: '.$Cantidad_visitas.'</p>
<a href="ejercicio4_OtraPagina.php">Ir a otra pagina</a>
</body>
</html>
';
echo $cuerpo
?>
