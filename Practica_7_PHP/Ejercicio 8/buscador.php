  
<!DOCTYPE html PUBLIC "‐//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1‐transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http‐equiv="Content‐Type" content="text/html; charset=utf‐8" />
<title>buscador</title>
</head>
<body>
<?php
include("conexion.php");
$pal=$_POST['palabra'];
if($pal){
$vSql = "select * from buscador where canciones LIKE '%".$pal."%'";    
$resp = mysqli_query($link, $vSql) or die (mysql_error());
if(mysqli_num_rows($resp) == "0") {
echo "No hay resultados respecto a la palabra que busca.";
?><p><a href="Ejercicio8.html">Volver al Buscador de Canciones</a></p><?php
} else {
echo "<center><strong>RESULTADOS DE BUSQUEDA</strong></center><br>";?>
<p><a href="Ejercicio8.html">Volver al Buscador de Canciones</a></p>
<table>
<?php

while($cat = mysqli_fetch_array($resp)) {?>
<tr>
<td><?php echo ($cat['canciones']); ?></td>
</tr>
<tr>
<td colspan="5">

<td colspan="5">
<?php }?>
</table>
<?php
}
}else{
echo "<form name='FormBuscador' method='post' action='buscador.php'><input name='palabra' type='text' id='palabra'><input type='submit' name='Submit' value='Buscar!'></form>";
}?></body></html>