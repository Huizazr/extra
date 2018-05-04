<?php
include 'conexion.php';
$mat = $_POST ["Matricula"];
$materia = $_POST ["materia"];

$query = ("INSERT INTO materia VALUES ('$mat', '$materia')");
if (mysqli_query($conexion, $query)) 
{
	echo '<script>alert("Materia registrada exitosamente")</script> ';
	echo "<script>location.href='regMateria.php'</script>";
}	
else
{
	echo '<script>alert("La matricula ya esta registrada")</script>';
	echo "<script>location.href='regMateria.php'</script>";
	echo "Error: " . mysqli_error($conexion);
}
?>