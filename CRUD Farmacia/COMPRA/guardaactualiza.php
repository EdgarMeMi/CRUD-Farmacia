<?php
require_once("bd_conexion.php");
$codigo=$_GET["codigo"];
$cantidad=$_GET["cantidad"];
$precio=$_GET["precio"];
$precio2=$cantidad*$precio;

$result=mysqli_query($link,"SELECT * from medicamentos where codigo = '$codigo';");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


if($row["uni"]<=0){
	echo "No hay productos";
	echo "<br><a href='http://localhost/farma/COMPRA/index.php'>Regresar</a>";
}else if($cantidad>$row['uni']){
	echo "No hay suficiente producto en Stock";
	echo "<br><a href='http://localhost/farma/COMPRA/index.php'>Regresar</a>";
}else{
$Peticion="UPDATE medicamentos SET uni=uni-'$cantidad' where codigo='$codigo';";
mysqli_query($link, "INSERT INTO carrito (nombre, cantidad, preciof) VALUES ('$row[nombre]', '$_GET[cantidad]', '$precio2')");
$idresult=mysqli_query ($link,$Peticion);

if($row["uni"]==0){
	mysqli_query($link,"delete from medicamentos where codigo=$codigo");
}
if($idresult==0)
{
	echo "La sentencia no se ha podido ejecutar.<BR>";
	echo mysqli_errno($link).":".mysqli_error($link)."<BR>";
}
else
{
	echo "Se han modificado los registros <BR>";
	header("Location: index.php");
	mysqli_close($link);
}
}
?>