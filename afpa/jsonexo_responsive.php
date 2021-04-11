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
  $jsonData =
    '[
      {"nom":"ballon","description":"un ballon","prix":25, "categ":"jouets", "image":"fruit.jpg"},
      {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique", "image":"fruit.jpg"},
      {"nom" : "tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie", "image":"fruit.jpg"},
      {"nom" : "aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager", "image":"fruit.jpg"}
  ]';
  ?>
  <div class="container">
    <div class="row">
      <?php
      $phpTab = (json_decode($jsonData, true));
      foreach ($phpTab as $id => $position) {
      ?>
        <div class="card col-md-3 col-sm-6 col-12">
          <img src="images/<?php echo $position["image"] ?>" />
          <h5 class="card-title"><?php echo $position["nom"] ?></h5>
          <p class="card-text"><?php echo $position["description"] ?></p>
          <p class="card-text"><?php echo $position["prix"] ?></p>
          <p class="card-text"><?php echo $position["categ"] ?></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      <?php
      };
      ?>
    </div>
  </div>
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