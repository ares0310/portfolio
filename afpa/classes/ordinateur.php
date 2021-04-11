<?php

class Ordinateur
{
    public $taille;
    public $marque;
    public $poids;
    public $type;


    // ex 1- fonction qui affiche le message : "on a un ordinateur"
    function message()
    {
        echo "on a un ordinateur";
    }

    // ex2- fonction qui affiche les valeurs des attributs de la classe (taille, marque, poids, type -> portable ou non)
    function attribut()
    {
        echo $this->taille . "<br>" . $this->marque . "<br>" . $this->poids . "<br>" . $this->type;
    }

    // ex3 -  créer les methodes necessaires pour pouvoir modifier les attributs de la classe
    function __construct($taille, $marque, $poids, $type)
    {
        $this->taille = $taille;
        $this->marque = $marque;
        $this->poids = $poids;
        $this->type = $type;
    }

    // SETTERS
    function setTaille($taille)
    {
        $this->taille = $taille;
    }

    function setMarque($marque)
    {
        $this->marque = $marque;
    }

    function setPoids($poids)
    {
        $this->poids = $poids;
    }

    function setType($type)
    {
        $this->type = $type;
    }


    // GETTERS
    function getTaille()
    {
        return $this->taille;
    }

    function getMarque()
    {
        return $this->marque;
    }

    function getPoids()
    {
        return $this->poids;
    }

    function getType()
    {
        return $this->type;
    }

    // ex4 - definir dans la classe Ordinateur, une constante qui s'appelle roule 
    // et lui attribuer la valeur "Cet ordinateur marche bien"

    const MESSAGE_ALERT = "Cet ordinateur marche bien";
}

$macbook = new Ordinateur("XL", "Macbook", "3kg", "portable");
// echo $macbook->getTaille() . "<br>" . $macbook->getMarque() . "<br>" . $macbook->getPoids() . "<br>" . $macbook->getType();






// créer un nouvel objet de la classe Ordinateur affciher sa marque et sa taille,  changer son type

$hp = new Ordinateur("M", "Hewlet Packard", "2.6kg", "statique");
echo "<br>" . $hp->getMarque() . "<br>" . $hp->getTaille() . "<br>";

$hp->setType("portable");
echo $hp->getType();



