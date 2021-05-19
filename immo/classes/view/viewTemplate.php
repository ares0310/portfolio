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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us </a></li>
                        <li><a href="service.html">Service</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="properties.html">Properties</a></li>
                        <li><a class="active" href="contact.html">Contact</a></li>
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


    public static function footer()
    {
    ?>

        <div class="fixed-bottom bg-dark text-white text-center">
            Portfolio Team © <?php echo date("Y") ?>
        </div>

<?php
    }
}
