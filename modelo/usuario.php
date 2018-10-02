<<?php 
include '../Modelo/conexion.php';
/**
* 
*/
class Usuario{
	
	private $id;
	private $usuario;
	private $correo;
	private $contraseña;
	private $nombre;
	private $apellido;
	
	function __construct($id,$user,$email,$cont,$nom,$ap){
		$this->id=$id;
		$this->usuario=$user;
		$this->correo=$email;
		$this->contraseña=$cont;
		$this->nombre=$nom;
		$this->apellido=$ap;
		
	}

	static function ningunDato()
	{
		return new self('','','','','','');
	}

	public function logueo($usuario,$contraseña){
		$this->usuario=$usuario;
		$this->contraseña=$contraseña;
		
		$db=new Conexion();

		

		$sql="SELECT * FROM `usuarios` WHERE usuario='".$this->usuario."'";
		$resultado=$db->query($sql);

		
		if($row = $resultado->fetch_array()){
			$res=password_verify($this->contraseña,$row[3]);
			if ($res==true) {
				session_start();
				$_SESSION['usuario']=$row[1];
				$_SESSION['correo']=$row[2];
				header("Location: ../Vista/mijob.php");
			}else{
				echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
				echo "<script>location.href='../Vista/index.php'</script>";
			}

		}else{
			echo '<script>alert("El usuario no existe")</script> ';
			echo "<script>location.href='../Vista/index.php'</script>";
		}

	}

	public function registrar(){
		
		$db=new Conexion();
		
		$sentencia="INSERT INTO usuarios VALUES (null,'".$this->usuario."','".$this->correo."','".$this->contraseña."','".$this->nombre."','".$this->apellido."')";
		mysqli_query($db,$sentencia);
		
		
		echo '<script>alert("Datos Insertados Correctamente")</script>';
		echo "<script>location.href='../Vista/index.php'</script>";
		


	}
}


 ?>