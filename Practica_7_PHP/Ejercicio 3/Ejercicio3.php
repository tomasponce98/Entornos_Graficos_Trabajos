<?php

if(isset($_POST["nombre"])){
$nombre = $_POST["nombre"];
setcookie("nombre", $nombre, time() + (60 * 60 * 24 * 90));
}
else{
if (isset($_COOKIE["nombre"])){
$nombre = $_COOKIE["nombre"];
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>Ejercicio 3</title>
<?php
if (isset($nombre)){
echo "Nombre de usuario que ingreso por ultima vez: ". $nombre;
}
?>
</head>
<body>
<br>
<br>
<p>
<form action="Ejercicio3.php" method="post"> 
<p><label>Usuario: <input type="text" name="nombre" size="25" placeholder="Ingrese su usuario" /> </label></p>
<input type="submit" value="Aceptar">
</form>
</body>
</html