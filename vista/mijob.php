<!DOCTYPE html>
<?php
session_start();
if (empty($_SESSION['usuario'])) {

	echo '<script>alert("Inicia sesión para acceder a esta página")</script>' ;
			
	header("Location:index.php");
}
?>
<html>
<head>
	<title>Mijob.com</title>
</head>
<body>
	<h1>Bienvenido mijob</h1><br>

	<a href="../Modelo/cerrarsesion.php">cerrar sesión</a>
</body>
</html>