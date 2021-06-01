
    
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
    
    if(isset($_POST["valider"])){
        if($_POST["libelle"]){
            ViewTemplate::alert("Libelle ajouté", "success", "listeTypeBien.php");
            ModelTypeBien::creationTypeBien($_POST["libelle"]);
        } else {
            ViewTemplate::alert("Champ vide", "danger", "accueil.php");
        }
    } else {
        ViewTypeBien::typeBienForm();
    }
    ViewTemplate::marginTop();
    ViewTemplate::footer();
    ViewTemplate::scriptJs();
    ?>
