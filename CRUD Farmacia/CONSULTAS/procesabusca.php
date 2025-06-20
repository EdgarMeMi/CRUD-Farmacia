<link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="BAJAS.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
<?php
include("bd_conexion.php");
$nombree=$_GET['nombre'];
$apli=$_GET['aplicacion'];
$result=mysqli_query($link,"select * from medicamentos where nombre like '$nombree'");
$result1=mysqli_query($link,"select * from medicamentos where aplicacion like '$apli'");
?>

<table class="u-table-entity u-table-entity-1">

          <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
<?php
if($nombree!=""){
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td></tr>",$row["nombre"],$row["codigo"],$row["aplicacion"],$row["cantidad"],$row["uni"],$row["precio"]);
}
}else{
  while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
    printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td></tr>",$row["nombre"],$row["codigo"],$row["aplicacion"],$row["cantidad"],$row["uni"],$row["precio"]);
  }
}
?>
            
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 22px;">
                <th class="u-border-1 u-border-black u-table-cell">Nombre </th>
                <th class="u-border-1 u-border-black u-table-cell">Codigo </th>
                <th class="u-border-1 u-border-black u-table-cell">Aplicacion </th>
                <th class="u-border-1 u-border-black u-table-cell">Cantidad</th>
                <th class="u-border-1 u-border-black u-table-cell">Unidades</th>
                <th class="u-border-1 u-border-black u-table-cell">Precio</th>
              </tr>
            </thead>
		
          </table>
		  <br>
		<a style="text-align: center;" href="index.php"><input type="button" value="REGRESAR"></a>