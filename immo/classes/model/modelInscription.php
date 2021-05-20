<?php 
require_once "connexion.php";

class Login {
    public static function inscription($nom, $prenom, $mail, $pass, $tel, $role, $confirme, $actif, $token){
        $idcon = connexion();
        $requete = $idcon -> prepare("INSERT INTO user VALUES (null, :nom, :prenom, :mail, :pass, :tel, :role, :confirme, :actif, :token)");
        $requete -> execute([
        ":nom" => $nom, 
        ":prenom" => $prenom, 
        ":mail" => $mail, 
        ":pass" => $pass, 
        ":tel" => $tel,
        ":role" => $role, 
        ":confirme" => $confirme, 
        ":actif" => $actif, 
        ":token" => $token]); 
    }
    // tester l'unicité du mail
    public static function getEmail($mail){
        $idcon = connexion();
        $requete = $idcon -> prepare("SELECT * FROM user WHERE mail = :mail");
        $requete -> execute([":mail" => $mail]);
        $user = $requete->fetch();
        return $user;
    }
    // confirmer le compte en remplaçant 0 par 1
    public static function confirmation($mail, $token){
        $idcon = connexion();
        $requete = $idcon -> prepare("UPDATE user SET confirme = '1' WHERE mail = :mail AND token = :token");
        $requete -> execute([
            ":mail" => $mail,
            ":token" => $token
        ]);
    }
}







?>