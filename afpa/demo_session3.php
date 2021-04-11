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
// destroy the session
session_destroy();
header('Location: http://localhost:8888/demo_session1.php');
  exit();
?>
</body>

</html>