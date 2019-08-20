<?php session_start();

//si la sesion ya esta iniciada
if(isset($_SESSION['email'])){
	header('Location: dashboard.php');
}

//Metodo post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email = filter_var(strtolower($_POST['email']),FILTER_SANITIZE_STRING);
	$password = $_POST['password'];

	// valido errores 
	$errores ='';
	if(empty($email) or empty($password)){
		$errores .='<li> Rellena los campos </li>';
	}else{
		try{
			$conexion = new PDO('mysql:host=localhost;dbname=shuffle','root','');
		}catch (PDOException $e){
			echo "Error ". $e->getMessage();
		}

		$consulta=$conexion->prepare('SELECT * FROM usuarios WHERE = :email LIMIT 1');
		$consulta->execute(array(':email'=>$email));
		$resultado = $consulta->fetch();
		print_r($resultado);
	}
}


require 'views/sesion.view.php';


?>