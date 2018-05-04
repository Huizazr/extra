<?php
include ('conexion.php');
$name = $_POST ["Nombre"];
$apell = $_POST ["Apellido"];
$user = $_POST ["user"];
$pass = $_POST ["pass"];
$tipo = $_POST ["tipo"];


$query = ("INSERT INTO usuarios(nombre,apellido,user,password,tipo) VALUES ('$name', '$apell', '$user', '$pass', '$tipo')");
if (mysqli_query($conexion, $query)) 
{
	echo '<script>alert("Viaje registrado exitosamente")</script> ';
	echo "<script>location.href='use2.php'</script>";
}

$query2 = ("INSERT INTO destino(nombre) VALUES ('$dest')");
if (mysqli_query($conexion, $query2)) 
{
	echo '<script>alert("Viaje registrado exitosamente")</script> ';
	echo "<script>location.href='use2.php'</script>";
}	
else
{
	echo '<script>alert("Id de viaje ya registrado")</script>';
	echo "<script>location.href='viajes.php'</script>";
	echo "Error: " . mysqli_error($conexion);
}
?>