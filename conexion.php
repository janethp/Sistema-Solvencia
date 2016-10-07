<?php
 
$conexion=mysql_connect("localhost","root","1q2w3e4r");
if (!$conexion){
	echo "error de conexion";
   echo "<br>";
   echo mysql_error();
   echo "<br>";
   
}

   
mysql_select_db("solvencia");

 echo mysql_error();
?>