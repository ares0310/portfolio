
    
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
            modelTypeBien::modifTypeBien($_POST["valider"],$_POST["libelle"]); // $_POST[]--> value DONC champ de form
            ViewTemplate::alert("done", "dd", "listeTypeBien.php");
            var_dump($_POST["valider"]);
        } else {
            echo "vide";
        }
    }
    else {
        ViewTypeBien::modifTypeBien();
    }
    

    ViewTemplate::marginTop();
    ViewTemplate::footer();
    ViewTemplate::scriptJs();
    ?>
