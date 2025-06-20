
<?php
	session_start();
	include("bd_conexion.php");
	if (trim($_POST["usuario"])!="" && trim($_POST["password"])!=""){
		$usuario=strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
		$password=$_POST["password"];
		$result=mysqli_query($link,'select Contra, Usuario from usuarios where Usuario=\''.$usuario.'\'');
		if($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
		
		if($row["Contra"]==1234){
			$_SESSION["k_username"]="Cliente";
			echo '<div class="box">';
			echo '<p style="color: black;">Has ingresado correctamente. '.$_SESSION['k_username'].'</p>';
			echo '<p><a href="/FARMA/venta.html">Menú</a></p>';
			echo '</div>';
		}else if($row["Contra"]==$password){
				$_SESSION["k_username"]=$row["Usuario"];
				echo '<div class="box">';
				echo '<p style="color: black;">Has ingresado correctamente. '.$_SESSION['k_username'].'</p>';
				echo '<p><a href="/FARMA/index.html">Menú</a></p>';
				echo '</div>';
			}
			
			else{
				echo '<div class="box">';
				echo 'Password incorrecto, vuelve a intentar.';
				echo '<br>';
				echo '<a href="/farma/INICIO/index.html"> Login</a>';
				echo '</div>';
			}
		else{
			echo '<div class="box">';
			echo 'Usuario NO existe, vuelve a intentar.';
			echo '<br>';
			echo '<a href="/farma/INICIO/index.html"> Login</a>';
			echo '</div>';
		}
	mysqli_free_result($result);
	}
	else{
		echo '<div class="box">';
		echo 'Debe especificar un usuario y contraseña, vuelve a intentar.';
		echo '<br>';
		echo '<a href="/farma/INICIO/index.html"> Login</a>';
		echo '</div>';
	}
?>