<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
</head>
<body>
	<center><h1>Actualizar</h1></center>
	
	<?php   
 $server="localhost";
$user="root";
$password="";
$dbname="registros";
    $conexion = mysqli_connect ($server,$user,$password,$dbname);
    

    
	$ID=$_REQUEST['ID'];
    $query ="SELECT * FROM horario WHERE id_horario='$ID'";
    $resultado = mysqli_query($conexion,$query);
     $row =mysqli_fetch_array($resultado)

			?>
	<form action="mod_proceso.php" method="POST">
		<center>Hora de llegada: <input type="time" name="llegada" value=" <?php echo $row ['hora_llegada']?>"><br><br></center>
		<center>Hora de salida: <input type="time" name="salida" value=" <?php echo $row ['hora_salida']?>"><br><br></center>
		<center><input type="submit" name="submit" value="ACTUALIZAR"></center>
	</form>
</body>
</html>