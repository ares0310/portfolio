<?php
require_once "connexion.php";

class Login
{
    public static function inscription($mail, $password)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("INSERT INTO connexion VALUES (:mail, :password)");
        $requete->execute([":mail" => $mail, ":password" => $password]);
    }
    public static function getEmail($mail){
        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT * FROM connexion WHERE mail = :mail
        ");
        $requete->execute([":mail"=>$mail]);
        return $requete->fetch();
    }
}
