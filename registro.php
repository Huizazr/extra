<!DOCTYPE html>
<html>
	<head>
		<title>REGISTRO DE NUEVOS USUARIOS</title>
	</head>
<body>
	<form action="#" method="post">
		<p><input name="id_usuario" type="tex" placeholder="ID USUARIO"></p>
		<p><input name="nombre" type="tex" placeholder="NOMBRE" ></p>
		<p><input name="apellido" type="tex" placeholder="APELLIDO"></p>
		<p><input name="user" type="tex" placeholder="USUARIO"></p>
		<P><input name="tipo" type="tex" placeholder="TIPO DE USUARIO"></P>
		<P><input name="password" type="tex" placeholder="PASSWORD"></P>
		<input type="submit" name="agregar" value ="agregar">
	</form>
	
	<?php
	
	
$connect=mysqli_connect("localhost","admin","linux1357","registros");
if ($connect) {
		echo "--------------------------------------------------. <br />";
		$a= $_POST ['id_usuario'];
		$b= $_POST ['nombre'];
		$c= $_POST ['apellido'];
		$d= $_POST ['user'];
		$e= $_POST ['tipo'];
		$f= $_POST ['password'];
		
		
		$consulta="insert into usuarios values ('$a','$b','$c','$d','$e','$f')";
		
		$resultado=mysqli_query($connect,$consulta);
		
		if ($resultado) {
			echo "Perfil: <br />";
			echo "Almacenado <br />";
		}
		else {
			echo "error en la ejecución de la consulta. <br />";
		}
		
		if (mysqli_close($connect)){ 
			echo "-. <br />";
			
			
		} 
		else {
			echo "error en la desconexión";
		}
}

?>
	
</body>
</html>

