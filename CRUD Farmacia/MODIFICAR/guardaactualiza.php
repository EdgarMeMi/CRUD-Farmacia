<?php
require_once("bd_conexion.php");
$codigo=$_GET["codigo"];
$nombre=$_GET["nombre"];
$aplicacion=$_GET["aplicacion"];
$cantidad=$_GET["cantidad"];
$uni=$_GET["uni"];
$precio=$_GET["precio"];
$Peticion="UPDATE medicamentos SET nombre='$nombre', aplicacion='$aplicacion',cantidad='$cantidad',uni='$uni',precio='$precio' where codigo='$codigo';";
$idresult=mysqli_query ($link,$Peticion);
if($idresult==0)
{
	echo "Se han modificado los registros <BR>";
	header("Location: index.php");
	mysqli_close($link);
}
else
{
echo "La sentencia no se ha podido ejecutar.<BR>";
	echo mysqli_errno($link).":".mysqli_error($link)."<BR>";
	echo'<p><a href="/farma/MODIFICAR/index.php"> Regresar<a/></p>';

	
}
?>