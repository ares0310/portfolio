<?php

class Voture
{
    private $nbRoues;
    private $couleur;
    private $marque;
    private $modele;

    function __construct($nbRoues, $couleur, $marque, $modele)
    {
        $this->nbRoues = $nbRoues;
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
    }
    // recuprer la val de nbRoues (public par default)
    function getNbRoues()
    {
        return $this->nbRoues;
    }
    // modifier l'attribut nbRoues
    function setNbRoues($nb)
    {
        $this->nbRoues = $nb;
        return $this;
    }
    function getCouleur()
    {
        return $this->couleur;
    }
    // modifier l'attribut nbRoues
    function setCouleur($couleur)
    {
        $this->couleur = $couleur;
        return $this;
    }
    function getMarque()
    {
        return $this->marque;
    }
    // modifier l'attribut nbRoues
    function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;
    }
    function getModele()
    {
        return $this->modele;
    }
    // modifier l'attribut nbRoues
    function setModele($modele)
    {
        $this->modele = $modele;
        return $this;
    }
}
