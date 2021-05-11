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

    if (isset($_POST['supp']))

    {

        ModelComp::suppComp($_GET['id']);

        ViewTemplate::alert('success', 'suppression effectue', 'listeComp.php');
    }

    else 

    {
        if (isset($_GET['id']))
        {
            if (ModelComp::afficheID($_GET['id'])) 
            {
                ModelComp::suppComp($_GET['id']);

                ViewTemplate::alert('success', 'suppression effectue', 'listeComp.php');
            }

            else 
            {
                ViewTemplate::alert("danger", "cet id n'existe pas", "listeComp.php");
            }
        }
        else {
            ViewTemplate::alert('danger', 'erreur de donnees', 'listeComp.php');
        }
    }



    ?>



    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>

</html>