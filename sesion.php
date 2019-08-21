<?php session_start();

//si la sesion ya esta iniciada
if(isset($_SESSION['email'])){
	header('Location: dashboard.php');
}

//Metodo post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email = filter_var(strtolower($_POST['email']),FILTER_SANITIZE_STRING);
	$password = $_POST['password'];


	try{
		$conexion = new PDO('mysql:host=localhost;dbname=shuffle','root','');
	}catch (PDOException $e){
			echo "Error ". $e->getMessage();
	}

	$statement = $conexion->prepare('SELECT *FROM usuarios where mail = :email AND 
		password = :password');
	$statement->execute(array(
		':email' =>$email,
		':password' => $password
	 ));

	$resultado = $statement->fetch();
	if ($resultado !== false){
		$_SESSION['email']=$email;
		header('Location: dashboard.php');
	}else{
		$errores .= '<li>Error </i>';
	}
}


require 'views/sesion.view.php';


?>