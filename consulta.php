<html>
<head>
<meta charset="utf-8" />
<title> Consulta estudiantes </title>
</head>
<body>
<body background="degradado.jpg">
<img src="tope2.jpg">
<br>
<br>
<center><big><caption style='font-size:16pt'> <b>DATOS DEL ESTUDIANTE</b></caption></big>
<table border="1" >
<br>
<br>
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
		
		$cedula=$_POST['cedula'];
		
	   $consulta="SELECT * FROM estudiantes WHERE Cedula='$cedula'";
	
		$resultado=mysql_query($consulta);
		echo mysql_error();

      while($fila=mysql_fetch_array($resultado)){
		
      echo "<tr>";
		echo"<center>";      
      echo "<td>", $fila['cedula'], "</td>";
		echo "<td>", $fila['apellido'], "</td>";		
		echo "<td>", $fila['nombre'], "</td>";	   
		echo "<td>", $fila['sexo'], "</td>";         
 		echo "<td>", $fila['email'], "</td>"; 		 
		echo "<td>", $fila['nacionalidad'], "</td>";		
		echo"</center>";		
	   echo "</tr>";
	   
		}
	
         mysql_free_result($resultado);
         
       
			mysql_close(); 
?>
</table>
<br>
<br>
<center><big><caption style='font-size:16pt'> <b>SOLVENCIA DEL ESTUDIANTE</b></caption></big>
<table border="1" >
<br>
<tr>
<th>Materia</th>
<th>Sección</th>
<th>Semestre</th>
<th>Solvente</th>
</tr>
</center>
<?php

include("conexion.php");
		
		$cedula=$_POST['cedula'];
			
	   $consulta="SELECT * FROM materia WHERE Cedula='$cedula'";
	
		$resultado=mysql_query($consulta);
		echo mysql_error();

      while($fila=mysql_fetch_array($resultado)){
      echo "<tr>";	 
		echo "<td>", $fila['materia'], "</td>";
		echo "<td>", $fila['seccion'], "</td>";
		echo "<td>", $fila['semestre'], "</td>";
		echo "<td>", $fila['solvente'], "</td>";
	   echo "</tr>";
	   
		}
	
         mysql_free_result($resultado);
			mysql_close(); 
?>
</table>
<br>
<br>
<table>
<tr>
<form action="ingresomateria.html" method="post">
<input type="submit" value="Ingresar Materias">
</form>
</tr>
<tr>
<form action="actualiza.html" method="post">
<input type="submit" value="Modificar">
</form>
</tr>
<tr>
<form action="ppal.html" method="post">
<input type="submit" value="Atras">
</form>
</tr>
</table>
</body>
</html>