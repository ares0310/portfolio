
    
    <?php

    require_once "../model/modelUser.php";
    require_once "../view/viewUser.php";
    require_once "../view/viewTemplate.php";
    ViewTemplate::docType();
    ViewTemplate::navBar();
    ViewTemplate::marginTop();
    session_unset();
    session_destroy();
    ViewTemplate::alert("Vous êtes déconnecté", "success", "Accueil.php");



    
    ViewTemplate::footer();
    ViewTemplate::scriptJs();
    ?>




