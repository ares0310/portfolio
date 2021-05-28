
    
    <?php

    require_once "../model/modelUser.php";
    require_once "../view/viewUser.php";
    require_once "../view/viewTemplate.php";
    ViewTemplate::docType();
    ViewTemplate::navBar();
    ViewTemplate::marginTop();

    ViewTemplate::alert("Vous vous êtes inscrit avec succès", "success", "accueil.php");
    var_dump($_GET["mail"]);
    if(isset($_GET["mail"]) && isset($_GET["token"])){
        // model confirme
        ModelUser::confirmation($_GET["mail"], $_GET["token"]);
    } else {
        ViewTemplate::alert("Confirmation impossible", "danger", "accueil.php");
    }

    ViewTemplate::footer();
    ViewTemplate::scriptJs();
    ?>
