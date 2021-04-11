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
    <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
    </div>
    <i class="fas fa-address-book"></i>
    <?php
    require_once('../view/ViewUser.php');
    require_once("../model/ModelUser.php");
    // ViewUser::ajoutUser();      // pour appeler --> nomclasse - ensuite : : et fonction dans la classe
    // ModelUser::ajoutUser("Arsen", "Raziyev", "arsen@test.com", "0778777666", "arsen", "arsen", "arsen");
    ?>

    <!-- exo: dans le controller, on va tester si le form a été validé, 
    on appelle la methode d insertion, sinon on appelle la methode qui affiche le formulaire -->
    <?php
    if (isset($_POST["valider"])) {         // isset - teste si cette variable a une valeur
        ModelUser::ajoutUser($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['tel'], $_POST['adresse'], $_POST['photo'], $_POST['description']);
    ?>
        <div class="alert alert-primary" role="alert">
            TOUT EST COOL !
        </div>
    <?php
    } else {
        ViewUser::ajoutUser();
    }
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>

</html>