<?php
require_once "../view/viewTemplate.php";


class Utils
{
    // validation pour une seule expression
    public static function validation($str, $type)
    {
        $valide = false;
        $str = trim(strip_tags((string)$str));

        //https://www.php.net/manual/fr/regexp.reference.unicode.php
        $tabRegex = [
            "non" => "//",
            "test" => '/[\w]123/',
            "nom" => "/^[\p{L}\s]{2,}$/u",
            "prenom" => "/^[\p{L}\s]{2,}$/u",
            "tel" => "/^[+]?[0-9]{8,}$/",
            "password" => "/.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/",
            "photo" => "/^[\w\s\-\.]{1,22}(.jpg|.jpeg|.png|.gif)$/",
            "id" => "/[\d]+/"
        ];

        //https://www.php.net/manual/fr/filter.filters.validate.php
        switch ($type) {
            case "mail":
                if (filter_var($str, FILTER_VALIDATE_EMAIL)) {
                    $valide = true;
                }
                break;
            case "url":
                if (filter_var($str, FILTER_VALIDATE_URL)) {
                    $valide = true;
                }
                break;
            case "password":
                if(preg_match($tabRegex[$type], $str)){
                    $valide=true;
                }
                break;
            case "non":
                $valide = true;
                
            default:
                if (preg_match($tabRegex[$type], $str)) {
                    $valide = true;
                }
        }
$valide === true ? $message = "" : $message = "Le champ $type n'est pas au format demandé.<br/>";

        $errorsTab = [$str, $message];
        return $errorsTab;
    }

    public static function valider($donnees, $types)
    {
        $erreurs = "";
        $donneesValides = []; // donnee = str apres nettoyage 
        for ($i = 0; $i < count($donnees); $i++) {
            $tab = Utils::validation($donnees[$i], $types[$i]);
            if ($tab[1]) {
                $erreurs .= $tab[1];
            }
            $donneesValides[] = $tab[0];
        }
        if ($erreurs) {
            ViewTemplate::alert($erreurs, "danger", null);
            return false;
        }
        return
            $donneesValides;
    }
}