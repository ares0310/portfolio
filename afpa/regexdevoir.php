<?php

// 1- valider un mot de passe avec les conditions suivantes :
// doit commencer par une maj, suivie par min, 
// ensuite un ensemble de lettres et chiffres et il finit par un caractere special (&$%!?)
function password($tab){
    if(preg_match("/^[A-Z][a-z][a-z0-9]{5,}[&$%!?]$/" ,$tab)){
        echo "le mot de passe est validé";
    }
    else {
        echo "le mot de passe est invalide";
    }
}
// echo password("Motde444passe");


// 2- valider une adresse mail
function email($tab)
{
    if (preg_match("/^[\w.-]{2,}@[a-z0-9\-]{2,}[.][a-z]{2,}$/", $tab)) {
        echo "adresse mail validé";
    } else {
        echo "adresse mail invalide";
    }
}
// echo email("arsenraz222iyev@gmail.com");

// 3- valider une adresse postale
function adresse($tab)
{
    if (preg_match("/^[0-9]{1,}[\s][a-zA-Z,'-0-9\s]{1,}$/", $tab)) {
        echo "adresse validé";
    } else {
        echo "adresse invalide";
    }
}
// echo adresse("3 rue triolo, Villeneuve d'Ascq, France");
// caracteres autorises : lettres, chiffres, . (point), - (tiret de 6), (_) tiret de 8
// 4- valider un code postal en France (5 chiffres)
function codePostal($tab)
{
    if (preg_match("/^[0-9][0-9]{4}$/", $tab)) {
        echo "Code postal validé";
    } else {
        echo "Code postale invalide";
    }
}
// echo codePostal("51000");
// 5- remplacer les num de téléphones (succession de chiffres avec ou sans espace, 
// tiret de 6  (-), tiret de 8 (_) ) par la chaine "non autorisé" (utiliser l'une des fonctions regex)
// NB : lorsque vous faites des remplacements multiples avec preg_replace, pensez à enlever les ^ et $ (à moins que vous en ayez besoin) pour que le remplacement soit fait pour toutes les occurences

$str = 'message 01-23-45-67-89 p suite 01/23/25/69/87  lettres 01.23.25.69.87 encore lettres 01 23 25 69 87 ou 0123256987';

function telephone($tab){
    return preg_replace("/0[1-9]([-.\/\s]?\d{2}){4}/", "nope", $tab);
}

// echo telephone($str);

// ex6-  on va reprendre le meme exemple du mot de passe
// contraintes :   1-   existance d'une lettre maj, lettre min, des ch=ffres, un caractère spécial  (!@#$%^&*-)
// 2-l'ordre n'est pas important
// 3- min 8 caracteres, max 20 caracteres

function password2($tab){
    if(preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*-]).{8,20}/" ,$tab)){
        echo "le mot de passe est validé";
    }
    else {
        echo "le mot de passe est invalide";
    }
}
echo password2("Z44zz#zzzzzzpa");

