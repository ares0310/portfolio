<?php
require_once "../view/ViewTemplate.php";


class Utilsa
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
            "photo" => "/^[\w\s\-\.]{1,22}(.jpg|.jpeg|.png|.gif)$/",
            "id" => "/[\d]+/"

        ];

        //https://www.php.net/manual/fr/filter.filters.validate.php
        switch ($type) {
            case "email":
                if (filter_var($str, FILTER_VALIDATE_EMAIL)) {
                    $valide = true;
                }
                break;
            case "url":
                if (filter_var($str, FILTER_VALIDATE_URL)) {
                    $valide = true;
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
            $tab = Utilsa::validation($donnees[$i], $types[$i]);
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

    public static function upload($extensions, $fichier)
    {
        // ctrl de nom ==> regex (pas de caract speciaux)
        // ctrl sur les extensions autorisees
        // ne pas ecraser un fichier existant
        // ctrl de taille

        $file_name = $fichier['name'];
        $file_size = $fichier['size'];
        $file_tmp = $fichier['tmp_name'];
        $file_ext = strtolower(pathinfo($fichier['name'], PATHINFO_EXTENSION));
        $uploadOk = false;
        $errors = "";
$pattern = "/^[\w\s-.]{4,}$/";
        if (!preg_match($pattern, $file_name)) {
            $errors .= "Nom de fichier non valide. <br/>";
        }

        if (!in_array(strtolower($file_ext), $extensions)) {
            $errors .= "extension non autorisée. <br/>";
        }

        if ($file_size > 3000000) {
            $errors .= "taille du fichier ne doit pas dépasser 3 Mo. <br/>";
        }

        $file_name = substr(md5($fichier['name']), 10) . ".$file_ext";

        while (file_exists(ROOT_DIR . "/photos/$file_name")) {
            $file_name = substr(md5($file_name), 10) . ".$file_ext";
        }

        if ($errors === "") {
            if (move_uploaded_file($file_tmp, ROOT_DIR . "/photos/" . $file_name)) {
                $uploadOk = true;
                return ["uploadOk" => $uploadOk, "file_name" => $file_name, "errors" => $errors];
            } else {
                $errors .= "Echec de l'upload. <br/>";
            }
        }

        return ["uploadOk" => false, "file_name" => "", "errors" => "Aucun fichier n'est uploadé.<br>$errors"];
    }
}