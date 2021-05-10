<?php
require_once "../view/ViewTypeSoc.php";
require_once "../view/ViewTemplate.php";
require_once "../model/ModelTypeSoc.php"

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
        if (ModelTypeSoc::infoTypeSoc($_GET['id'])) {
            ModelTypeSoc::SuppressionTypeSoc($_GET['id']);
            ViewTemplate::alert("RS supprimé avec succès", "success", "ListeTypeSoc.php");
        } else {
            ViewTemplate::alert("Le RS n'existe pas.", "danger", "ListeTypeSoc.php");
        }
    } else {
        ViewTemplate::alert("Le RS avec cet id n'existe pas.", "danger", "ListeTypeSoc.php");
    }

    ViewTemplate::footer();
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>

</html>