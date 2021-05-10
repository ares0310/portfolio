<?php
require_once "../view/ViewInscription.php";
require_once "../view/ViewTemplate.php";
require_once "../model/ModelInscription.php";
require_once "../view/ViewTest.php";
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


    if(isset($_POST["valider"])){
        
        Login::inscription($_POST["mail"], password_hash($_POST['password'], PASSWORD_DEFAULT));
        var_dump($_POST["password"]);
        ViewTemplate::alert("Inscription validée", "primary", "inscription.php");
    } else {
        ViewInscription::inscriptionForm();
    }
    

    ViewTemplate::footer();
    ?>




    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script> 
    
    
</body>

</html>