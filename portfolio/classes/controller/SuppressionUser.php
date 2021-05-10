<?php
require_once "../view/ViewUser.php";
require_once "../view/ViewTemplate.php";
require_once "../model/ModelUser.php"

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
    if (isset($_GET['id'])) {
        if (ModelUser::infoUsers($_GET['id'])) {
            ModelUser::SuppressionUser($_GET['id']); //--- commenté pour pas polluer la bdd
            ViewTemplate::alert("Succès", "success", "ListeUsers.php");
        } else {
            ViewTemplate::alert("L'utilisateur n'existe pas.", "danger", "ListeUsers.php");
        }
    } else {
        ViewTemplate::alert("L'utilisateur n'existe pas.", "danger", "ListeUsers.php");
    }

    ViewTemplate::footer();
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script>
</body>

</html>