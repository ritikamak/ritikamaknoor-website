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
    <link href="css/portfolio-css.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> 
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">ritika</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="aboutsection.php">About</a>
                </li>
                <li>
                    <a id="underlinethis" href="portfoliosection.php">Portfolio</a>
                </li>
                <li>
                    <a href="contactsection.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img src="img/photography.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Photography</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img src="img/appdev.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>App Development</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img src="img/processors.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Processors</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img src="img/algorithms.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Algorithms</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h5>Photography</h5><br><br>
                                <img src="img/photography/img1.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img2.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img3.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img4.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img5.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img6.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img7.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img8.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img9.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img10.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img11.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img12.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img13.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img14.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img15.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                                <img src="img/photography/img16.jpg" class="col-md-4 col-sm-6 portfolio-item" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h5>App Development</h5><br><br>
                                <p>
                                    <a href="https://pinder-1288b.firebaseapp.com/">Pinder</a> is a mobile and web app that collects user information about products through an engaging game experience. It allows a player to review a name, description, and picture of a product, set a price for what an average consumer would pay for it, indicate sentiment (positive and negative), and add comments.<br>
                                    <a href="https://github.com/ritikamak/pinder-application">Code can be found here</a>.
                                </p>
                                <p>
                                    <a>Laboon Chess</a> 
                                    is a chess app developed using Stockfish and Gradle.<br>
                                    <a href="https://github.com/ritikamak/chess-application">Code can be found here</a>.
                                </p>
                                <p>
                                    <a>PicTouresque</a> 
                                    is a mobile app that uses image recognition and gps location to provide users with an informative audio tour experience.<br>
                                    <a href="https://github.com/ritikamak/pictouresque-application">Code can be found here</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h5>Processors</h5><br><br>
                                <p>
                                    <a>Calculator CPU</a> 
                                    is a 32-bit MIPS processor designed and built using Logism.<br>
                                    <a href="https://github.com/ritikamak/calculator-cpu">Code can be found here</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h5>Algorithms</h5><br><br>
                                <p>
                                    <a>LZW Compression</a> 
                                    is a modified version of the LZW compression algorithm developed for variable-width codewords.<br>
                                    <a href="https://github.com/ritikamak/LZW-compression">Code can be found here</a>.
                                </p>
                                <p>
                                    <a>RSA Encryption</a> 
                                    is an implementation of RSA encryption; generating keypairs/digital signatures.<br>
                                    <a href="https://github.com/ritikamak/RSA-encryption">Code can be found here</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-writing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <ul class="list-inline">
                        <br>Copyright &copy; Ritika Maknoor 2017
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    <script>
        var shiftWindow = function() { scrollBy(0, -40) };
        window.addEventListener("hashchange", shiftWindow);
    </script>
</body>
</html>
