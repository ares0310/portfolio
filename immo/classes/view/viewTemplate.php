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


    public static function menu()
    {
    ?>
        <header class="header  mb-5">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
                    <a class="navbar-brand" href="index.html"><img src="../../photos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar row">
                    <a class="mr-5" href="controllerInscription.php">Inscription</a>
                    <a class="mr-5" href="controllerInscription.php">Se connecter</a>
                    <a class="mr-5" href="controllerInscription.php">Accueil</a>
                    <!-- <ul class="nav navbar-nav navbar-right row">
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
                    </ul> -->
                </div>
            </div>
        </nav>
    </header>






    <?php
    }


    public static function footer()
    {
    ?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo-realestate.png" alt="">
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
}
