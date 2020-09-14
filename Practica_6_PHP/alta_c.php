<?php
    include("conexion.php");
    //Captura datos desde el Form anterior
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tiene_metro = $_POST['tiene_metro'];
    //Arma la instrucción SQL y luego la ejecuta
    $sql = "select * from ciudades where ciudad='$ciudad'";
    $consulta = mysqli_query($link, $sql) or die (mysqli_error($link));;
    $resultado = mysqli_fetch_assoc($consulta);
    //$vCantUsuarios = mysqli_result($vResultado, 0);
    if ($resultado && $resultado['ciudad']==$ciudad){
    echo ("La ciudad ya Existe<br>");
    echo ("<A href='menu_principal.html'>Volver al menu principal</A>");
    }
    else {
    $sql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
        values ('$ciudad','$pais', '$habitantes', '$superficie', '$tiene_metro')";
    mysqli_query($link, $sql) or die (mysqli_error($link));
    echo("La ciudad fue registrada correctamente<br>");
    echo ("<A href='menu_principal.html'>Volver al menu principal</A>");
    // Liberar conjunto de resultados
    if(isset($resultado) && is_resource($resultado)){
     // 4. Release returned data
     mysqli_free_result($resultado);
 }
    }
    // Cerrar la conexion
    mysqli_close($link);
?>
