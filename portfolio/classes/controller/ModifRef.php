<?php
require_once "../view/ViewTypeSoc.php";
require_once "../view/ViewTemplate.php";
require_once "../model/ModelTypeRef.php";
require_once "../view/ViewTypeRef.php";
require_once "../view/ViewRef.php";
require_once "../model/ModelRef.php";
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
            if(ModelRef::getReferenceById($_GET["id"])){
                ViewRef::modifReference($_GET["id"]);
            } else {
                ViewTemplate::alert("La référence n'existe pas.", "danger", "ListeRef.php");
            }
        } else {
            if(isset($_POST["modif"])){
                if(isset($_POST["id"])&&ModelRef::getReferenceById($_POST["id"])){
                    ModelRef::modifRef($_POST['id'], $_POST['type_ref_id'], $_POST['nom'], $_POST['techno'], $_POST['contributeurs'], $_POST['lien']);
                    ViewTemplate::alert("Modif faite avec succès.", "success", "ListeRef.php");
                } else {
                    ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeReferences.php");
                }
            } else
            ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeReferences.php");
        }
        ViewTemplate::footer();
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>

</html>
