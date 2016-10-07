<html>
<head>
<meta>
<title> Principal </title>
</head>
<body> 
<body background="editada.jpg">
<img src="tope2.jpg">
<br>
<br>
<?php
include("conexion.php");
 
 
$cedula=$_POST['cedula'];
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$nacionalidad=$_POST['nacionalidad'];
 
$consulta= "UPDATE estudiantes SET cedula='$cedula', apellido='$apellido', nombre='$nombre', email='$email', sexo='$sexo',nacionalidad='$nacionalidad'
WHERE cedula='$cedula'";
$resultado=mysql_query($consulta);
echo mysql_error();
echo "<br>";
 
 $num=mysql_affected_rows();
 if($num!=0){
   echo"<b> <center> Sus Datos han sido Modificados </center></b>";
            }
            else{
	           echo " <b> <center>Error de Modificación </center></b>";
                }

mysql_close();
?>
<br>
<br>
<center>
<form action="consulta.html" method="post">
<input type="submit" value="Consultar">
</form>
 
 <form action="ppal.html" method="post">
 <input type="submit" value="Inicio">
 </form>
 </center>
</body>
</html>
