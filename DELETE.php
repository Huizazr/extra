<?php   
$server="localhost";
$user="root";
$password="";
$dbname="registros";
$conexion = mysqli_connect ($server,$user,$password,$dbname);


if(!$conexion)
{
die("Error".mysqli_connect_error());
}

else{
    echo "Conexion exitosa<br/>";
    $comando ="DELETE FROM horario WHERE id_horario='".$_GET["ID"]."'";
if(mysqli_query($conexion, $comando)){
    echo "Registro Borrado";
    
}
  else{
      die ("Error: " .mysqli_error($conexion));
  }
    mysqli_close($conexion);
}
?>

