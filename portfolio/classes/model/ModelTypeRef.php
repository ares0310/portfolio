<?php 
require_once "connexion.php";

class ModelTypeRef{
    public static function ajoutTypeRef($type_ref, $support){
        $idcon = connexion();
        $requete = $idcon -> prepare("INSERT INTO type_ref VALUES (null, :type_ref, :support)");
        $requete->execute([":type_ref"=>$type_ref,":support"=>$support]);
    }
    public static function listeTypeRef(){
        $idcon = connexion();
        $requete = $idcon -> prepare("SELECT * FROM type_ref");
        $requete->execute();
        return $requete->fetchAll();
    }
    public static function infoTypeRef($id){
        $idcon = connexion();
        $requete = $idcon -> prepare("SELECT * FROM type_ref WHERE id = :id");
        $requete->execute([":id" => $id]);
        return $requete->fetch();
    }
    public static function modifTypeRef($id, $type_ref, $support){
        $idcon = connexion();
        $requete = $idcon -> prepare("UPDATE type_ref
        SET type_ref = :type_ref , support = :support
        WHERE id = :id");
        $requete -> execute([":type_ref" => $type_ref, ":support" => $support, ":id"=>$id]);
    }
    public static function supprTypeRef($id){
        $idcon = connexion();
        $requete = $idcon -> prepare("DELETE FROM type_ref WHERE id = :id");
        $requete->execute([":id" => $id]);
    }
}