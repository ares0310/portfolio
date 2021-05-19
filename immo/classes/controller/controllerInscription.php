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

    require_once "../model/modelInscription.php";
    require_once "../view/viewInscription.php";
    require_once "../view/viewTemplate.php";
    ViewTemplate::menu();
    if(isset($_POST["valider"])){
        Login::inscription($_POST["nom"], $_POST["prenom"], $_POST["mail"], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST["tel"], 0, 0, 0, rand(10000, 99999));
        
        ViewTemplate::alert("Inscription faite avec succès, pour continuer", "success", "confirmationMail.php");
    }else{
        ViewInscription::inscriptionForm();
    }

    

    ?>








    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script>
</body>

</html>