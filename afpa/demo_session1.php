<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <!-- <link rel="stylesheet" href="css/styles.css" /> -->
  <link rel="stylesheet" href="css/maquette9.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

  <title>modele</title>
</head>

<body>
  <?php
  $_SESSION["nom"] = "LeDuc";
  $_SESSION["prenom"] = "Adrien";
  $_SESSION["adresse"] = "1, rue du test";
  ?>
  <p>Session créée</p>
  <a href="demo_session2.php">Affichage</a>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/all.min.js"></script>
  <script src="js/slick.js"></script>
  <script>
    $(document).ready(function() {
      alert("hello world")
    })
  </script>
</body>

</html>