<?php
require_once '../view/ViewTemplate.php';
require_once "../model/ModelEtab.php";
require_once "../view/ViewEtab.php";

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
    if(isset($_GET["id"])){
        if(ModelEtab::getEtabId($_GET["id"])){
            ModelEtab::supprEtab($_GET["id"]);
            ViewTemplate::alert("Suppression fait avec succès", "success", "ListEtab.php");
        } else {
            ViewTemplate::alert("L'établissement n'existe pas", "danger", "ListEtab.php");
        }
    }else{
        ViewTemplate::alert("Aucune donnée transmise", "danger", "ListEtab.php");
    }
    ViewTemplate::footer();
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl3.js"></script>
</body>

</html>