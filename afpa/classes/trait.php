<?php

// créer un trait qui s'appelle Affichage et qui contient une fonction affichTrait() qui affiche "je suis un trait"
trait Affichage {
    public function afficheTrait(){
        echo "je suis un trait";
        // return $tab -> et mettre $tab en parametres.
    }
}

// créer une classe utilisTrait qui contient une fonction affichClasse() qui affiche "affichge de classe"
class TestTrait{
    use Affichage;
    public function afficheClasse(){
        echo "fonction affiche classe";
        // return 'fonction affiche classe'.$this->afficheTrait('affiche trait');
    }
}

// instancier la classe  utilisTrait et appliquer les méthodes affichTrait et affichClasse
$test = new TestTrait();
$test->afficheClasse();
echo "<br>";
$test->afficheTrait();


?>