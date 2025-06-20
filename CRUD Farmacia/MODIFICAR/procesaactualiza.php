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
$r_nombre=$row["nombre"];
$r_aplicacion=$row["aplicacion"];
$r_cantidad=$row["cantidad"];
$r_uni=$row["uni"];
$r_precio=$row["precio"];
?>



 <h1 style="text-align: center;">MODIFICACION</h1>
<section class="u-align-center u-clearfix u-grey-5 u-section-1">
  <div class="u-clearfix u-sheet u-sheet-1">
   
    <div class="u-form u-form-1">
<form name="form1" action="guardaactualiza.php" method="get">


              <label for="text-a4d5" class="u-label">Codigo</label>
              <input type="text" name="codigo"
value="<?php echo $r_codigo?> "maxlength="11" readonly="readonly">
            </div>

<br>


              <label for="text-a4d5" class="u-label">Nombre</label>
          <input type="text" name="nombre"
value="<?php echo $r_nombre?> "size="50" maxlength="20">
            </div>


<P>Aplicación

<select id="select-8d25" name="aplicacion" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3">
                  <option value="Untable" data-calc="">Untable</option>
                  <option value="Oral" data-calc="">Oral</option>
                  <option value="Intravenosa" data-calc="">Intravenosa</option>
                </select>
<br>
<br>
<label for="text-a4d5" class="u-label">Cantidad</label>
       <input type="text" name="cantidad"
value="<?php echo $r_cantidad?> "size="50" maxlength="50">
            </div>

<br>
<br>
<label for="text-a4d5" class="u-label">Unidades</label>
       <input type="text" name="uni"
value="<?php echo $r_uni?> "size="50" maxlength="50">
            </div>

<br>
<label for="text-a4d5" class="u-label">Precio</label>
       <input type="text" name="precio"
value="<?php echo $r_precio?> "size="50" maxlength="50">
            </div>
<br>
<input type="submit" name="submit" value="Modificar">
</p>
</form>
</div>
      </div>
    </section>
</body>
</html>