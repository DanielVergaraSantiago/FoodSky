<?php

	$username = $_POST["username"];
  $email = $_POST["email"];
	$password = $_POST["password"];
  $type = $_POST["type"];

  $cifrada = password_hash($password, PASSWORD_DEFAULT);


	try{

		$base = new PDO("mysql:host=localhost; dbname=food", "root", "12345678");

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET CHARACTER SET utf8");


		$sql="INSERT INTO usuarios_contrasena (user, email, password, type) VALUES (:username, :email, :password, :type)";

		$resultado=$base->prepare($sql);


		$resultado->execute(array(":username"=>$username, ":email"=>$email, ":password"=>$cifrada, ":type"=>$type));


		echo "Registro insertado";

		$resultado->closeCursor();
    header('Location: login.html');

	}catch(Exception $e){


		echo "Línea del error: " . $e->getLine() . "<br>";
    echo "$e";

	}finally{

		$base=null;


	}

?>
