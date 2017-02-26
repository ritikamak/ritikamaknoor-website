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
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/home-css.css" rel="stylesheet">
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
                    <a href="portfoliosection.php">Portfolio</a>
                </li>
                <li>
                    <a href="contactsection.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="header-image">
        <div class="headline">
            <div class="container">
                <!-- <h1>Ritika<br>Maknoor</h1>
                <h2>Software Developer</h2> -->
            </div>
        </div>
    </section>

    <section id="section-bar" class="content-section text-center">
      <div class="top-section">
        <div class="container1">
            <img src="img/home.jpg" alt="">
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
