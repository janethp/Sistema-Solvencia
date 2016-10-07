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
 $seccion=$_POST['seccion'];
 $materia=$_POST['materia'];
 $semestre=$_POST['semestre'];
 $solvente=$_POST['solvente'];

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

<br>
<br>
  <form action="consulta.html" method="post">
  <input type="submit" value="Consultar">
  </form>

</body>
</html>