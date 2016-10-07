<html>
<head>
<meta charset="utf-8" />
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
 $seccion=$_POST['seccion'];
 $materia=$_POST['materia'];
 $semestre=$_POST['semestre'];
 $solvente=$_POST['solvente'];

 $sql="INSERT INTO estudiantes (cedula,apellido,nombre,email,sexo,nacionalidad) VALUES ('$cedula','$apellido','$nombre','$email','$sexo','$nacionalidad')";

 $cursor=mysql_query($sql);
 echo mysql_error();
 echo "<br>";
  
 $num=mysql_affected_rows();
 if($num!=0){
 	echo"Su registro ha sido insertado";
}
else{
	echo "error de insercion";
}

 $sql="INSERT INTO materia (cedula,materia,seccion,semestre,solvente) VALUES ('$cedula','$materia','$seccion','$semestre','$solvente')";

 $cursor=mysql_query($sql);
 echo mysql_error();
 echo "<br>";
  
 $num=mysql_affected_rows();
 if($num!=0){
 	echo"Su registro ha sido insertado";
}
else{
	echo "error de insercion";
}

mysql_close();
?>

<form action="ingreso.html" method="post">
<input type="submit" size="1" style="width:300px" value="Ingresar Estudiante">
</form>
</body>
</html>