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
  <form class="container" action="trt_form.php" method="post">
    <div class="form-group">
      <label for="nom">nom</label>
      <input type="text" class="form-control" id="nom" name="name">
    </div>
    <div class="form-group">
      <label for="prenom">prenom</label>
      <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
    <div class="form-group">
      <label for="adresse">adresse</label>
      <input type="text" class="form-control" id="adresse" name="adresse">
    </div>
    <div class="form-group">
      <label for="age">age</label>
      <input type="number" class="form-control" id="age" name="age" min="0" max="100">
    </div>
    <div class="form-group">
      <label for="mail">email</label>
      <input type="email" class="form-control" id="mail" name="mail">
    </div>
    <div class="form-group">
      <label for="ville">ville</label>
      <input type="text" class="form-control" id="ville" name="ville">
    </div>
    <div class="form-group">
      <label for="postal">code postal</label>
      <input type="number" class="form-control" id="postal" name="cp">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>

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