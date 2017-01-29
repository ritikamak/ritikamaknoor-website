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
</head> 
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">RM.</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#portfolio1">Portfolio</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>












    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container">
                <h1>Ritika Maknoor</h1>
                <h2>Software Developer</h2>
            </div>
        </div>
    </header>











    <!-- About Section -->
    <div class="container">
        <div class="about" id="about">
            <h2 class="featurette-heading">About Me
                <span class="text-muted"></span>
            </h2>
            <p class="lead">Hi there! I'm Ritika Maknoor. 
            I'm a web designer and software developer based in Pittsburgh/NYC. I am currently completing my final year at the University of Pittsburgh- working towards obtaining my B.S. in Computer Science.</p>
        </div>
    </div>

    








    <div class="container">
        <div class="photos">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12 text-center">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators hidden-xs">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="img-responsive img-full" src="img/img1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive img-full" src="img/img2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive img-full" src="img/img3.jpg" alt="">
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="icon-prev"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="icon-next"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











<div class="portoliosection">
    <!-- Page Content -->
    <div class="container">
        <hr class="featurette-divider">
        <!-- First Featurette -->
        <div class="featurette" id="portfolio1">
            <img class="featurette-image img-responsive pull-right" src="">
            <h2 class="featurette-heading">Pinder
                <span class="text-muted"></span>
            </h2>
            <p class="lead">A mobile and web application that collects user information about products through an engaging game experience. Allows a player to review a name, description, and picture of a product, set a price for what an average consumer would pay for it, indicate sentiment (positive and negative), and add comments.</p>
        </div>
        <hr class="featurette-divider">
        <!-- Second Featurette -->
        <div class="featurette" id="portfolio2">
            <img class="featurette-image img-responsive pull-left" src="">
            <h2 class="featurette-heading">Laboon Chess
                <span class="text-muted"></span>
            </h2>
            <p class="lead">A chess app developed using Stockfish and Gradle.</p>
        </div>
        <hr class="featurette-divider">
        <!-- Third Featurette -->
        <div class="featurette" id="portfolio3">
            <img class="featurette-image img-circle img-responsive pull-right" src="">
            <h2 class="featurette-heading">How It Feels
                <span class="text-muted"></span>
            </h2>
            <p class="lead"></p>
        </div>
        <hr class="featurette-divider">
        <!-- Fourth Featurette -->
        <div class="featurette" id="portfolio4">
            <img class="featurette-image img-circle img-responsive pull-left" src="">
            <h2 class="featurette-heading">PicTouresque
                <span class="text-muted"></span>
            </h2>
            <p class="lead"></p>
        </div>
        <hr class="featurette-divider">

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Ritika Maknoor 2017</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        var shiftWindow = function() { scrollBy(0, -50) };
        window.addEventListener("hashchange", shiftWindow);
    </script>
</body>
</html>
