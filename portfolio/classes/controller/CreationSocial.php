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
    require_once("../view/ViewSocial.php");
    require_once("../model/ModelUser.php");
    require_once("../model/ModelSocial.php");
    require_once("../view/ViewTemplate.php");
    ViewTemplate::menu();
    
    
    if(isset($_POST["ajout"])){
        ModelSocial::ajoutSocial(10,$_POST["type_soc_id"],$_POST["lien"]);
        ViewTemplate::alert("RS ajouté","primary","listeTypeSoc");
        
    } else {
        ViewSocial::ajoutSocial();
    }
    
    
    ViewTemplate::footer();
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>

</html>