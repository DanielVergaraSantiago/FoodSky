<?php

  $name = $_POST["name"];
  $description = $_POST["review"];
  $ingredients = $_POST["ingredients"];
  $preparation = $_POST["preparation"];
  $type = $_POST["type"];
  $image = $_FILES["image"]["name"];

  $ruta_destino = $_SERVER["DOCUMENT_ROOT"] . "/proyectos/foodsky/img/";

  move_uploaded_file($_FILES["image"]["tmp_name"], $ruta_destino . $image);


  $conexion = mysqli_connect("localhost", "root", "12345678");
  if (mysqli_connect_errno()) {
    echo "fallo";
    exit();
  }

  mysqli_select_db($conexion, "food") or die ("no se encontro");
  mysqli_set_charset($conexion, "utf8");


  $sql="INSERT INTO recipe (name, description, ingredients, preparation, image, type)
  VALUES ('$name', '$description', '$ingredients', '$preparation', '$image', '$type')";

  $resultado = mysqli_query($conexion, $sql);

  

?>
