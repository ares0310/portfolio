<?php

require_once "../view/ViewInscription.php";
require_once "../view/ViewTemplate.php";
require_once "../model/ModelInscription.php";
require_once "../view/ViewTest.php";
require_once "../view/ViewLogin.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1  shrink-to-fit=no" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/all.min.css" />
    <link rel="stylesheet" href="../../css/styles.css" />
    <title>HTML</title>
</head>

<body>
    <?php
    ViewTemplate::menu();
    // session_start();

    if (isset($_POST["connexion"])) {
        // $verif = password_hash($_POST['password'],  PASSWORD_DEFAULT );
        // var_dump($verif);
        var_dump($_POST["mail"]);
        $table = Login::getEmail($_POST['mail']);
        if (isset($table["mail"])) {
            var_dump($table['password']);
            echo "Ok";
            if(password_verify($_POST["password"], $table["password"])){
                ViewTemplate::alert("Connexion effectuée", "primary", "Accueil.php");
            } else {
                ViewTemplate::alert("Connexion impossible", "danger", "Accueil.php");
            }
        } else {
            ViewTemplate::alert("Connexion Impossible", "danger", "Accueil.php");
        }
    } else {
        ViewLogin::connexionForm();
    }
    ViewTemplate::footer();
    ?>




    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script> 
    
    
</body>

</html>