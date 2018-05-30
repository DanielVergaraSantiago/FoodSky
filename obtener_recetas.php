<?php

  session_start();

  if (!isset($_SESSION["user"])) {
    header("location:login.html");
  }

  $conexion = mysqli_connect("localhost", "root", "12345678");
  if (mysqli_connect_errno()) {
    echo "fallo";
    exit();
  }

  mysqli_select_db($conexion, "food") or die ("no se encontro");
  mysqli_set_charset($conexion, "utf8");


  $email = $_SESSION["user"];
  $sql_email = "SELECT * FROM usuarios_contrasena where email= '$email'";
  $resultado_email = mysqli_query($conexion, $sql_email);
  while ($row = mysqli_fetch_array($resultado_email)) {
    $type = $row[0];
  }

  if ($type == 1) {
    $sql = "SELECT * FROM recipe_milk";
  }else {
    $sql = "SELECT * FROM recipe";
  }

  $resultado = mysqli_query($conexion, $sql);

  $recetas = array();
  while ($fila = mysqli_fetch_array($resultado)) {
    $tmp = array();
    $img = $fila[0];
    $name = $fila[1];
    $description = $fila[2];
    $ingredients = $fila[3];
    $preparation = $fila[4];
    $imagen = $fila[6];
    array_push($tmp, $img);
    array_push($tmp, $name);
    array_push($tmp, $description);
    array_push($tmp, $ingredients);
    array_push($tmp, $preparation);
    array_push($tmp, $imagen);
    array_push($recetas, $tmp);
    #echo "$img";
    #echo $recetas[1][0];
  }
  #echo "<br>" . $recetas[0][1];
  /*echo $_SESSION["user"];*/

 ?>
