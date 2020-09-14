<title>Modificacion</title>
</head>
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
<body>
<?php
include ("conexion.php");
//Captura datos desde el Form anterior
$vCiudad = $_POST['ciudad'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM ciudades WHERE ciudad ='$vCiudad' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
 echo ("Ciudad Inexistente...!!! <br>");
 echo ("<A href='modificacion_ciudades.html'>Continuar</A>");
}
else{
?>

<FORM action="modi_c.php" method="POST" name="FormModi">
 <div class="form-row">
        <div class="form-group col-3">
            <label for="ciudad">Ciudad</label>
            <input name="ciudad" type="text" class="form-control" id="ciudad" placeholder="Ciudad" 
            value="<?php echo($fila['ciudad']);?>" required readonly="true">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-3">
            <label for="pais">Pais</label>
            <input name="pais" type="text" class="form-control" id="pais" placeholder="Pais" 
            value="<?php echo($fila['pais']); ?>" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-3">
            <label for="habitantes">Cantidad de habitantes</label>
            <input name="habitantes" type="number" class="form-control" id="habitantes" placeholder="Cantidad de habitantes" 
            value="<?php echo($fila['habitantes']); ?>"required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-3">
            <label for="superficie">Superficie Total</label>
            <input name="superficie" type="number" class="form-control" id="superficie" placeholder="Superficie total"
                value="<?php echo($fila['superficie']); ?>" required>
        </div>
    </div>
 
    <div class="form-row">
        <div class="form-group col-3">
            <label for="tiene_metro">Marcar si posee metro: </label>
            <?php
            if($fila['tieneMetro']==1)
            {?>
            <input name="tiene_metro" type="hidden"  id="tiene_metro_off" value="0" >
            <input name="tiene_metro" type="checkbox" id="tiene_metro_on" value="1" checked>
            <?php
            }
            else
            {?>
            <input name="tiene_metro" type="hidden"  id="tiene_metro_off" value="0" >
            <input name="tiene_metro" type="checkbox" id="tiene_metro_on" value="1" >
            <?php
            }
            ?>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-dark">Realizar modificacion</button>
    <p><a href="menu_principal.html">Volver al menu principal</a></p>


</FORM>
</body>
</html>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>