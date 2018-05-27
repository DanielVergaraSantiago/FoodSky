<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <!-- Iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="prueba.css">

    <title>FoodSky</title>

    <link rel="shortcut icon" href="Recursos/food.png">

  </head>

  <body style="background-color: #C4EDDE;" ata-spy="scroll" data-target=".navbar" data-offset="50">

    <?php

#      session_start();
#
#      if (!isset($_SESSION["user"])) {
#        header("location:login.php");
#      }

#      require("tmp2.php");

    ?>

    <nav class="navbar navbar-expand-lg bg-darkBlue sticky-top justify-content-center">
      <a class="navbar-brand" href="#">FS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link mr-5" href="inicio.php">For me</a>
          <a class="nav-item nav-link mr-5" href="AboutUs.html">About us</a>
          <a class="nav-item nav-link mr-5 active" style="font-size: 1.4rem" href="prubea.php">FoodSky<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link mr-5" href="#today">Today</a>
          <a class="nav-item nav-link mr-5" href="cerrar_sesion.php">Sign out</a>
        </div>
      </div>
    </nav>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="d-block w-100 img-carousel" src="Recursos/comida/pizza-zoom.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor</h5>
            <p>Fusce egestas cursus leo, ut eleifend massa blandit non. Duis luctus ipsum quis sem convallis pulvinar. </p>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100 img-carousel" src="Recursos/comida/pastas.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor</h5>
            <p>Fusce egestas cursus leo, ut eleifend massa blandit non. Duis luctus ipsum quis sem convallis pulvinar. </p>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100 img-carousel" src="Recursos/comida/sushi.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor</h5>
            <p>Fusce egestas cursus leo, ut eleifend massa blandit non. Duis luctus ipsum quis sem convallis pulvinar. </p>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <section class="section-100" id="today">

      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-7 subsection h5">
            <a href="#"><p class="text-right"><i style="color: yellow;" class="material-icons">stars</i></p></a>
            <h5 class="h3">Fusce pulvinar nisl</h5>
            <p class="font-weight-normal">Nunc leo leo, laoreet ut fringilla ac, condimentum eleifend nisi. Praesent tristique, libero id varius aliquet, ligula turpis dapibus urna, vulputate mattis lectus erat eget quam. Nulla viverra purus ut tempor porttitor. Donec molestie ligula ac justo volutpat, a venenatis enim hendrerit. Quisque at tellus tristique augue malesuada fermentum. Ut ac ullamcorper lacus, eu consequat tellus. Sed viverra nec tellus a dignissim. Etiam vestibulum accumsan volutpat. Integer facilisis nisl nec dictum cursus. Nunc vehicula arcu et odio mattis pharetra.</p>
            <ul class="list-unstyled">
              <li>- Lorem ipsum dolor sit amet</li>
              <li>- Consectetur adipiscing elit</li>
              <li>- Integer molestie lorem at massa</li>
              <li>- Facilisis in pretium nisl aliquet</li>
              <li>- Faucibus porta lacus fringilla vel</li>
              <li>- Aenean sit amet erat nunc</li>
              <li>- Eget porttitor lorem</li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-5">
            <img src="Recursos/comida/carne.jpg" class="img-fluid img-dia" alt="Responsive image">
          </div>
        </div>
      </div>

    </section>

    <section class="section-200">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <img src="Recursos/comida/cupcake.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-md-7 subsection h5">
            <a href="#"><p class="text-right"><i style="color: yellow;" class="material-icons">stars</i></p></a>
            <h5 class="h3">Fusce pulvinar nisl</h5>
            <p class="font-weight-normal">Nunc leo leo, laoreet ut fringilla ac, condimentum eleifend nisi. Praesent tristique, libero id varius aliquet, ligula turpis dapibus urna, vulputate mattis lectus erat eget quam. Nulla viverra purus ut tempor porttitor. Donec molestie ligula ac justo volutpat, a venenatis enim hendrerit. Quisque at tellus tristique augue malesuada fermentum. Ut ac ullamcorper lacus, eu consequat tellus. Sed viverra nec tellus a dignissim. Etiam vestibulum accumsan volutpat. Integer facilisis nisl nec dictum cursus. Nunc vehicula arcu et odio mattis pharetra.</p>
            <ul class="list-unstyled">
              <li>- Lorem ipsum dolor sit amet</li>
              <li>- Consectetur adipiscing elit</li>
              <li>- Integer molestie lorem at massa</li>
              <li>- Facilisis in pretium nisl aliquet</li>
              <li>- Faucibus porta lacus fringilla vel</li>
              <li>- Aenean sit amet erat nunc</li>
              <li>- Eget porttitor lorem</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="section-300">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7 subsection h5">
            <a href="#"><p class="text-right"><i style="color: yellow;" class="material-icons">stars</i></p></a>
            <h5 class="h3">Fusce pulvinar nisl</h5>
            <p class="font-weight-normal">Nunc leo leo, laoreet ut fringilla ac, condimentum eleifend nisi. Praesent tristique, libero id varius aliquet, ligula turpis dapibus urna, vulputate mattis lectus erat eget quam. Nulla viverra purus ut tempor porttitor. Donec molestie ligula ac justo volutpat, a venenatis enim hendrerit. Quisque at tellus tristique augue malesuada fermentum. Ut ac ullamcorper lacus, eu consequat tellus. Sed viverra nec tellus a dignissim. Etiam vestibulum accumsan volutpat. Integer facilisis nisl nec dictum cursus. Nunc vehicula arcu et odio mattis pharetra.</p>
            <ul class="list-unstyled">
              <li>- Lorem ipsum dolor sit amet</li>
              <li>- Consectetur adipiscing elit</li>
              <li>- Integer molestie lorem at massa</li>
              <li>- Facilisis in pretium nisl aliquet</li>
              <li>- Faucibus porta lacus fringilla vel</li>
              <li>- Aenean sit amet erat nunc</li>
              <li>- Eget porttitor lorem</li>
            </ul>
          </div>
          <div class="col-md-5">
            <img src="Recursos/comida/pizza.jpg" class="img-fluid" alt="Responsive image">
          </div>
        </div>
      </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
