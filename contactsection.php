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
    <title>Ritika</title>
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/contact-css.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="engine1/jquery.js"></script>
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
                    <a href="portfoliosection.php">Portfolio</a>
                </li>
                <li>
                    <a id="underlinethis" href="contactsection.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>







    <section class="header-image">
        <div class="headline">
            <div class="container">
            </div>
        </div>
    </section>

    <!-- About Me Writing -->
    <section id="aboutme-writing" class="aboutme-writing">
        <div class="writing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>
                            Interested in working together? Feel free to contact me!<br><br>
                        <hr class="featurette-divider">
                            Email:
                                <br>
                                <a href="mailto:ritika.maknoor@gmail.com">ritika.maknoor@gmail.com</a>
                                <br><br>
                            Phone: 
                                <br>
                                <a>(609)-775-5911</a>
                                <br><br>
                            On the web: 
                                <br>
                                <a href="https://www.linkedin.com/in/ritikamaknoor/">LinkedIn</a>  |  
                                <a href="https://www.github.com/ritikamak/">GitHub</a>  |  
                                <a href="https://instagram.com/ritikamaknoor/">Instagram</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!-- Contact Section -->
<!--         <div class="contactsection" id="contactsection">
        <div class="container">
            <h2 class="featurette-heading">Contact Me
                <span class="text-muted"></span>
            </h2>
            <p class="lead">
                <br>
                Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as possible.
                <br><br>
                Email:
                <br>ritika.maknoor@gmail.com
                <br><br>
                Phone: 
                <br>(609)-775-5911
                <br><br>
                On the web: 
                <br>GitHub  |  Facebook  |  Instagram
            </p>
        </div>
    </div> -->

    <!-- Footer -->
<!--     <footer>
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
    </footer> -->

    <!-- Footer -->
    <section id="footer" class="footer">
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
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        var shiftWindow = function() { scrollBy(0, -40) };
        window.addEventListener("hashchange", shiftWindow);
    </script>
</body>
</html>

