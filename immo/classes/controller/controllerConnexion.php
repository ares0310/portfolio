
    
    <?php
    session_start();
    require_once "../model/modelUser.php";
    require_once "../view/viewUser.php";
    require_once "../view/viewTemplate.php";
    require_once "../utils/utils.php";

    // ViewTemplate::menu();
    ViewTemplate::docType();

    ViewTemplate::navBar();

    ViewTemplate::marginTop();
    if (isset($_POST["connexion"])) {
        $table = ModelUser::getEmail($_POST["mail"]);

        if ($table["mail"]) {

            if (password_verify($_POST["password"], $table["pass"])) {

                if ($table["actif"] == 1 && $table["confirme"] == 1) {
                    // model objet
                    $dataUser = new ModelUser($table["id"]);
                    $_SESSION["id"] = $dataUser->getData("id");
                    $_SESSION["role"] = $dataUser->getData("role");
                    $_SESSION["nom"] = $dataUser->getData("nom") . " " . $dataUser->getData("prenom");
                    header("Refresh:3; url = accueil.php");

                    ViewTemplate::alert("Connexion effectuée", "primary", "Accueil.php");
                } else {
                    
                    ViewTemplate::alert("Compte inactif ou pas confirmé", "danger", "confirmationMail.php");
                }
            } else {
                
                ViewTemplate::alert("Mail ou mot de passe incorrect", "danger", "controllerConnexion.php");
            }
        } else {
            
            ViewTemplate::alert("Connexion Impossible car mail introuvable", "danger", "Accueil.php");
        }
    } else {
        ViewUser::connexionForm();
    }
    ViewTemplate::footer();
    ViewTemplate::scriptJs();
    ?>
