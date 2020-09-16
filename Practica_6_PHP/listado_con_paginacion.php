<body>
<html>
<head>
<title> Listados de ciudades con paginación </title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Alta Ciudades</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</head>
<body>
<?php
include("conexion.php");
$Cant_por_Pag = 2;
$pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $Cant_por_Pag;
}// total de páginas
$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
$total_paginas = ceil($total_registros/ $Cant_por_Pag);
echo "Numero de registros encontrados: " . $total_registros . "<br>";
echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
$vSql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $Cant_por_Pag;
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
?>
<table class="table">
<tr class="table-primary">
    <td><b>Ciudad</b></td>
    <td><b>Pais</b></td>
    <td><b>Habitantes</b></td>
    <td><b>Superficie</b></td>
    <td><b>TieneMetro</b></td>
</tr>
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila['ciudad']); ?></td>
 <td><?php echo ($fila['pais']); ?></td>
 <td><?php echo ($fila['habitantes']); ?></td>
 <td><?php echo ($fila['superficie']); ?></td>
 <td><?php echo ($fila['tieneMetro'])?"Si":"No"; ?></td>
</tr>
<tr>
 <td colspan="5">

<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
 </td>
</tr>
</table>
<?php
if ($total_paginas > 1){
for ($i=1;$i<=$total_paginas;$i++){
if ($pagina == $i)
//si muestro el índice de la página actual, no coloco enlace
echo $pagina . " ";
else
//si la página no es la actual, coloco el enlace para ir a esa página
echo "<a href='Listado_con_paginacion.php?pagina=" . $i ."'>" . $i . "</a> ";}}?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><a href="menu_principal.html">Volver al menu del ABM</a></p>
</body>
</html>