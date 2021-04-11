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
  <!-- <?php
        // $tab = [
        //   "1" => ["james", "bond", "@james_bon"],
        //   "2" => ["philippe", "Girard", "@phil"],
        //   "3" => ["Tony", "Blair", "@tony"],
        //   "4" => ["youssef", "Ben issa", "@youss59dz"],
        //   "5" => ["rayen", "hidri", "@rayoo_tn"]
        // ];
        ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
     <?php
      // foreach ($tab as $cle => $personne) {
      // 
      ?> 
        <tr>
          <th scope="row"><?php echo $cle  ?></th>
          <td><?php echo $personne[0] ?></td>
          <td><?php echo $personne[1] ?></td>
          <td><?php echo $personne[2] ?></td>
        </tr>
      <?php
      // }

      ?>

    </tbody>
    
  </table> -->


  <!-- EXERCICE CARD + PHP -->
  <!-- <?php
        // $produits = [
        //   "1" => ["Orange", "Une orange est un agrume comestible qui vient de l'oranger et qui a une couleur jaune", "src='/images/fruit.jpg'"],
        //   "2" => ["Orange", "Une orange est un agrume comestible qui vient de l'oranger et qui a une couleur jaune", "src='/images/fruit.jpg'"],
        //   "3" => ["Orange", "Une orange est un agrume comestible qui vient de l'oranger et qui a une couleur jaune", "src='/images/fruit.jpg'"],
        //   "4" => ["Orange", "Une orange est un agrume comestible qui vient de l'oranger et qui a une couleur jaune", "src='/images/fruit.jpg'"]
        // ];
        ?> -->
  <!-- <div class="container-fluid">
  <div class="row"> -->
  <?php
  // foreach ($produits as $id => $produit) {
  ?>
  <!-- <div class="card" style="width: 18rem;"> -->
  <!-- <img <?php /* echo $produit[2] */ ?> class="card-img-top" alt="..."> -->
  <!-- <div class="card-body">
        <h5 class="card-title"> <?php /* echo $produit[0] */ ?> </h5>
        <p class="card-text"> <?php /* echo $produit[1] */ ?> </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div> -->
  <?php
  // }
  ?>
  <!-- </div>
  </div> -->

  <!-- EXERCICE affichage weekend -->
  <?php
  /*
  function weekend()
  {
    //     $debut = strtotime("first Saturday of this month");
    //     $fin = strtotime("last Saturday of this month");
    //   while ($debut <= $fin) {
    //     $samedi=strtotime("Saturday", $debut);
    //     $dimanche=strtotime("Sunday", $debut);
    //     echo date("M d", $samedi) . " ";
    //     echo date("M d", $dimanche) . "<br>";
    //     $debut =strtotime("+1 week", $debut);
    //   }
    // }

    $deb = strtotime("first Saturday of this month");
    $dim = strtotime("first Sunday of this month");
    $fin = strtotime("last day of this month", $deb);

    while ($deb < $fin) {

      echo date("d M Y", $deb) . "<br>";
      echo date("d M Y", $dim) . "<br>";
      $deb = strtotime("+1 week", $deb);
      $dim = strtotime("+1 week", $dim);
    }
  }


  echo weekend();
  */

  ?>

  <?php
  function anbissextile($annee){
    $number = cal_days_in_month(CAL_GREGORIAN, 2, $annee);
    if($number === 29){
      echo "l'année est bissextile";
    } else {
      echo "l'année n'est pas bissextile";
    }
  }
  echo anbissextile(2015);
  
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