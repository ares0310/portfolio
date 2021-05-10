<?php
require_once "../view/ViewUser.php";
require_once "../view/ViewTemplate.php";
require_once "../model/ModelUser.php";
require_once "../model/ModelTypeRef.php";
require_once "../view/ViewTypeRef.php"

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
        if(ModelTypeRef::infoTypeRef($_GET["id"])){
            ViewTypeRef::modifTypeRef($_GET["id"]);
            
        } else {
            ViewTemplate::alert("Le type ref n'est pas trouvé", "danger", "listeTypeRef.php");
        }

    } else {
        if(isset($_POST["modif"])){
            if(isset($_POST["id"])&& ModelTypeRef::infoTypeRef($_POST["id"])){
                ModelTypeRef::modifTypeRef($_POST["id"], $_POST["type_ref"], $_POST["support"]);
                ViewTemplate::alert("GG", "success", "listeTypeRef.php");
            } else {
                ViewTemplate::alert("Donnée transmise fausse", "danger", "listeTypeRef.php");
            }
        } else {
            ViewTemplate::alert("Aucune donnée transmise", "danger", "listeTypeRef.php");
        }
    }

    // METHODE TAYI
    // if(isset($_POST["modif"])){
    //     ModelTypeRef::modifTypeRef($_POST["id"], $_POST["type_ref"], $_POST["support"]);
    //     ViewTemplate::alert("GG", "success", "listeTypeRef.php");
    // } else{ 
    //     if(isset($_GET["id"])){
    //         if(ModelTypeRef::infoTypeRef($_GET["id"])){
    //             ViewTypeRef::modifTypeRef($_GET["id"]);
    //         } else {
    //             ViewTemplate::alert("Le type ref n'est pas trouvé", "danger", "listeTypeRef.php");
    //         }
    //     } else {
    //         ViewTemplate::alert("Aucune donnée transmise", "danger", "listeTypeRef.php");
    //     }
    // }
    ViewTemplate::footer();
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>

</html>