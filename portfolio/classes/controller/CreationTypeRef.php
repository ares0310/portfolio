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
    require_once("../model/ModelTypeRef.php");
    require_once("../view/ViewTypeRef.php");

    ViewTemplate::menu();
    
    
    if(isset($_POST["valider"])){
        ModelTypeRef::ajoutTypeRef($_POST["type_ref"], $_POST["support"]);
        ViewTemplate::alert("Type Ref ajouté","primary","listeTypeRef.php");
    }else{
        ViewTypeRef::ajoutTypeRef();
    }
    
    
    ViewTemplate::footer();
    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>

</html>