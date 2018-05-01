<?php 
session_start();
include("conexion.php");

$matricula = $_POST['Matricula'];
$pass = $_POST['Contrasenia'];


$query = "SELECT * FROM usuarios WHERE user = '$matricula' AND password = '$pass'";
$resultado = mysqli_query($conexion, $query);
if (mysqli_num_rows($resultado)>0) {
	while ($row = mysqli_fetch_assoc($resultado)) {
		$_SESSION['matricula'] = $row['user'];
		$_SESSION['nombre'] = $row['nombre'];
		$_SESSION['apellido'] = $row['apellido'];
		$_SESSION['sel'] = $row['id_usuario'];

		echo "<script>alert('BIENVENIDO ADMINISTRADOR')</script>";
		header("Location: use2.php");
	}
}


	else{
	echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';
	echo "<script>location.href='index.php'</script>";	
}
?>