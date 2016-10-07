<html>
<head>
<meta charset="utf-8" />
<title> Estudiantes </title>
</head>
<body>
<body background="degradado.jpg">
<img src="tope2.jpg">
<br>
<br>
<center><big><caption style='font-size:16pt'><b>DATOS DE LOS ESTUDIANTES</b> </caption>
<br>
<br>
<table border="1" >
<tr>
<th>Cédula</th>
<th>Apellidos</th>
<th>Nombres</th>
<th>Sexo</th>
<th>E-mail</th>
<th>Nacionalidad</th>

</tr>
</center>
<?php
include("conexion.php");
		
		$consulta="SELECT * FROM estudiantes ORDER BY cedula";  
				
		$resultado=mysql_query($consulta);
		echo mysql_error();

      while($fila=mysql_fetch_array($resultado)){
      echo "<tr>";
      echo "<td>", $fila['cedula'], "</td>";
		echo "<td>",$fila['apellido'], "</td>";		
		echo "<td>", $fila['nombre'], "</td>";	   
		echo "<td>", $fila['sexo'], "</td>";         
 		echo "<td>", $fila['email'], "</td>";		 
		echo "<td>", $fila['nacionalidad'], "</td>";		
		 echo "</tr>";
		}
		
	mysql_free_result($resultado);
			mysql_close(); 
?>

</table>
</body>
</html>