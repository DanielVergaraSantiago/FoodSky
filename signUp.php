<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Sign up</title>

    <link rel="shortcut icon" href="Recursos/food.png">

  </head>

  <body class="cover">

    <nav class="navbar navbar-expand-lg bg-darkBlue sticky-top">
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link mr-5" href="#">Galerie</a>
          <a class="nav-item nav-link mr-5" href="AboutUs.html">About us</a>
          <a class="nav-item nav-link mr-5 active" style="font-size: 1.4rem" href="prueba.html">FoodSky<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link mr-5" href="#">Sign up</a>
          <a class="nav-item nav-link mr-5" href="login.php">Sign in</a>
        </div>
      </div>
    </nav>


    <div class="container">
      <div class="text-center row sgi">

        <div class="col-md-4"></div>

        <div class="col-md-4 difuminadoLightBlue">

          <form class="form-signin" action="enviarUsuario.php" method="post" style="color: #384259;">
            <img class="mb-4 imgRound" src="Recursos/blanco.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal" >Please sign up</h1>

            <label for="inputName" class="sr-only">Name</label>
            <input type="text" id="inputName" name="username" class="form-control" placeholder="Name" required autofocus>
            <br>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <p>Intolerancia a:</p>
            <p class="text-center">1.lactosa  2.gluten  3.lorem ipsum</p>
            <label for="inputTipo" class="sr-only">Seleccion</label>
            <input type="text" id="inputTipo" name="type" class="form-control" placeholder="# Seleccion" required autofocus>
            <div class="checkbox mb-3">
              <label style="color: #384259;">
                <input type="checkbox" value="remember-me" required> Acept terms and conditions
              </label>
            </div>
            <button class="btn btn-lg btn-danger btn-block bg-Red" name="boton" type="submit" style="color: #C4EDDE;">Sign up</button>
            <br>
          </form>

        </div>

        <div class="col-md-4"></div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
