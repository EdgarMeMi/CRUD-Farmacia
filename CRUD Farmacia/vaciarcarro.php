<?php
include("bd_conexion.php");
echo $id;
mysqli_query($link,"delete from carrito");
header("Location:carro.php");
?>