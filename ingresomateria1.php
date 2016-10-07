<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title> Estudiantes </title>
</head>
<body>
<body background="editada.jpg">
<img src="tope2.jpg">

<?php
include("conexion.php");

 $cedula=$_GET['cedula'];

 $consulta="SELECT * FROM estudiantes WHERE Cedula='$cedula'";
		
		$resultado=mysql_query($consulta);
		echo mysql_error();
			
	  while($resultad=mysql_fetch_array($resultado)){
	  	$resultadau['cedula']=$resultad['cedula'];
		}
			
         mysql_free_result($resultado);
			mysql_close(); 
?>
<br>
<center> <b> <h3>DATOS DE LA MATERIA</h3></b></center>
<br>
<form action="ingresomateria.php" method="post">
<table align="center">
<tr>
<td>Cedula</td> <td><input type="text" name="cedula" value="<?php echo $resultadau['cedula'] ?>" OnFocus="this.blur()"> </td>
</tr>
<tr>
<td>Materia </td> <td>  <select name="materia" onchange="salta(this.form)" size="1" style="width:186px">
<option>
<option>Programación 1
<option>Programación 2
<option>Programación 3
<option>AYDA
</select> 
</td>
</tr>
<tr>
<td>Sección </td> <td> <input type="text" name="seccion">  <option value="seccion"></option></td>
</tr>
<tr>

<td>Semestre </td> <td> <input type="text" name="semestre">  <option value="semestre"></option></td>
</tr>
<tr>

<td>Solvente </td>      <td>Si <input type="radio" name="solvente" value="si" /> 
                            No <input type="radio" name="solvente" value="no" /></td> 

</table>
<br>
<br>              
<center>
<input type="submit" value="ENVIAR">
<input type="reset" value="ELIMINAR">
</center>
</form> 

</body>
</html>