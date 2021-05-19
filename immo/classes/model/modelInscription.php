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
}







?>