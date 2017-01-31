<?php
  function __autoload($class) {
    require_once $class . '.php';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ritika Site</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> 
<body>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">RM.</a> -->
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mynavbar" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="aboutsection.php">About</a>
                </li>
                <li>
                    <a href="portfoliosection.php">Portfolio</a>
                </li>
                <li>
                    <a href="contactsection.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Portfolio Section -->
    <div class="portoliosection" id="portfoliosection">
        <div class="container">
            <h2 class="featurette-heading">Portfolio
                <span class="text-muted"></span>
            </h2>
<!--             <hr class="featurette-divider">
            <div class="featurette" id="portfolio2">
                <img class="featurette-image img-responsive pull-left" src="img/LaboonChess.png">
                <h2 class="featurette-heading">
                    <span class="text-muted">Laboon Chess</span>
                </h2>
                <p class="lead">A chess app developed using Stockfish and Gradle.</p>
            </div> -->
<!--        <hr class="featurette-divider">
        <div class="featurette" id="portfolio1">
            <img class="featurette-image img-responsive pull-right" src="">
            <h2 class="featurette-heading">Pinder
                <span class="text-muted"></span>
            </h2>
            <p class="lead">A mobile and web application that collects user information about products through an engaging game experience. Allows a player to review a name, description, and picture of a product, set a price for what an average consumer would pay for it, indicate sentiment (positive and negative), and add comments.</p>
        </div>
        <hr class="featurette-divider">
        <div class="featurette" id="portfolio2">
            <img class="featurette-image img-responsive pull-left" src="img/LaboonChess.png">
            <h2 class="featurette-heading">Laboon Chess
                <span class="text-muted"></span>
            </h2>
            <p class="lead">A chess app developed using Stockfish and Gradle.</p>
        </div>
        <hr class="featurette-divider">
        <div class="featurette" id="portfolio3">
            <img class="featurette-image img-circle img-responsive pull-right" src="">
            <h2 class="featurette-heading">How It Feels
                <span class="text-muted"></span>
            </h2>
            <p class="lead"></p>
        </div>
        <hr class="featurette-divider">
        <div class="featurette" id="portfolio4">
            <img class="featurette-image img-circle img-responsive pull-left" src="">
            <h2 class="featurette-heading">PicTouresque
                <span class="text-muted"></span>
            </h2>
            <p class="lead"></p>
        </div>
        <hr class="featurette-divider"> -->
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://github.com/ritikamak"><i class="fa fa-github fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="http://facebook.com/ritika.maknoor"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/ritikamaknoor"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="mailto:ritika.maknoor@gmail.com"><i class="fa fa-envelope-o fa-fw fa-3x"></i></a>
                        </li>
                        <p><br>Copyright &copy; Ritika Maknoor 2017</p>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        var shiftWindow = function() { scrollBy(0, -40) };
        window.addEventListener("hashchange", shiftWindow);
    </script>
</body>
</html>
