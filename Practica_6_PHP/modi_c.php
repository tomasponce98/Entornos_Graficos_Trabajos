<head>
<title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.php");
//Captura datos desde el Form anterior
$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vTiene_Metro = $_POST['tiene_metro'];

//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE ciudades set pais='$vPais', habitantes='$vHabitantes',superficie='$vSuperficie', tieneMetro='$vTiene_Metro' where
ciudad='$vCiudad'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("La ciudad  fue Modificado<br>");
echo("<A href= 'menu_principal.html'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>