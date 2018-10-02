<?php 
include '../Modelo/usuario.php';
	if (isset($_POST['button'])) {
		if ($_POST['accion']=='logueo') {
			
			$user=$_POST['user'];
			$pass=$_POST['pass'];

			$us= Usuario::ningunDato();
			$datos	=$us->logueo($user,$pass);	

		}
	}else {
		if ($_POST['accion']=='registrar') {
			$id='';
			$user=$_POST['usuario'];
			$email=$_POST['correo'];
			$contr=password_hash($_POST['contraseña'],PASSWORD_DEFAULT);
			$nom=$_POST['nombre'];
			$apell=$_POST['ap'];
			
			$regis=new Usuario($id,$user,$email,$contr,$nom,$apell);
			$regis->registrar();
		}
	}

	


 ?>