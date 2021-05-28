
    
    <?php
        session_start();

    require_once "../model/modelUser.php";
    require_once "../view/viewUser.php";
    require_once "../view/viewTemplate.php";
    require_once "../utils/utils.php";

    ViewTemplate::docType();
    ViewTemplate::navBar();
    ViewTemplate::marginTop();
    if (isset($_POST["valider"])) {

        $donnees = [$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'], $_POST['tel']];
        // var_dump($donnees);
        $types = ["nom", "prenom", "mail", "password", "tel"];
        $data = Utils::valider($donnees, $types);

        if ($data) {
            // si data est bon
            
            if (!ModelUser::getEmail($_POST["mail"])) {
                // (unicité) mail existe pas = success
                $token = uniqid();
                // ModelUser::inscription($_POST["nom"], $_POST["prenom"], $_POST["mail"], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST["tel"], 0, 0, 0, $token);
                ModelUser::inscription($data[0], $data[1], $data[2], password_hash($data[3], PASSWORD_DEFAULT), $data[4], 0, 0, 0, $token);
                
                ViewTemplate::alert("Inscription faite avec succès, pour valider votre compte", "success", "confirmationMail.php?mail=" . $_POST["mail"] . "&token=" . $token);
            } else {
                // msg mail existe pas, donc
                ViewTemplate::alert("Mail déjà pris", "danger", "controllerInscription.php");
            }
        } else {
            ViewTemplate::alert("Inscription impossible", "danger", "controllerInscription.php");
        }
    } else {
        ViewUser::inscriptionForm();
    }
    ViewTemplate::footer();
    ViewTemplate::scriptJs();


    

    ?>
