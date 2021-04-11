<?php
// include "voiture.php";
// echo "<br>";
// echo Voiture::$nbObj;
// echo "<br>";
// $mercedes = new Voiture(4,"black","S500", "AMG");


// echo Voiture::$nbObj;

// $mercedes = new Voiture(4,"black","S500", "AMG");

// echo "<br>";
// echo Voiture::$nbObj; // static ----> "::" -> très important

// $dacia = new Voiture(4,"verte", "dacia", "renault"  );
//   echo $dacia->tableauVoiture();
//    Voiture::nombreVoiture();
// include "vehicule.php";
// $kawasaki = new Moto (2, "orange", "Kawasaki", "hybride");
// $kawasaki->messageParent();
// $kawasaki->message();


require_once 'connexion.php';

$idcon = connexion();
// var_dump($idcon);

$requete = "SELECT * FROM clients ORDER BY nom";
$result = $idcon->query($requete);      // query methode - idcon - intermediaire entre nous et serveur
$count = $result->rowCount();
// var_dump($count);
// egalement on peut connaitre le nb de colonnes obtenues
// $colcount = $result->columnCount();
// echo "<br>";
// var_dump($colcount);
// echo "<br>";

// ex  1 - dans le fichier test, faire une requete (préparée) qui retourne la liste des clients dont l'age est > 18 ans de la table clients
// afficher le nombre des lignes retournées
// $age = 18;
// $requete1 = $idcon->prepare("SELECT * FROM clients WHERE age > :age");
// $requete1->execute([':age' => $age]);
// $count1 = $requete1->rowCount();
// if ($count1 > 0) {
//     while ($row = $requete1->fetch(PDO::FETCH_ASSOC)) {
//       echo "nom: " . $row["nom"] . " " . $row["prenom"] . "<br>";
//     }
//   } else {
//     echo "0 results";
//   }

// var_dump($count1);

// 2eme methode de parcours de données
// if ($count1 > 0) {
//   $clients= $requete1->fetchAll();
//   foreach ($clients as $client) {
//     echo $client['nom'] . '<br />';
//  }
// } else {
//   echo "0 results";
// }
// var_dump($count1);
$dep = "Nord";
$requete2 = $idcon->prepare("SELECT * FROM departement WHERE departement_nom =:dep");
$requete2->execute([":dep" => $dep]);
$count2 = $requete2->rowCount();
if ($count2 > 0){
      $departement= $requete2->fetch();
  
    echo $departement['departement_id'] . " " . $departement['departement_code'] ." " . $departement["departement_nom"] . '<br />';
 
} else {
  echo "0 results";
}

// AVEC LA BOUCLE
// $dep = "Nord";
// $requete2 = $idcon->prepare("SELECT * FROM departement WHERE departement_nom =:dep");
// $requete2->execute([":dep" => $dep]);
// $count2 = $requete2->rowCount();
// if ($count2 > 0){
//       $clients= $requete2->fetchAll();
//   foreach ($clients as $client) {
//     echo $client['departement_id'] . " " . $client['departement_code'] . '<br />';
//  }
// } else {
//   echo "0 results";
// }
// var_dump($count2);

// MEME EXERCICE MAIS AVEC FONCTION
function listeDep($nomDep){
  $dep = "%$nomDep%";
  $idcon = connexion();
  // global $idcon; // preferable de ne pas la rendre global et appeler fonction connexion() à part
$requete2 = $idcon->prepare("SELECT * FROM departement WHERE departement_nom LIKE :dep"); // :dep - pour se proteger contre injection hacker
$requete2->execute([":dep" => $dep]);
$count2 = $requete2->rowCount();
if ($count2 > 0){
      $departements= $requete2->fetchAll();
      foreach ($departements as $departement) {
    echo $departement['departement_id'] . " " . $departement['departement_code'] ." " . $departement["departement_nom"] . '<br />';
      }
} else {
  echo "0 results";
}
}

listeDep("haute");



// include "protectedClass.php";
// $bmw = new Voiture(4, "blue", "M5", "BMW");

// echo $bmw -> getCouleur();
