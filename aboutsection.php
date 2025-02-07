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
    <link href="css/about-css.css" rel="stylesheet">
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
                    <a id="underlinethis" href="aboutsection.php">About</a>
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
            </div>
        </div>
    </section>

    <section id="section-bar" class="content-section text-center">
      <div class="top-section">
        <div class="container1">
            <div id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                        <li>
                            <a>
                                <img src="data1/images/colorfulthis.jpg" alt="responsive slider" title="Designer" id="wows1_0"/>
                            </a>
                        </li>
                        <li>
                            <img src="data1/images/binarythis.jpg" alt="Coder" title="Coder" id="wows1_1"/>
                        </li>
                    </ul>
                </div>
                <div class="ws_script" style="position:absolute;left:-99%">
                    <a>
                    </a>
                </div>
                <div class="ws_shadow">
                </div>
            </div>  
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
                            Hi!
                            I'm Ritika Maknoor and this is my personal portfolio. I'm a front-end software developer based in Pittsburgh/NYC.
                            Combining my passion for designing beautiful and functional user experiences, with my skillset in writing clean, elegant and efficient code, it is my goal to deliver not only products, but also experiences to my customers.
                            I believe that each and every product is a work of art and should be treated as such. Every stage of development constructs a layer of personality and a chance for a relationship with its users. I get my own personal inspiration for vibrant and unique concepts through exploration of urban art and life. If you're interested, check out my work in the portolio section.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section> 

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
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <script>
        var shiftWindow = function() { scrollBy(0, -40) };
        window.addEventListener("hashchange", shiftWindow);
    </script>
</body>
</html>

