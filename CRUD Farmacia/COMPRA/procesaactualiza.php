<html>
<head>
<title> Modificar </title>
<link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Modificar.css" media="screen">
</head>
<body>
<?php
require_once("bd_conexion.php");
$codigo=$_GET['codigo'];



$result=mysqli_query($link,"SELECT * from medicamentos where codigo = '$codigo';");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$r_codigo=$row["codigo"];
$r_precio=$row["precio"];
?>
<h1 style="text-align: center;">COMPRA</h1>
<section class="u-align-center u-clearfix u-grey-5 u-section-1">
  <div class="u-clearfix u-sheet u-sheet-1">
   
    <div class="u-form u-form-1">
<h2> Ingrese la cantidad de producto que quiere comprar.</h2> <br>
<br>
<form name="form1" action="guardaactualiza.php" method="get">
<div>
              <label for="text-a4d5" class="u-label">Codigo</label>
              <input type="text" name="codigo"
value="<?php echo $r_codigo?> "maxlength="11" readonly="readonly">
            </div>

<div>
              <label for="text-a4d5" class="u-label">Cantidad</label>
              <input type="text" name="cantidad"
value=""maxlength="11">
            </div>
            <div >
              <label for="text-a4d5" class="u-label">Precio</label>
              <input type="text" name="precio"
value="<?php echo $r_precio?> "maxlength="11" readonly="readonly">
            </div>

<br>

<br>
<input type="submit" name="submit" value="Comprar">
</p>
</form>
</div>
      </div>
    </section>
</body>
</html>