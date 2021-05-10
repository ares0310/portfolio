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
/*
    if (isset($_GET['id'])) {
        if (TypeSocial::infoTypeSoc($_GET['id'])) {
            ViewSoc::modifTypeSoc($_GET['id']);
        } else {
            ViewTemplate::alert("Le RS n'existe pas.", "danger", "ListeTypeSoc.php");
        }

        if (isset($_POST['modif'])) {
            if (isset($_POST['id']) && TypeSocial::infoTypeSoc($_POST['id'])) {
                TypeSocial::modifTypeSoc($_POST['id'], $_POST['type_soc']);
                ViewTemplate::alert("La modification a été faite avec succès.", "success", "ListeTypeSoc.php");
            } else {
                ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeSoc.php");
            }
        }
    } else {
        ViewTemplate::alert("Aucun id n'a été transmis.", "dark", "ListeTypeSoc.php");
    }
*/

if (isset($_GET['id'])) {
    if (ModelTypeSoc::infoTypeSoc($_GET['id'])) {
        ViewSoc::modifTypeSoc($_GET['id']);
    } else {
        ViewTemplate::alert("Le RS n'existe pas.", "danger", "ListeUsers.php");
    }
} else {
    if (isset($_POST['modif'])) {
        if (isset($_POST['id']) && ModelTypeSoc::infoTypeSoc($_POST['id'])) {
            ModelTypeSoc::modifTypeSoc($_POST['id'], $_POST['type_soc']);
            ViewTemplate::alert("La modification a été faite avec succès.", "success", "ListeTypeSoc.php");
        } else {
            ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeSoc.php");
        }
    } else {
        ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeSoc.php"); // si l'url est tapé manuellement
    }
}
    ViewTemplate::footer();
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>

</html>