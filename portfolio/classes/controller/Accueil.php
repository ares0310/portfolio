<?php
session_start();

require_once "../view/ViewInscription.php";
require_once "../view/ViewTemplate.php";
require_once "../model/ModelInscription.php";
require_once "../view/ViewTest.php";
require_once "../view/ViewAccueil.php";
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
    
    ViewAccueil::Accueil();
    if(isset($_SESSION["mail"])){
        // echo "bienvenu" . " " . $_SESSION["mail"];
             echo ("welcome: " . $_SESSION["mail"] . " <br>  <a style='color:white;' role='button' class='btn btn-danger' href='loginTest.php?type=Logout' >Logout</a> ");
             
    } else {
        echo "non";
    }
    
    ViewTemplate::footer();
    ?>




    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script> 
    
    
</body>

</html>