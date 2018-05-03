<?php
$server="localhost";
$user="root";
$password="";
$dbname="registros";
   
$id=$_REQUEST["ID"];

$ap = $_POST ["llegada"];
$am = $_POST ["salida"];


 $conexion = mysqli_connect ($server,$user,$password,$dbname);

if (!$conexion) {
	die("Error: " . mysqli_connect_error());
}
else {
	$query = "UPDATE `horario` SET = `hora_llegada`= $ap ,`hora_salida`= $am WHERE `id_horario`= $id";

	if (mysqli_query($conexion, $query)) 
	{
		echo "Registro Actualizado";
	}	
	else
	{
		echo $query . "</br>";
		echo "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);
}
?>
<?php
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='horario.php'>Volver</a>";
  ?>