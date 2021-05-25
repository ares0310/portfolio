<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1  shrink-to-fit=no" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/all.min.css" />
    <link rel="stylesheet" href="../../css/styles.css" />
    <!-- <link rel="stylesheet" href="../../css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="../../css/all.min.css" />
    <!-- template ajout -->
    <link rel="stylesheet" href="../../css/style.css" /> 
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="../../photos/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../../photos/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Colors CSS -->
    <!-- <link rel="stylesheet" href="../../css/colors.css"> -->
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="../../js/modernizer.js"></script>
<!-- FIN template ajout -->
    
    <title>HTML</title>
</head>

<body>
    
    <?php

    require_once "../model/modelUser.php";
    require_once "../view/viewUser.php";
    require_once "../view/viewTemplate.php";
    require_once "../utils/utils.php";

    ViewTemplate::menu();
    if (isset($_POST["valider"])) {

        $donnees = [$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'], $_POST['tel']];
        // var_dump($donnees);
        $types = ["nom", "prenom", "mail", "password", "tel"];
        $data = Utils::valider($donnees, $types);

        if ($data) {
            // si data est bon
            
            if (!ModelUser::getEmail($_POST["mail"])) {
                // mail existe pas = success
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

    

    ?>








    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script>
    <!-- ALL JS FILES -->
    <script src="../../js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../../js/custom.js"></script>
    <script src="../../js/portfolio.js"></script>
    <script src="../../js/hoverdir.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
</body>

</html>