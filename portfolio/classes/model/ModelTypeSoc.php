<?php 
require_once "connexion.php";

class ModelTypeSoc{
    public static function ajoutSocial($soc){
        $idcon = connexion();
        $requete = $idcon->prepare("INSERT INTO type_soc VALUES (null,:soc)");
        $requete->execute([":soc"=>$soc]);
    }
    public static function listeTypeSoc(){
        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT * FROM type_soc
        ");
        $requete->execute();
        return $requete->fetchAll();
    }

    public static function infoTypeSoc($id){
        $idcon = connexion();
        $requete = $idcon->prepare("SELECT * FROM type_soc WHERE id = :id");
        $requete->execute([":id" => $id]);
        return $requete->fetch();
    }
    public static function modifTypeSoc($id, $typeSoc){
        $idcon=connexion();
        $requetModif=$idcon->prepare("UPDATE type_soc SET type_soc = :type_soc WHERE id = :id");
        $requetModif->execute([
            ':id' => $id,
            ':type_soc' => $typeSoc
         ]);
    }
    public static function SuppressionTypeSoc($id){
        $idcon=connexion();
        $requetSuppr=$idcon->prepare("DELETE FROM type_soc WHERE id  = :id");
        $requetSuppr->execute([":id" => $id]);
        
    }
    public static function choixType_soc(){
        $idcon=connexion();
        $requeteChoix=$idcon->prepare("SELECT * FROM type_soc");
        $requeteChoix->execute();
        return $requeteChoix-> fetchAll();

    }
}