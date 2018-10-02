<?php 

	$mysqli = new MySQLi("localhost", "root","", "mijob");
		if ($mysqli ->connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}else{
			echo "conexion establecida";
		}
		$sql = "INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `contraseña`, `nombre`, `ap`) VALUES (NULL, 'elea', 'elea@gmail.com', '123', 'elea', 'sanjuan')";

		//$sentencia="INSERT INTO usuarios VALUES ('".$id."',".$usuario."','".$correo."','".$contraseña."','".$nom."','".$ape."')";
		$result=mysqli_query($mysqli,$sql) or die(mysql_error());
 ?>

 <script type="text/javascript">
 	alert("Datos registrados correctamente");
 	window.location="../Vista/index.php";
 </script>