<?php

  $email = htmlentities(addslashes($_POST["email"]));
	$password = htmlentities(addslashes($_POST["password"]));

  $C = 0;

  try {

    $base = new PDO("mysql:host=localhost; dbname=food", "root", "12345678");

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM usuarios_contrasena where email= :email";

    $resultado = $base->prepare($sql);

    $resultado->execute(array(":email"=>$email));

    while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

        if (password_verify($password, $registro["password"])) {
          $c++;
        }
    }

    if ($c > 0) {
      header('Location: inicio.php');
    }else {
      header('Location: login.html');
    }

    $resultado -> closeCursor();

  } catch (\Exception $e) {

    die("Error: " . $e.getMessage());
  }
