<?php

// if (preg_match("#piano.$#", "J'aime jouer du piano."))
// {
//     echo 'VRAI';
// }
// else
// {
//     echo 'FAUX';
// }

// ex1-
// faire une fonction qui teste si une chaine correspond à un num de tel en france (10 chiffres)
function numFrance($num){
    // ^0[1-9][0-9]{8}$ --- pour les cas 06 05 04 03 02
    if(preg_match( "/^33[0-9]{9}$/",$num)){
        echo "Le numéro " . $num . " appelle de France";
    }
    else{
        echo "Le numéro" . $num . "n'est pas français";
    }
}

// echo numFrance(33778176293);

// ex2- pareil (toujours fonction qui teste une regex)
// nom de personne : ne doit contenir que des lettres
// /^[a-z]{2,}$/i ---- autre methode pour bien inciter aux prenoms minimum 2 chaines de caractère
function nom($name){
    if(preg_match("/^[A-Z][a-z]+$/i",$name)){
        echo "son nom est : " . $name;
    }
    else{
        echo "nom invalide";
    }
}
// echo nom("Liamovitch");

// ex3 -
// un nom d utilisateur qui ne contient que des lettres et chiffres, _ ou -, il doit commencer par une lettre
// '#^[a-z][\w-]{2,}$#i ---- version plus courte encore
function username($login){
    if(preg_match("/^[a-z][a-z0-9_-]{2,}$/i",$login)){
        echo "son utilisateur est : " . $login;
    } else {
        echo "nope";
    }
}

echo username("Deer");


?>

