
    
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
    if(isset($_GET["id"])){
        if(ModelTypeBien::getTypeBienById($_GET["id"])){
            ViewTemplate::alert("Libelle supprimé", "success", "listeTypeBien.php");
            ModelTypeBien::supprTypeBien($_GET["id"]);
        } else {
            ViewTemplate::alert("Type bien introuvable", "danger", "accueil.php");
        }
    } else {
        ViewTemplate::alert("Un problème est survenu", "danger", "accueil.php");
    }
    ViewTemplate::marginTop();
    ViewTemplate::footer();
    ViewTemplate::scriptJs();
    ?>
