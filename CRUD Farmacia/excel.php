<?php
session_start();
if(isset($_SESSION['k_username'])){
?>

<?php
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Medicamentos.xls");
header("Pragma: no-cache");
header("Expires: 0");
include("bd_conexion.php");
$q="SELECT * FROM medicamentos";
$rs= mysqli_query($link,$q);
$tot = mysqli_num_rows($rs);
?>
<table>
<thead>
<tr>
<td>Codigo</td>
<td>Nombre</td>
<td>Aplicacion</td>
<td>Cantidad</td>
<td>Unidades</td>
<td>Precio</td>
</tr>
</thead>
<tbody>
<?php while($row= mysqli_fetch_array($rs,MYSQLI_ASSOC)):?>
<tr>
<td><?php echo $row['codigo']?></td>
<td><?php echo $row['nombre']?></td>
<td><?php echo $row['aplicacion']?></td>
<td><?php echo $row['cantidad']?></td>
<td><?php echo $row['uni']?></td>
<td><?php echo $row['precio']?></td>
</tr>
<?php endwhile;?>
</tbody>
</table>

<?php
}
else
	echo'<p><a href="/farma/INICIO/index.html"> Iniciar Sesion<a/></p>';
?>