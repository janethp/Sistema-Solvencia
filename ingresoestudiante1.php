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
 
 echo "<br>";

 $cedula=$_GET['cedula'];

?>
<center> <b> <h3> INGRESAR DATOS DEL ESTUDIANTE</h3></b></center>
<form action="ingresoestudiante.php" method="post">
<table align="center">
<tr>
<td>Cedula</td> <td><input type="text" name="cedula" value="<?php echo $cedula ?>" OnFocus="this.blur()"> </td>
</tr>
<tr>
<td>Apellidos </td><td><input type="text" name="apellido">   <option value="apellido"></option></td>
</tr>
<tr>
<td>Nombres </td> <td> <input type="text" name="nombre">  <option value="nombre"></option></td>
</tr>
<tr>
<td>E-mail </td> <td> <input type="text" name="email">  <option value="email"></option></td>
</tr>
<tr>
<td>Sexo </td> <td> Femenino <input type="radio" name="sexo" value="Femenino" />
                Masculino <input type="radio" name="sexo" value="Masculino" /></td>
                   <tr>
<td>Nacionalidad </td>      <td> Venezolano <input type="radio" name="nacionalidad" value="Venezolano" />    
                             Extranjero <input type="radio" name="nacionalidad" value="Extranjero" /></td> 
<tr>
<td>Materia </td> <td>  <select name="materia" onchange="salta(this.form)" size="1" style="width:186px">
<option>
<option>Programacion 1
<option>Programacion 2
<option>Programacion 3
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
<td>Solvente </td>      <td>Si <input type="radio" name="solvente" value="Si" />
                        No <input type="radio" name="solvente" value="No" /></td> 
                 <tr>
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