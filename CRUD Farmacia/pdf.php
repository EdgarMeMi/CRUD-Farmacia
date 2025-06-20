<?php
session_start();
if(isset($_SESSION['k_username'])){
?>
<?php
//include class
require('fpdf186/fpdf.php');

include("bd_conexion.php");
$result=mysqli_query($link,"select*from medicamentos");

$pdf= new FPDF();
$pdf-> AddPage();

$pdf-> SetFont('Helvetica','',26);
$pdf-> Cell(0,10,' Medicamentos en Stock',0,1);
$pdf->Ln();

$pdf-> SetFont('Arial', '',12);


$pdf-> Cell(50,12,"Nombre:", 1);
$pdf-> Cell(20,12,"Codigo: ", 1);
$pdf-> Cell(30,12,"Aplicacion: ", 1);
$pdf-> Cell(30,12,"Cantidad: ", 1);
$pdf-> Cell(30,12,"Unidades: ", 1);
$pdf-> Cell(30,12,"Precio: ", 1);
$pdf->Ln();

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$pdf-> Cell(50,12,$row['nombre'], 1);
$pdf-> Cell(20,12,$row['codigo'], 1);
$pdf-> Cell(30,12,$row['aplicacion'], 1);
$pdf-> Cell(30,12,$row['cantidad'], 1);
$pdf-> Cell(30,12,$row['uni'], 1);
$pdf-> Cell(30,12,$row['precio'], 1);
$pdf->Ln();}

$pdf->Output('','fpdf-complete.pdf');
?>
<?php
}
else
	echo'<p><a href="/farma/INICIO/index.html"> Iniciar Sesion<a/></p>';
?>