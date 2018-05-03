<!DOCTYPE html>
<?php
session_start();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
	<title>DESTINOS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
   </head>
 <body>

<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "registros";
$tbl_name = "destino";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
$consulta = "SELECT * FROM horario";
$resultado = $conexion -> query($consulta);
  echo "  <center>
      <h1> DESTINOS DE VUELOS</h1>
      <table>
      <tr><th>Id destinos</th>      
      <th>Nombre</th>
	  <th>Modificar</th>
	  <th>Borrar Registro</th>
	  </tr>"; 
	  
while($row = $resultado -> fetch_array())
{
  $id_destino = $row["id_destino"];
  $nombre = $row["Nombre"];
 
  echo "
  <tr><td>".$row['id_destino']."</td>
  <td>".$row['nombre']."</td>
  <td><a href='UPDATE1.php?ID=".$row['id_destino']."'>Modificar Registro</a></td>
  <td><a href='DELETE.php?ID=".$row['id_destino']."'>Borrar Registro</a></td>";
  
  
}
echo "</table></center>";
mysqli_close($conexion);
 ?>

  </body>
</html>