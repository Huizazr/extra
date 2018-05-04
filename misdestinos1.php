<DOCTYPE html>
	<html>
	<head>
		<title>DESTINOS</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<center>
			<table border=10px>
				<thead>
					<tr>
						<th>id_destinos<a href="nuevo_registro.php">Nuevo Registro</a></th>
						<th></th>
						<th>Nombre</th>
						<th>id_horario</th>
						
				</thead>
			<tbody>
			<?php   
			/* VARIABLES PARA LA CONEXION A LA BASE DE DATOS*/
        		$server="localhost";
        		$user="alex";
        		$password="12345";
        		$dbname="registros";
				$conexion = mysqli_connect ($server,$user,$password,$dbname);
    		
    		if(!$conexion){
        		die("Error".mysqli_connect_error());
    		}
    		else{	
        	/*echo "Conexion exitosa<br/>";*/
        	$query ="SELECT * FROM destino";
        	$resultado = mysqli_query($conexion,$query);
    		if(mysqli_num_rows($resultado)>0){
        	while($row =mysqli_fetch_array($resultado)){
        	?>

				<tr align="center">
					<td></td>
					<td><?php echo $row['id_destino']; ?></td>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['id_horario']; ?></td>
					<td><a href="borrar_vac.php?no_control=<?php echo $row['id_destinos']; ?>">Borrar Registro</a></td>
					<td><a href="modificar.php?no_control=<?php echo $row['id_destinos']; ?> ">Actualizar Registro</a></td>		
				</tr>
	<?php
					}
    			}
			}
	?>
				</tbody>
			</table>
		</center>
	</body>
</html>