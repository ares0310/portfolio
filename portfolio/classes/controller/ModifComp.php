<?php
require_once "../view/ViewUser.php";
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
    require_once '../view/ViewComp.php';
    require_once '../view/ViewTemplate.php';
    require_once '../model/ModelComp.php';

    ViewTemplate::menu();

    // if (isset($_GET['id'])) {
    //     echo "lol";
    //     if (ModelComp::afficheID($_GET['id'])) {
            
    //         ViewComp::modifComp($_GET['id']);
    //         echo "123";
    //     } else {
    //         ViewTemplate::alert("La reference n'existe pas.", "danger", "ListeRef.php");
    //     }
    // } else {
        
    //     if (isset($_POST['modif'])) {
    //         echo "jfoizhgiujdilghedgjoi";
    //         if (isset($_POST['id']) && ModelComp::afficheID($_POST['id'])) {
    //             echo "1878787";
                // ModelComp::ModifComp($_POST["id"],$_POST['nom'], $_POST['domaine'], $_POST['description'], $_POST['niveau']);
    //             ViewTemplate::alert("Modif faite avec succès.", "success", "ListeRef.php");
    //         } else {
               
    //             ViewTemplate::alert("Aucune donnée n'a été transmise..", "danger", "ListeRef.php");
    //         }
    //     } else
    //         ViewTemplate::alert("Aucune donnée n'a été transmise...", "danger", "ListeRef.php");
    // }
    if(isset($_POST["modif"])){
        ModelComp::modifComp($_POST["id"],$_POST['nom'], $_POST['domaine'], $_POST['description'], $_POST['niveau']);
    } else {
        echo "erreur";
    }
   




    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script>
    <script src="../../js/ctrl2.js"></script>
</body>

</html>