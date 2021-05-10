<?php
require_once("../view/ViewUser.php");
    require_once("../model/ModelUser.php");
    require_once("../Utilsa/Utilsa.php");
    require_once("../view/ViewTemplate.php");
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
    if (isset($_POST['valider'])) {
        $donnees = [$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['tel'], $_POST['adresse'], $_POST['description']];
        var_dump($_POST["nom"]);
        $types = [ "nom", "prenom", "email", "tel", "non", "non"];      // vérification - adresse et description n'ont aucune vérification à faire

        $data = Utilsa::valider($donnees, $types);

        if ($data) {
            $extensions = ["jpg", "jpeg", "png", "gif"];
            $upload = Utilsa::upload($extensions, $_FILES['fichier']);
            if ($upload['uploadOk']) {
                $file_name = $upload['file_name'];
                ModelUser::ajoutUser($data[0], $data[1], $data[2], $data[3], $data[4], $file_name, $data[5]);       // respecter l'ordre depuis ModelUser
                ViewTemplate::alert("Les données sont insérées avec succès", "success", "listeusers.php");
            } else {
                ViewTemplate::alert($upload['errors'], "danger", htmlspecialchars($_SERVER['PHP_SELF']));
            }
        } else {
            ViewUser::ajoutUser();
        }
    } else {
        ViewUser::ajoutUser();
    }

    ViewTemplate::footer();
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    
</body>

</html>