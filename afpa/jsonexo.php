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
      {"nom":"ballon","description":"un ballon","prix":25, "categ":"jouets"},
      {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique"},
      {"nom" : "tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie"},
      {"nom" : "aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager"}
  ]';
  ?>
  <?php
  $phpTab = (json_decode($jsonData, true));
  $phpTab->asort();
  foreach ($phpTab as $id => $position) {
  ?>
    <div class="card-body">
      <h5 class="card-title"><?php echo $position["nom"] ?></h5>
      <p class="card-text"><?php echo $position["description"] ?></p>
      <p class="card-text"><?php echo $position["prix"] ?></p>
      <p class="card-text"><?php echo $position["categ"] ?></p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  <?php
  };
  ?>
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