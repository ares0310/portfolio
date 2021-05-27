<?php 
require_once "connexion.php";

class ModelUser {

    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $pass;
    private $tel;
    private $role;
    private $confirme;
    private $actif;
    private $token;
    private $annonces;
    private $favoris;

    function __construct($id)
    {
        $this->id = $id;        
        $dataUser = $this->getUserById($id);
        $this->nom = $dataUser["nom"];
        $this->prenom = $dataUser["prenom"];
        $this->mail = $dataUser["mail"];
        $this->pass = $dataUser["pass"];
        $this->tel = $dataUser["tel"];
        $this->role = $dataUser["role"];
        $this->confirme = $dataUser["confirme"];
        $this->actif = $dataUser["actif"];
        $this->token = $dataUser["token"];
        $this->annonces = 1;
        $this->favoris = 1;
    }

    // getter dynamique qui cible les proprietes prives
    public function getData($var)
    {
      return $this -> $var;
    }

    public function setData($var, $var2)
    {
        $this -> $var = $var2; 
        return $this;
    }




    



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
    public static function getUserById($id){
        $idcon = connexion();
        $requete = $idcon -> prepare("SELECT * FROM user WHERE id = :id");
        $requete -> execute([":id" => $id]);
        $user = $requete->fetch();
        return $user;
    }
    // confirmer le compte en remplaçant 0 par 1
    public static function confirmation($mail, $token){
        $idcon = connexion();
        $requete = $idcon -> prepare("UPDATE user SET confirme = '1', actif = '1' WHERE mail = :mail AND token = :token");
        $requete -> execute([
            ":mail" => $mail,
            ":token" => $token
        ]);
    }
    public static function tokenReset($mail, $token){
        $idcon = connexion();
        $requete = $idcon -> prepare("UPDATE user SET token = :token WHERE mail = :mail");
        $requete -> execute([":mail" => $mail, ":token" => $token]);
    }

    public static function activation($mail){
        $idcon = connexion();
        $requete = $idcon -> prepare("SELECT * FROM user WHERE mail = :mail");
        $requete -> execute([":mail" => $mail]);
    }
    public static function resetMdp($mail, $password){
        $idcon = connexion();
        $requete = $idcon -> prepare("UPDATE user SET pass = :password WHERE mail = :mail");
        $requete -> execute([":mail" => $mail,":password" => $password]);
    }
}







?>