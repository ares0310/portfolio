<?php

class ViewTemplate
{
    public static function alert($message, $type, $lien)
    {

?>

        <div class="alert alert-<?php echo $type ?>" role="alert">
            <?php echo $message ?>
            <a href="<?php echo $lien  ?>">cliquez ici</a>
        </div>

    <?php
    }

    public static function docType()
    {
        
    ?>
        <!DOCTYPE html>
        <html lang="en">

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Site Metas -->
        <title>CITY Real Estate - Responsive HTML5 Landing Page Template</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="../../images/apple-touch-icon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="../controller/style.css">
        <!-- Colors CSS -->
        <link rel="stylesheet" href="../../css/colors.css">
        <!-- ALL VERSION CSS -->
        <link rel="stylesheet" href="../../css/versions.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="../../css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../../css/custom.css">

        <!-- Modernizer for Portfolio -->
        <script src="../../js/modernizer.js"></script>

        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        </head>

        <body class="realestate_version">
        <?php
    }



    public static function navBar()
    {
        ?>

            <body class="realestate_version">

                <!-- LOADER -->
                <div id="preloader">
                    <span class="loader"><span class="loader-inner"></span></span>
                </div><!-- end loader -->
                <!-- END LOADER -->

                <header class="header header_style_01">
                    <nav class="megamenu navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.html"><img src="../../images/logos/logo.png" alt="image"></a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="active" href="accueil.php">Accueil</a></li>
                                    <li><a href="about.html">About us </a></li>
                                    <li>
                                    <?php

                                    if (isset($_SESSION["id"])) {
                                        // echo "bienvenu" . " " . $_SESSION["mail"];
                                        echo ("welcome: " . " " . $_SESSION["id"] . " " . $_SESSION["role"] . " " . $_SESSION["nom"] . " <a style='color:white;' role='button' class='btn btn-danger active' href='disconnect.php' >Se déconnecter</a> ");
                                    } else {
                                    ?>
                                    </li>
                                        <li><a class="" href="controllerInscription.php">Inscription</a></li>
                                        <li><a class="" href="controllerConnexion.php">Se connecter</a></li>
                                    <?php
                                    }
                                    ?>
                                    

                                    <!-- RECHERCHE -->
                                    <!-- <li class="search-option">
                                        <button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        <form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
                                            <input type="text" placeholder="Search....">
                                            <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>



            <?php
        }

        public static function marginTop(){
            ?>
            <div style="margin-top:150px"></div>
            <?php
        }

        


        public static function footer()
        {
            ?>
                <footer class="footer fixed-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="widget clearfix">
                                    <div class="widget-title">
                                        <img src="../../images/logos/logo-realestate.png" alt="">
                                    </div>
                                    <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                                    <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                                </div><!-- end clearfix -->
                            </div><!-- end col -->

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="widget clearfix">
                                    <div class="widget-title">
                                        <h3>Info Link</h3>
                                    </div>

                                    <ul class="twitter-widget footer-links">
                                        <li><a href="#"> Home </a></li>
                                        <li><a href="#"> About Us </a></li>
                                        <li><a href="#"> Services</a></li>
                                        <li><a href="#"> Gallery</a></li>
                                        <li><a href="#"> Properties</a></li>
                                        <li><a href="#"> Contact</a></li>
                                    </ul><!-- end links -->
                                </div><!-- end clearfix -->
                            </div><!-- end col -->

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="widget clearfix">
                                    <div class="widget-title">
                                        <h3>Contact Details</h3>
                                    </div>

                                    <ul class="footer-links">
                                        <li><a href="mailto:#">info@yoursite.com</a></li>
                                        <li><a href="#">www.yoursite.com</a></li>
                                        <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                                        <li>+61 3 8376 6284</li>
                                    </ul><!-- end links -->
                                </div><!-- end clearfix -->
                            </div><!-- end col -->

                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="widget clearfix">
                                    <div class="widget-title">
                                        <h3>Social</h3>
                                    </div>
                                    <ul class="footer-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                        <li><a href="#"><i class="fa fa-github"></i> Github</a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i> Dribbble</a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                    </ul><!-- end links -->
                                </div><!-- end clearfix -->
                            </div><!-- end col -->

                        </div><!-- end row -->
                    </div><!-- end container -->
                </footer><!-- end footer -->
                <div class="fixed-bottom bg-dark text-white text-center">
                    Agence immo © <?php echo date("Y") ?>
                </div>

            <?php
        }
        public static function header()
        {

            ?>
                <!-- LOADER -->
                <!-- <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>end loader -->
                <!-- END LOADER -->

                <header class="header header_style_01">
                    <nav class="megamenu navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt="image"></a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="active" href="index.html">Home</a></li>
                                    <li><a href="about.html">About us </a></li>
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="properties.html">Properties</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li class="social-links"><a href="#"><i class="fa fa-twitter global-radius"></i></a></li>
                                    <li class="social-links"><a href="#"><i class="fa fa-facebook global-radius"></i></a></li>
                                    <li class="social-links"><a href="#"><i class="fa fa-linkedin global-radius"></i></a></li>
                                    <li class="search-option">
                                        <button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        <form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
                                            <input type="text" placeholder="Search....">
                                            <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>



            <?php
        }

        public static function scriptJs()
        {
            ?>
                <!-- ALL JS FILES -->
                <script src="../../js/all.js"></script>
                <!-- ALL PLUGINS -->
                <script src="../../js/custom.js"></script>
                <script src="../../js/portfolio.js"></script>
                <script src="../../js/hoverdir.js"></script>
                <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
                <!-- MAP & CONTACT -->
                <!-- <script src="js/map.js"></script> -->

            </body>

        </html>
<?php
        }
    }
