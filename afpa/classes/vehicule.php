
<?php
// créer une classe Vehicule (dans un fichier à part sous afpa/classes)
// qui a 4 attributs protégés : nbRoues, couleur, marque, modele
class Vehicule
{
    protected $nbRoues;
    protected $couleur;
    protected $marque;
    protected $modele;
    // un constructeur 
    public function __construct($nbRoues, $couleur, $marque, $modele)
    {
        $this->nbRoues = $nbRoues;
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
    }
    // et une methode qui affiche ce message
    // "je suis la classe Vehicule"
    public function message()
    {
        echo "je suis la classe Vehicule";
        echo "<br>";
    }
    
}

class Moto extends Vehicule
{
    private $volume;
    function getVolume(){
        return $this->volume;
    }
    function setVolume($volume)
    {
        $this->nbRoues = $volume;
        return $this;
    }

    public function message()
    {
        echo "je suis la classe Moto" . "<br>";
    }
    public function messageParent(){
        echo "je suis la classe Parent" . "<br>";
        Parent::message();
    }
}
?>