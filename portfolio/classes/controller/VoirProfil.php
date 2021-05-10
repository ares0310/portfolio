<?php
require_once "../view/ViewUser.php";
require_once "../view/ViewTemplate.php";
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
    ?>
    <h1>Profil de l'utilisateur:</h1>
    <p>Id:<?php echo $_GET["id"] ?></p>

    <?php
    /*
    <!-- exo dans le controller voirprofil, il faut afficher les données relatives à l utilisateur dont 
    l'id est transmis en param get sinon une alerte (composant BS) qui dit que le param n'a pas été transmis -->
    */
    
    // if(isset($_GET["id"])){
    //     ViewUser::infoUsers($_GET["id"]);
    // } else {
    //     echo "nope";
    // }


    
    // if (isset($_GET["id"]) && ModelUser::infoUsers($_GET["id"])) {
    //     ViewUser::infoUsers($_GET["id"]);
    // } else {
    // 
    //     <div class="alert alert-dark" role="alert">
    //         NOPE
    //     </div>
    // 

    // }
        if(isset($_GET["id"])){
            if(ModelUser::infoUsers($_GET["id"])){
                ViewUser::infoUsers($_GET["id"]);
            } else {
                ViewTemplate::alert("L'id n'existe pas", "danger", "listeUsers.php");
            }
        } else {
            
            ViewTemplate::alert("L'utilisateur n'existe pas", "danger", "listeUsers.php");
        
        }
        ?>

        <br>
        <?php


        ViewTemplate::footer();
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>

</html>