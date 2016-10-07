<?php
include("conexion.php");

$cedula=$_POST['cedula'];
$consulta="SELECT cedula FROM estudiantes WHERE Cedula='$cedula'";
$resultado=mysql_query($consulta);
echo mysql_error();

 $num=mysql_affected_rows();
 if($num!=0){
   header('Location: ingresomateria1.php?cedula='.$cedula);
            }
            else{
	          header('Location: ingresoestudiante1.php?cedula='.$cedula);
                }

mysql_free_result($resultado);
mysql_close(); 
?>
			