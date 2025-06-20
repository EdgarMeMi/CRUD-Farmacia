<?php
require('fpdf186/fpdf.php');

// Include database connection
include("bd_conexion.php");

// Query to fetch data
$result = mysqli_query($link, "SELECT * FROM carrito");

// Verificar si la consulta fue exitosa
if ($result === false) {
    die("Error en la consulta: " . mysqli_error($link));
}

// Create PDF object
$pdf = new FPDF();
$pdf->AddPage();

// Set font
$pdf->SetFont('Arial', '', 12);

// Header
$pdf->Cell(0, 10, 'RECIBO DE COMPRA', 0, 1, 'C');
$pdf->Ln();

// Table headers
$pdf->Cell(50, 12, "Nombre", 1);
$pdf->Cell(30, 12, "Cantidad", 1);
$pdf->Cell(30, 12, "Precio", 1);
$pdf->Ln();

// Variables para acumular la suma total
$total = 0;

// Table data
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $pdf->Cell(50, 12, $row['nombre'], 1);
    $pdf->Cell(30, 12, $row['cantidad'], 1);
    $pdf->Cell(30, 12, $row['preciof'], 1);
    $pdf->Ln();

    // Acumular la suma total
    $total += $row['preciof'];
}

// Total
$pdf->Ln();
$pdf->Cell(50, 12, "", 0); // Empty cell for spacing
$pdf->Cell(30, 12, "Total:", 1);
$pdf->Cell(30, 12, number_format($total, 2), 1); // Imprimir la suma total con formato de dos decimales

// Limpiar el búfer de salida


// Output PDF
$pdf->Output('RECIBO.pdf', 'D');
mysqli_query($link,"delete from carrito");

sleep(2);

?>

