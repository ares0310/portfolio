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

  <!-- 
ex 2 - reprendre la solution de yassine et reproduire le meme resultat mais dans UN SEUL fichier selon le mecanisme suivant :
si le formulaire n'a pas été soumis, on affiche le form, sinon on affiche les données du post -->
  <?php
  if (isset($_POST["valider"])) {       // $_POST = variable ------ "valider" se réfère à name de submit
  ?>

    Name: <?php echo $_POST["name"]; ?><br>
    Prenom: <?php echo $_POST["prenom"]; ?><br>
    Adresse: <?php echo $_POST["adresse"]; ?><br>
    Age: <?php echo $_POST["age"]; ?><br>
    E-mail: <?php echo $_POST["email"]; ?><br>
    Ville: <?php echo $_POST["ville"]; ?><br>
    CP : <?php echo $_POST["cp"]; ?><br>
  <?php
  } else {
  ?>
    <form class="container" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      Name: <input type="text" name="name"><br>
      Prenom: <input type="text" name="prenom"><br>
      Adresse: <input type="text" name="adresse"><br>
      Age: <input type="number" name="age"><br>
      E-mail: <input type="email" name="email"><br>
      Ville: <input type="text" name="ville"><br>
      CP : <input type="number" name="cp"><br>
      <input type="submit" name="valider" value="valider">
    </form>
  <?php
  }
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