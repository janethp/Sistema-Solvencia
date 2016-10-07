<html>
<head>
<meta charset="utf-8" />
<title> Solventes </title>
</head>
<body>


<?php

include("conexion.php");

		$cedula=$_POST['cedula'];
		
		$consulta="SELECT nombre, apellido, nacionalidad FROM estudiantes WHERE cedula='$cedula'"; 
				
			$resultado=mysql_query($consulta);
		    echo mysql_error();   
		   
		    echo "<br>";
					$datos=mysql_num_rows($resultado);{
			
			$nombre=mysql_result($resultado,0,'nombre');
			$apellido=mysql_result($resultado,0,'apellido');
			$nacionalidad=mysql_result($resultado,0,'nacionalidad');
			}
			
			$consulta="SELECT cedula,solvente FROM materia  WHERE cedula='$cedula' GROUP BY solvente HAVING solvente='no'";
			
			$resultado=mysql_query($consulta);
		    echo mysql_error();
		   
		    echo "<br>";
		    
					$datos=mysql_num_rows($resultado);{
			
			$solvente=mysql_result($resultado,0,'solvente');
		  	
		    }
	

	if($solvente==no) {
	header('Location: insolvente.html');
	}
		else { 
		if($solvente!=no) {
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"	<center><b>SOLVENCIA</b></center><br><br>";
			echo"<br>";
echo "<p align=\"justify\">";
echo "Quien suscribe, Coordinador del Laboratorio de Computación Nikolaus Walczuch, de la Escuela de Ingeniería de Sistema de  la Universidad de los Andes, hace constar por medio de la presente que <b> $nombre $apellido ,</b> portador de la cédula de identidad <b> No. $nacionalidad- $cedula ,</b> se encuentra solvente con dicho Laboratorio.";
echo"<br>";
echo"<br>";
echo "Constancia que se expide a solicitud de la parte interesada en la ciudad de Mérida ";
echo "el día ",date("d"), ", ", "del mes de ", date("M"), " del año ", date("Y"),"<br />\n";
echo "</p>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"	<center>Ing. Rene Orlando Izarra Izarra</center>";
echo"	<center>C.I. V-10.105.492 </center>"; 
echo"	<center>Coordinador del Laboratorio</center>";
	echo "<br>";
		
		                }
		 }
		
		
			 mysql_free_result($resultado);
			mysql_close(); 
			
?>

</body>
</html>