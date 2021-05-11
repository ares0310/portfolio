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
    <div class="alert alert-primary text-center" role="alert">
        Bienvenue dans PHP
    </div>
    <?php

    require_once '../model/ModelComp.php';
    require_once '../view/ViewComp.php';
    require_once '../view/viewTemplate.php';


    if (isset($_POST['ajout'])) {
      
            ModelComp::ajoutComp($_POST['nom'], $_POST['domaine'], $_POST['description'], $_POST['niveau']);
            viewTemplate::alert('Votre compétence à bien été ajouté', 'primary', 'listeComp.php');
        }
     else {

        ViewComp::ajoutComp();
    
    }

    ?>








    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script>
</body>

</html>