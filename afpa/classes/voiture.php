
<?php
class Voiture
{
    public $nbRoues;    // attribut 
    public $couleur;
    public $marque;
    public $modele;
    public static $nbObj = 0;


    // dans la classe Voiture, créer une fonction statique qui affiche un tab BS (vous pouvez utiliser un tab en dur)
    function tableauVoiture()
    { ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nombre de roue</th>
                    <th scope="col">couleur</th>
                    
                    <th scope="col">marque</th>
                    <th scope="col">modele</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo $this->nbRoues ?></td>
                    <td><?php echo $this->couleur ?></td>
                    
                    <td><?php echo $this->marque ?></td>
                    <td><?php echo $this->modele ?></td>
                </tr>

            </tbody>
        </table>
<?php
    }
    static function nombreVoiture()
    {
        echo "<h2>" . self::$nbObj . "</h2>";
    }

    // ex 1- fonction qui affiche le message : "on est dans la classe voiture"
    function message()
    {
        echo "on est dans la classe voiture";
    }
    // 2- fonction qui affiche les valeurs des attributs de la classe
    function attribut()
    {
        echo $this->marque . "<br>" . $this->couleur . "<br>" . $this->nbRoues . "<br>" . $this->modele;
    }
    // ex3 -  créer les methodes necessaires pour pouvoir modifier les attributs de la classe
    function setMarque($tab)
    {
        $this->marque = $tab;
        return $this;
    }
    function setCouleur($tab)
    {
        $this->couleur = $tab;
        return $this;
    }
    function setNbRoues($tab)
    {
        $this->nbRoues = $tab;
        return $this;
    }
    function setModele($tab)
    {
        $this->modele = $tab;
        return $this;
    }
    // ex4 - definir dans la classe Voiture, une constante qui s'appelle roule 
    // et lui attribuer la valeur "Cette voiture roule bien"
    const ROULE = "Cette voiture roule bien";
    function rouler()
    {
        echo self::ROULE;
    }

    function __construct($nbRoues, $couleur, $marque, $modele)
    {
        $this->nbRoues = $nbRoues;
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
        self::$nbObj++; // pour appeler la methode statique dans la classe -- self::nomdelamethode;
    }
    function getNbRoues()
    {
        return $this->nbRoues;
    }
    function getCouleur()
    {
        return $this->couleur;
    }
    function getMarque()
    {
        return $this->marque;
    }
    function getModele()
    {
        return $this->modele;
    }
}


// créer un nouvel objet de la classe Voiture
// affciher sa marque et son modele
// changer sa couleur, sa marque et son modele
// afficher le nb de roues
// modifier le nb de roues

// $bmw = new Voiture(4, "red", "BMW", "M1");
// echo $bmw->getMarque() . "<br>";
// echo $bmw->getModele() . "<br>";
// $bmw->setCouleur("yellow")->setModele("Peugeot")->setMarque("106");
// echo $bmw->getMarque() . "<br>" . $bmw->getModele() . "<br>" . $bmw->getCouleur() . "<br>";
// echo $bmw->getNbRoues() . "<br>";
// $bmw->setNbRoues(6);
// echo $bmw->getNbRoues();
