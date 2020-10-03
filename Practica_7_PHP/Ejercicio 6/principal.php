<?php
session_start();
?>
<html>
<head>
    <title>Principal</title>
</head>
<body>
<?php
if (isset($_SESSION['nombre']))
{
    echo "Bienvenido ".$_SESSION['nombre'];
}
else
{
    echo "No tiene permitido visitar esta página.";
}
session_destroy();
?>
<br>
<a href="Ejercicio6.php">Ir al principio</a>

</body>
</html>