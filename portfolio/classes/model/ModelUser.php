<?php
require_once "connexion.php";
class ModelUser
{
    public static function ajoutUser($nom, $prenom, $mail, $tel, $adresse, $photo, $description)
    {
        $idcon = connexion();

        $requete = $idcon->prepare("INSERT INTO user VALUES (null,:nom, :prenom, :mail, :tel, :adresse, :photo, :descriptions)");
        $requete->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':mail' => $mail,
            ':tel' => $tel,
            ':adresse' => $adresse,
            ':photo' => $photo,
            ':descriptions' => $description
        ]);
    }
    public static function listeUsers(){
        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT * FROM user
        ");
        $requete->execute();
        return $requete->fetchAll();
    }
    
}

