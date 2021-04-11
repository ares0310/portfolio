<?php

// $tableau = array("h", "b", "f", "d" );

// function ordreAlph($tab) {
//     sort($tab);
//     echo end($tab);
// }

// ordreAlph($tableau);

// EX 2 on vous donne une chaine de caract, on veut afficher chaque mot sur une ligne
// $ch = "chaine de caractere";

// function ligne($tab){
//     echo str_replace(" ", "<br>", $tab);
// }

// ligne($ch)

// EX 3 on vous donne un tab de chaines de carac, on veut afficher son contenu dans une seule ligne
// $tableau1 = array("test", "here", "there");
// function oneLineTab($tab){
//     foreach ($tab as $value) {
//         echo "$value" . " ";
//     }
// }
// oneLineTab($tableau1)

// EX 4 afficher la racine carré d'un nombre donné (il faut que le nombre soit positif, s'il ne l'est pas on retourne -1)
// function racineCarre($tab){
//     $racine = sqrt($tab);
//     if ($tab < 0) {
//         return "-1";
//     }
//     else{
//         return $racine;
//     }

// }
// echo racineCarre(500)

// 5-on vous donne un tab d'entier, si la val max de ce tab> 100, retourner 1 sinon reourner -1
// $tableau2 = [44, 77, 12];
// $tableau3 = [23, 54];
// function max100ce($tab){
//     $tab<100 ? $i=-1 : $i=1;  
//     return $i;
// }

// echo max100ce($tableau2)

// 6-créer une focntion qui genere n nombre aleatoires (n nombre donné), on les affiche et on retourne leur somme
// function randomNum($tab){
//     $num = 0;
//     $var = 0;
//     for($i = 1; $i <= $tab; $i++){
//         $var = (rand(10,100));
//         echo $var . "<br>";
//         $num+=$var;
//     }
//     return $num;
// }
// echo randomNum(6)
// ex7- on veut afficher chaque pays, sa capitale, son nb habitants et son PIB
// $capitales = [
//     ["France" => ["Paris", 215646, 14646848498]],
//     ["Belgique" => ["Bruxelles", 1545748, 1877987]],
//     ["Allemagne" => ["Berlin", 47948, 48798489787]],
//     ["Espagne" => ["Madrid", 54564456, 4748989]],
// ];
// function listePays($tab)
// {
//     foreach ($tab as $nb => $infos) {
//         echo "pays" . ($nb + 1) . " : ";
//         foreach ($infos as $c => $v) {
//             echo $c . " : "  . "<br>";
//             foreach ($v as $n) {
//                 echo $n . " <br> ";
//             }
//         }
//     }
// }

// echo listePays($capitales);

// CORRIGE
// function pays($capitales)
// {
//     foreach ($capitales as $pays => $val) {
//         foreach ($capitales[$pays] as $donnees => $donnee) {
//             echo  "Pays : " . $donnees . "<br>";
//             echo "Capitale : " . $donnee[0] . "<br>";
//             echo "nb habitants : " . $donnee[1] . "<br>";
//             echo "PIB : " . $donnee[2] . "<br><br>";
//         }
//     }
// }

// pays($capitales);

// $motdepasse = "jqjflisdjfE3&";

// function password($x)
// {
//     strlen($x) < 8 ? $t = -1 : $t = 1;
//     strtolower($x) != $x ? $t1 = 1 : $t1 = -1;
//     strtoupper($x) != $x ? $t2 = 1 : $t2 = -1;
//     (strpos($x, "?") + strpos($x, "&") + strpos($x, "$") + strpos($x, "!")) + 1 == 1 ? $t3 = -1 : $t3 = 1;
//     for ($i = 0; $i < strlen($x); $i++) {

//         if (is_numeric($x[$i])) {
//             $t4 = 1;
//             break;
//         } else {
//             $t4 = -1;
//         }
//     };
//     $t += $t1 + $t2 + $t3 + $t4;
//     return $t == 5 ? 1 : -1;
// }
// echo password($motdepasse);

// EX8calcul de la factorielle d'un nb
// sachant que la factoeielle de 4 se calcule comme suit :  4x3x2x1 = 24
// function calculFactoriel($x){
//     $result = 0;
//     $a = 1;
//     for($i = 0; $i <= $x; $i++){
//         $result += $x * ($x - $a);
//         if($x==$a){
//             return $result;
//         }
//         $a+=1;
        
//     }
// }
// echo calculFactoriel(10)

// ex-9 afficher ta table de multiplication (matrice)
// function table(){
//     for ($i=1; $i<=10; $i++){
//         for($p=1; $p<=10; $p++){
//             echo $i * $p . " ";
//         }
//         echo "<br>";
//     }
// }
// echo table()

// EXO SAPIN
// $a = "*";
// $i = 0;
// while ($i<10){
//     echo $a . "\n";
//     $a = $a . "*";
//     $i++;
// }

phpinfo();


?>
