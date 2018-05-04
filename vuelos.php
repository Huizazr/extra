<!DOCTYPE html>
<?php
session_start();

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
	<title>VUELOS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
   </head>
 <body>

<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "registros";
$tbl_name = "vuelos";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
$consulta = "SELECT * FROM vuelos";
$resultado = $conexion -> query($consulta);


  echo "  <center>
      <h1> vuelos</h1>
      <table>
      <tr><th>VUELOS</th>      
      <th>DISPONIBILIDAD</th>
      <th>TIPO</th>
	  <th>AVION</th>
	  <th>DESTINO</th>
	  </tr>"; 
	  
while($row = $resultado -> fetch_array())
{
  $id_vuelo = $row["id_vuelo"];
  $disponibilidad = $row["disponibilidad"];
  $tipo = $row["tipo"];
  $id_avion = $row["id_avion"];
  $id_destino = $row["id_destino"];
  echo "
  <tr><td>".$row['id_vuelo']."</td>
  <td>".$row['disponibilidad']."</td>
  <td>".$row['tipo']."</td>
   <td>".$row['id_avion']."</td>
    <td>".$row['id_destino']."</td>
  ";
  
  
}
echo "</table></center>";

mysqli_close($conexion);
 ?>

  </body>