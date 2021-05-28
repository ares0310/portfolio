
    <?php
        session_start();

    require_once "../model/modelUser.php";
    require_once "../view/viewUser.php";
    require_once "../view/viewTemplate.php";
    ViewTemplate::docType();
    ViewTemplate::navBar();
    ViewTemplate::marginTop();
    if(isset($_POST["change"])){
        if(ModelUser::getEmail($_POST["mail"])){
            $token = uniqid();
            ModelUser::tokenReset($_POST["mail"], $token);
            ViewTemplate::alert("Mail trouvé, pour changer votre mot de passe", "success", "changementMdp.php?mail=" . $_POST["mail"] . "&token=" . $token);
        } else {
            ViewTemplate::alert("Mail introuvable", "danger", "accueil.php");
        }
    } else {
        ViewUser::reset();
    }
    ViewTemplate::footer();
    ViewTemplate::scriptJs()
    ?>