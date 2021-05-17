<?php
require_once "connexion.php";
class ModelEtab {
    public static function ajoutEtab($nom,$ville,$secteur)    {
        $idcon = connexion();
        $requete = $idcon->prepare("INSERT INTO etab VALUES (null, :nom ,:ville ,:secteur)"); //id 
        $requete->execute([':nom' => $nom,
                           ':ville' => $ville , 
                           ':secteur' => $secteur ]); 
    }
    public static function listEtab()    { 
        $idcon = connexion();
        $requete = $idcon->prepare("SELECT * FROM etab");
        $requete->execute();
        return $requete->fetchAll(); // renvoi
    }
    public static function getEtabId($id)    {
        $idcon = connexion();
        $requete = $idcon->prepare("SELECT * FROM etab where id=:id");
        $requete->execute([':id' => $id,]);
        return $requete->fetch();
    }
    public static function modifEtab($id, $nom, $ville, $secteur)   {
        $idcon = connexion();
        $requetModif = $idcon->prepare("UPDATE etab SET nom=:nom, ville=:ville, secteur=:secteur WHERE id=:id"); 
        $requetModif->execute([':id' => $id,
                               ':nom' => $nom, 
                               ':ville' => $ville,
                               ':secteur' => $secteur]);
    }
    public static function supprEtab($id)    {
        $idcon = connexion();
        $requetSuppr = $idcon->prepare("DELETE FROM etab WHERE id=:id"); //
        $requetSuppr->execute([':id' => $id,]); 
    }
}
?>