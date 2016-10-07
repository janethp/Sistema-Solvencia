<html>
<head>
<title> Estudiantes </title>
</head>
<body>
<body background="editada.jpg">
<img src="tope2.jpg">
<?php
 
include("conexion.php");

 $cedula=$_POST['cedula'];
 $apellido=$_POST['apellido'];
 $nombre=$_POST['nombre'];
 $email=$_POST['email'];
 $sexo=$_POST['sexo'];
 $nacionalidad=$_POST['nacionalidad'];
  
 $consulta="SELECT * FROM estudiantes WHERE Cedula='$cedula'";
		
		$resultado=mysql_query($consulta);
		echo mysql_error();
			
	  while($resultad=mysql_fetch_array($resultado)){
	  	$resultadaux['cedula']=$resultad['cedula'];
 		$resultadaux['nombre']=$resultad['nombre'];
	   $resultadaux['sexo']=$resultad['sexo'];
	   $resultadaux['email']=$resultad['email'];
	   $resultadaux['nacionalidad']=$resultad['nacionalidad'];
  	   $resultadaux['apellido']=$resultad['apellido'];
		}
			
         mysql_free_result($resultado);
			mysql_close(); 
?>
<center> <b> <h3>MODIFICAR DATOS DEL ESTUDIANTE</h3></b></center>
	  

<form action="actualizar.php" method="post">
<table align="center">
<tr>
<td>Cedula</td> <td><input type="text" name="cedula" value="<?php echo $resultadaux['cedula'] ?>" OnFocus="this.blur()"> </td>
</tr>
<tr>

<td>Apellidos</td> <td><input type="text" name="apellido" value="<?php echo $resultadaux['apellido'] ?>"> </td>
</tr>
<tr>

<td>Nombres</td> <td> <input type="text" name="nombre" value="<?php echo $resultadaux['nombre'] ?>"></td>
</tr>
<tr>

<td>E-mail</td> <td> <input type="text" name="email" value="<?php echo $resultadaux['email'] ?>"></td>
</tr>
<tr>

<td>Sexo</td> <td> Femenino <input type="radio" name="sexo" value="femenino" />
              Masculino <input type="radio" name="sexo" value="masculino" /></td>
<tr>

<td>Nacionalidad</td> <td> Venezolano <input type="radio" name="nacionalidad" value="venezolano" />  
                       Extranjero <input type="radio" name="nacionalidad" value="extranjero" /></td>
</tr>

<?php
echo "<input type='hidden' name='cedula' value='$cedula'>"
 ?>      
</table>
<br>
<br>              
<center>
<input type="submit" value="MODIFICAR">
</center>

</form>


</body>
</html>