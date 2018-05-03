<!DOCTYPE html>
<?php
session_start();

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
	<title>HORARIOS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
   </head>
 <body>

<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "registros";
$tbl_name = "horario";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
$consulta = "SELECT * FROM horario";
$resultado = $conexion -> query($consulta);


  echo "  <center>
      <h1> HORARIOS DE VUELOS</h1>
      <table>
      <tr><th>Id horario</th>      
      <th>Hora de llegada</th>
      <th>Hora de Salida</th>
	  <th>Modificar</th>
	  <th>Borrar Registro</th>
	  </tr>"; 
	  
while($row = $resultado -> fetch_array())
{
  $id_horario = $row["id_horario"];
  $hora_llegada = $row["hora_llegada"];
  $hora_salida = $row["hora_salida"];
  echo "
  <tr><td>".$row['id_horario']."</td>
  <td>".$row['hora_llegada']."</td>
  <td>".$row['hora_salida']."</td>
  <td><a href='UPDATE1.php?ID=".$row['id_horario']."'>Modificar Registro</a></td>
  <td><a href='DELETE.php?ID=".$row['id_horario']."'>Borrar Registro</a></td>";
  
  
}
echo "</table></center>";

mysqli_close($conexion);
 ?>

  </body>
</html>



