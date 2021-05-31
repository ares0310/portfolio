

    
    <?php
    session_start();
    require_once "../model/modelUser.php";
    require_once "../view/viewUser.php";
    require_once "../view/viewTemplate.php";
    ViewTemplate::docType();
    ViewTemplate::navBar();
    ViewTemplate::marginTop();
?>
<h1>Accueil</h1>
<?php
    ViewTemplate::footer();
    ViewTemplate::scriptJs();


    

    ?>







    
