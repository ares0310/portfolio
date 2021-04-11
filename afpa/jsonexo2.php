  <!-- Exercice tri tableau multidimensionnel -->
  <?php
  $jsonData =
    '[
      {"nom":"ballon","description":"un ballon","prix":25, "categ":"jouets"},
      {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique"},
      {"nom" : "tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie"},
      {"nom" : "aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager"}
  ]';

  $newTab = json_decode($jsonData, true);
  // $newTab2 = array_column($newTab, 'prix');
  // array_multisort($newTab2, SORT_ASC, $newTab);

  // 2EME METHODE
  function tri($elem1, $elem2)
  {
    if ($elem1['prix'] == $elem2['prix']) return 0;
    return ($elem1['prix'] > $elem2['prix']) ? 1 : -1;
  }
  usort($newTab, 'tri');
  // https://www.w3schools.com/php/func_array_uasort.asp
  //  la différence entre usort et uasort: le premier redéfini l'indexation, la deuxieme garde les index des sous tableau


  foreach ($newTab as $produit) {
    echo $produit["nom"] . "<br>";
    echo $produit['description'] . "<br>";
    echo $produit['prix'] . "<br>";
    echo $produit['categ'] . "<br><br>";
  }

  ?>