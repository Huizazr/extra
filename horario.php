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
      <th>Hora de Salida</th></tr>"; 
	  
while($fila = $resultado -> fetch_array())
{
  $id_horario = $fila["id_horario"];
  $hora_llegada = $fila["hora_llegada"];
  $hora_salida = $fila["hora_salida"];
  echo "
  <tr>
  <td >$id_horario</td>
  <td>$hora_llegada</td>
  <td>$hora_salida</td>
  </tr> ";
}
echo "</table></center>";

mysqli_close($conexion);
 ?>

  </body>
</html>



