<?php

  $conexion = mysqli_connect("localhost", "root", "12345678");
  if (mysqli_connect_errno()) {
    echo "fallo";
    exit();
  }

  mysqli_select_db($conexion, "food") or die ("no se encontro");
  mysqli_set_charset($conexion, "utf8");

  $sql = "SELECT * FROM recipe";

  /*$mm = 0;
  $aa = $_SESSION["user"];
  echo $aa;
  $consulta = "SELECT type FROM usuarios_contrasena WHERE email='$aa'";
  $resultado_consulta = mysqli_query($conexion, $consulta);
  while ($fila1 = mysqli_fetch_array($resultado_consulta)) {
    $mm++;
    echo "jkj";
    echo "$fila1";
  }*/


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


 ?>
