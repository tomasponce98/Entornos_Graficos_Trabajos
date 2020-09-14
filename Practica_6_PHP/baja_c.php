<?php
include ("conexion.php");
$vCiudad = $_POST ['ciudad'];
$vSql = "SELECT * FROM ciudades WHERE ciudad='$vCiudad' ";
$vResultado = mysqli_query($link, $vSql);
if(mysqli_num_rows($vResultado) == 0)
 {
 echo ("Ciudad Inexistente...!!! <br>");
 echo ("<A href='baja_ciudades.html>Continuar</A>");
}
else{
//Arma la instrucción SQL y luego la ejecuta
$vSql= "DELETE FROM ciudades WHERE ciudad = '$vCiudad' ";
mysqli_query($link, $vSql);
 echo("La ciudad fue Borrada<br>");
 echo("<A href='menu_principal.html'>Volver al Menu del ABM</A>");
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>