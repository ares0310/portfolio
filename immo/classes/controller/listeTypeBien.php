
    
    <?php
    session_start();
    require_once "../model/modelUser.php";
    require_once "../view/viewUser.php";
    require_once "../view/viewTemplate.php";
    require_once "../utils/utils.php";
    require_once "../view/viewTypeBien.php";
    require_once "../model/modelTypeBien.php";

    ViewTemplate::docType();
    ViewTemplate::navBar();
    ViewTemplate::marginTop();
    
    ViewTypeBien::listeTypeBien();

    ViewTemplate::marginTop();

    ViewTemplate::footer();
    ViewTemplate::scriptJs();
    ?>
