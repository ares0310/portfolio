<?php
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
require_once ROOT_DIR . "/classes/view/ViewUser.php";
require_once ROOT_DIR . "/classes/view/ViewTemplate.php";
require_once ROOT_DIR . "/classes/model/ModelUser.php";
require_once ROOT_DIR . "/classes/Utilsa/Utilsa.php";

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
            ViewUser::modifUser($_GET['id']);
        } else {
            ViewTemplate::alert("L'utilisateur n'existe pas.", "danger", "ListeUsers.php");
        }
    } else {
        if (isset($_POST['modif'])) {
            if (isset($_POST['id']) && ModelUser::infoUsers($_POST['id'])) {
                $donnees = [$_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['tel'], $_POST['adresse'], $_POST['photo'], $_POST['description']];
                $types = ["id",          "nom",         "prenom",         "email",          "tel",          "non",          "photo",             "non"];
                $data = Utilsa::valider($donnees, $types);
                if ($data) {
                    $file_name = $data[6];

                    if (!empty($_FILES['fichier']['name'])) {
                        $extensions = ["jpg", "jpeg", "png", "gif"];
                        $upload = Utilsa::upload($extensions, $_FILES['fichier']);
                        if ($upload['uploadOk']) {
                            $file_name = $upload['file_name'];

                            if (file_exists(ROOT_DIR . "/photos/$data[6]")) {
                                unlink(ROOT_DIR . "/photos/$data[6]");
                            }
                        } else {
                            ViewTemplate::alert($upload['errors'], "danger", htmlspecialchars($_SERVER['PHP_SELF']));
                        }
                    }
                    ModelUser::modifUser($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $file_name, $data[7]);
                    ViewTemplate::alert("La modification a été faite avec succès.", "success", "listeUsers.php");
                } else {
                    
                    ViewUser::modifUser($donnees[0]);
                }
            } else {
                ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "listeUsers.php");
            }
        } else {
            ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "listeUsers.php");
        }
    }
    ViewTemplate::footer();
    ?>




    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script>
    
    <script>

    </script>
</body>

</html>