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
 $contrasenna=$_POST['contrasenna'];
	if($contrasenna==lcnw) {
  header('Location: ppal.html'); 	
	}
	else {
		   echo "ERROR DE AUTENTIFICACION";
		   echo "<br>";
		   
		   }

?>


</body>
</html>	
