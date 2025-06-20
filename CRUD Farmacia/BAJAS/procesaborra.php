<?php
include("bd_conexion.php");
$id=$_GET['codigo'];
echo $id;
mysqli_query($link,"delete from medicamentos where codigo=$id");
header("Location:index.php");
?>