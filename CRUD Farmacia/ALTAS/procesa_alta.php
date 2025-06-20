<?php
try{
    include("bd_conexion.php");
    $nombre=($_GET ['nombre']);
    $apellidos=$_GET['codigo'];
    $direccion=$_GET['aplicacion'];
    $telefono=$_GET['cantidad'];
    $uni=$_GET['uni'];
    $precio=$_GET['precio'];
    $query="insert into medicamentos values('$nombre','$apellidos','$direccion','$telefono','$uni','$precio')";
    mysqli_query($link,$query);
    header("Location:index.php");
} catch (mysqli_sql_exception $e){
    $error_code = $e->getCode();
    if($error_code==1062){
        echo "Error, no se puede repetir el codigo!";
    } else {
        echo "Error: ".$e->getMessage();
    }
}

?>